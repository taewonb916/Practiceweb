<?php
/**
 * 옵션 데이터
 * @link https://www.cosmosfarm.com/
 * @copyright Copyright 2020 Cosmosfarm. All rights reserved.
 */
class Cosmosfarm_Share_Buttons_Option {
	
	var $sns;
	var $post_display;
	var $post_align;
	var $page_display;
	var $page_align;
	var $excerpt_display;
	var $excerpt_align;
	var $kboard_display;
	var $kboard_align;
	var $product_display;
	var $product_align;
	var $active;
	var $kakao_sdk_key;
	var $default_img_src;
	var $url_type;
	var $naver_openmain_active;
	var $naver_openmain_name;
	var $naver_openmain_url;
	var $naver_openmain_type;
	
	public function __construct(){
		$this->sns = array(
			'naver' => __('Naver', 'cosmosfarm-share-buttons'),
			'facebook' => __('Facebook', 'cosmosfarm-share-buttons'),
			'twitter' => __('Twitter', 'cosmosfarm-share-buttons'),
			'band' => __('Band', 'cosmosfarm-share-buttons'),
			'kakaostory' => __('KakaoStory', 'cosmosfarm-share-buttons'),
			'kakaotalk' => __('KakaoTalk', 'cosmosfarm-share-buttons'),
			'google' => __('Google+', 'cosmosfarm-share-buttons'),
			'line' => __('Line', 'cosmosfarm-share-buttons'),
		);
		$this->init();
	}
	
	public function init(){
		$this->post_display = get_option('cosmosfarm_share_post_display', '');
		$this->post_align = get_option('cosmosfarm_share_post_align', '');
		$this->page_display = get_option('cosmosfarm_share_page_display', '');
		$this->page_align = get_option('cosmosfarm_share_page_align', '');
		$this->excerpt_display = get_option('cosmosfarm_share_excerpt_display', '');
		$this->excerpt_align = get_option('cosmosfarm_share_excerpt_align', '');
		$this->kboard_display = get_option('cosmosfarm_share_kboard_display', '');
		$this->kboard_align = get_option('cosmosfarm_share_kboard_align', '');
		$this->product_display = get_option('cosmosfarm_share_product_display', '');
		$this->product_align = get_option('cosmosfarm_share_product_align', '');
		$this->active = get_option('cosmosfarm_share_active', array());
		$this->kakao_sdk_key = get_option('cosmosfarm_share_kakao_sdk_key', '');
		$this->default_img_src = get_option('cosmosfarm_share_default_img_src', '');
		$this->url_type = get_option('cosmosfarm_share_url_type', '');
		$this->naver_openmain_active = get_option('cosmosfarm_share_naver_openmain_active', '');
		$this->naver_openmain_name = get_option('cosmosfarm_share_naver_openmain_name', '');
		$this->naver_openmain_url = get_option('cosmosfarm_share_naver_openmain_url', '');
		$this->naver_openmain_type = get_option('cosmosfarm_share_naver_openmain_type', '');
	}
	
	public function save(){
		$this->update('cosmosfarm_share_post_display');
		$this->update('cosmosfarm_share_post_align');
		$this->update('cosmosfarm_share_page_display');
		$this->update('cosmosfarm_share_page_align');
		$this->update('cosmosfarm_share_excerpt_display');
		$this->update('cosmosfarm_share_excerpt_align');
		$this->update('cosmosfarm_share_kboard_display');
		$this->update('cosmosfarm_share_kboard_align');
		$this->update('cosmosfarm_share_product_display');
		$this->update('cosmosfarm_share_product_align');
		$this->updateWithDefault('cosmosfarm_share_active', array());
		$this->update('cosmosfarm_share_kakao_sdk_key');
		$this->update('cosmosfarm_share_default_img_src');
		$this->update('cosmosfarm_share_url_type');
		$this->update('cosmosfarm_share_naver_openmain_active');
		$this->update('cosmosfarm_share_naver_openmain_name');
		$this->update('cosmosfarm_share_naver_openmain_url');
		$this->update('cosmosfarm_share_naver_openmain_type');
	}
	
	public function update($option_name){
		if(isset($_POST[$option_name])){
			if(is_string($_POST[$option_name])){
				$new_value = trim($_POST[$option_name]);
			}
			else{
				$new_value = $_POST[$option_name];
			}
			if(get_option($option_name) !== false){
				update_option($option_name, $new_value, 'yes');
			}
			else add_option($option_name, $new_value, '', 'yes');
		}
	}
	
	public function updateWithDefault($option_name, $default){
		if(isset($_POST[$option_name])){
			if(is_string($_POST[$option_name])){
				$new_value = trim($_POST[$option_name]);
			}
			else{
				$new_value = $_POST[$option_name];
			}
			if(get_option($option_name) !== false){
				update_option($option_name, $new_value, 'yes');
			}
			else add_option($option_name, $new_value, '', 'yes');
		}
		else{
			update_option($option_name, $default, 'yes');
		}
	}
	
	public function truncate(){
		delete_option('cosmosfarm_share_post_display');
		delete_option('cosmosfarm_share_post_align');
		delete_option('cosmosfarm_share_page_display');
		delete_option('cosmosfarm_share_page_align');
		delete_option('cosmosfarm_share_excerpt_display');
		delete_option('cosmosfarm_share_excerpt_align');
		delete_option('cosmosfarm_share_kboard_display');
		delete_option('cosmosfarm_share_kboard_align');
		delete_option('cosmosfarm_share_product_display');
		delete_option('cosmosfarm_share_product_align');
		delete_option('cosmosfarm_share_active');
		delete_option('cosmosfarm_share_kakao_sdk_key');
		delete_option('cosmosfarm_share_default_img_src');
		delete_option('cosmosfarm_share_url_type');
		delete_option('cosmosfarm_share_naver_openmain_active');
		delete_option('cosmosfarm_share_naver_openmain_name');
		delete_option('cosmosfarm_share_naver_openmain_url');
		delete_option('cosmosfarm_share_naver_openmain_type');
	}
}