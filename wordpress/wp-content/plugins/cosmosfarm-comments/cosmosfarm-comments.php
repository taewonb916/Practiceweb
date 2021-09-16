<?php
/*
Plugin Name: 코스모스팜 소셜댓글
Plugin URI: http://www.cosmosfarm.com/plugin/comments
Description: 사용 할 수록 홈페이지가 자연적으로 홍보되는 차세대 소셜댓글 서비스 입니다.
Version: 1.9.1
Author: 코스모스팜 - Cosmosfarm
Author URI: http://www.cosmosfarm.com/
*/

if(!defined('ABSPATH')) exit;

define('COSMOSFARM_COMMENTS_VERSION', '1.9.1');
define('COSMOSFARM_COMMENTS_DIR_PATH', dirname(__FILE__));
define('COSMOSFARM_COMMENTS_URL', plugins_url('', __FILE__));

include_once 'class/Cosmosfarm_Comments_Core.class.php';
include_once 'class/Cosmosfarm_Comments_Widget.class.php';

function cosmosfarm_comments_core(){
	static $core;
	if($core === null){
		$core = new Cosmosfarm_Comments_Core();
	}
	return $core;
}

add_action('init', 'cosmosfarm_comments_init');
function cosmosfarm_comments_init(){
	$core = cosmosfarm_comments_core();
	add_action('admin_menu', array($core, 'add_admin_menu'));
	
	if(isset($_GET['cosmosfarm_comments_request_token']) && $_GET['cosmosfarm_comments_request_token'] == $core->get_request_token()){
		add_action('template_redirect', array($core, 'print_profile'));
	}
	
	if(get_option('cosmosfarm_comments_plugin_id') && get_option('use_cosmosfarm_comments_plugin') && !is_admin()){
		add_action('wp_footer', array($core, 'print_plugin_id'), 1);
		add_filter('comments_template', array($core, 'template'), 999);
		add_filter('comments_number', array($core, 'number'), 999);
		wp_enqueue_style('cosmosfarm-comments-plugin-template', COSMOSFARM_COMMENTS_URL . '/template/comments.css', array(), COSMOSFARM_COMMENTS_VERSION);
		wp_enqueue_script('cosmosfarm-comments-plugin', 'https://plugin.cosmosfarm.com/comments.js', array(), '1.0', true);
		wp_enqueue_script('cosmosfarm-comments-plugin-template', COSMOSFARM_COMMENTS_URL . '/template/comments.js', array(), COSMOSFARM_COMMENTS_VERSION, true);
	}
}

add_action('widgets_init', 'cosmosfarm_comments_widgets');
function cosmosfarm_comments_widgets(){
	register_widget('Cosmosfarm_Comments_Widget');
}

add_shortcode('cosmosfarm_comments','cosmosfarm_comments');
function cosmosfarm_comments($args=array()){
	global $post;
	
	if(isset($args['href']) && $args['href']){
		$href = $args['href'];
		
		ob_start();
		include_once COSMOSFARM_COMMENTS_DIR_PATH . '/template/comments.php';
		return ob_get_clean();
	}
	
	return '';
}

register_activation_hook(__FILE__, 'cosmosfarm_comments_activation');
function cosmosfarm_comments_activation($networkwide){
	global $wpdb;
	if(function_exists('is_multisite') && is_multisite()){
		if($networkwide){
			$old_blog = $wpdb->blogid;
			$blogids = $wpdb->get_col("SELECT `blog_id` FROM $wpdb->blogs");
			foreach($blogids as $blog_id){
				switch_to_blog($blog_id);
				cosmosfarm_comments_activation_execute();
			}
			switch_to_blog($old_blog);
			return;
		}
	}
	cosmosfarm_comments_activation_execute();
}

function cosmosfarm_comments_activation_execute(){
	global $wpdb;
	
	require_once ABSPATH . 'wp-admin/includes/upgrade.php';
	$charset_collate = $wpdb->get_charset_collate();
	
	dbDelta("CREATE TABLE `{$wpdb->prefix}cosmosfarm_comments_token` (
	`user_id` bigint(20) unsigned DEFAULT NULL,
	`access_token` varchar(128) DEFAULT NULL,
	`expiry` char(14) DEFAULT NULL,
	UNIQUE KEY `access_token` (`access_token`),
	KEY `user_id` (`user_id`),
	KEY `expiry` (`expiry`)
	) {$charset_collate};");
}

register_uninstall_hook(__FILE__, 'cosmosfarm_comments_uninstall');
function cosmosfarm_comments_uninstall(){
	global $wpdb;
	if(function_exists('is_multisite') && is_multisite()){
		$old_blog = $wpdb->blogid;
		$blogids = $wpdb->get_col("SELECT `blog_id` FROM $wpdb->blogs");
		foreach($blogids as $blog_id){
			switch_to_blog($blog_id);
			cosmosfarm_comments_uninstall_execute();
		}
		switch_to_blog($old_blog);
		return;
	}
	cosmosfarm_comments_uninstall_execute();
}

function cosmosfarm_comments_uninstall_execute(){
	global $wpdb;
	$wpdb->query("DROP TABLE `{$wpdb->prefix}cosmosfarm_comments_token`");
}