<?php
/**
 * 소셜 공유 버튼 By 코스모스팜
 * @link https://www.cosmosfarm.com/
 * @copyright Copyright 2020 Cosmosfarm. All rights reserved.
 */
final class Cosmosfarm_Share_Buttons {
	
	var $option;
	private $kboard_content_uid = 0;
	
	public function __construct(){
		new Cosmosfarm_Share_Buttons_Controller();
		$this->option = new Cosmosfarm_Share_Buttons_Option();
		
		if($this->option->active){
			add_filter('the_content', array($this, 'content_add_share_buttons'), 10, 1);
			add_filter('the_excerpt', array($this, 'excerpt_add_share_buttons'), 10, 1);
			
			if(defined('KBOARD_VERSION')){
				add_filter('kboard_content', array($this, 'kboard_add_share_buttons'), 10, 2);
			}
		}
		
		add_shortcode('cosmosfarm_share_buttons', array($this, 'shortcode'));
	}
	
	public function add_admin_menu(){
		add_options_page('소셜 공유 버튼 By 코스모스팜', '소셜 공유 버튼', 'administrator', 'cosmosfarm-share-buttons', array($this, 'setting'));
	}
	
	public function setting(){
		wp_enqueue_media();
		
		$response = wp_remote_get('http://updates.wp-kboard.com/v1/AUTH_3529e134-c9d7-4172-8338-f64309faa5e5/kboard/news.json');
		
		if(!is_wp_error($response) && isset($response['body']) && $response['body']){
			$news_list = json_decode($response['body']);
		}
		else{
			$news_list = array();
		}
		
		$option = new Cosmosfarm_Share_Buttons_Option();
		include COSMOSFARM_SHARE_BUTTONS_DIR_PATH . '/admin/settings.php';
	}
	
	public function shortcode($args){
		$args = shortcode_atts(array('url'=>'', 'title'=>'', 'align'=>'left'), $args);
		$args['align'] = explode('|', $args['align']);
		$args['align'] = reset($args['align']);
		return $this->get_share_buttons($args['align'], $args['url'], $args['title']);
	}
	
	public function content_add_share_buttons($content){
		$option = $this->option;
		
		if($option->post_display && is_single()){
			$buttons = $this->get_naver_openmain_button($option->post_align);
			$buttons = $buttons . $this->get_share_buttons($option->post_align);
			
			if($option->post_display == 'top'){
				$content = $buttons . $content;
			}
			else{
				$content = $content . $buttons;
			}
		}
		else if($option->page_display && is_page()){
			$buttons = $this->get_naver_openmain_button($option->page_align);
			$buttons = $buttons . $this->get_share_buttons($option->page_align);
			
			if($option->page_display == 'top'){
				$content = $buttons . $content;
			}
			else{
				$content = $content . $buttons;
			}
		}
		else if($option->product_display && is_singular(array('product'))){
			$buttons = $this->get_naver_openmain_button($option->product_align);
			$buttons = $buttons . $this->get_share_buttons($option->product_align);
			
			if($option->product_display == 'top'){
				$content = $buttons . $content;
			}
			else{
				$content = $content . $buttons;
			}
		}
		
		return $content;
	}
	
	public function excerpt_add_share_buttons($content){
		$option = $this->option;
		
		if($option->excerpt_display){
			$buttons = $this->get_share_buttons($option->excerpt_align);
			
			if($option->excerpt_display == 'top'){
				$content = $buttons . $content;
			}
			else{
				$content = $content . $buttons;
			}
		}
		
		return $content;
	}
	
	public function kboard_add_share_buttons($content, $content_uid){
		$option = $this->option;
		
		$this->kboard_content_uid = intval($content_uid);
		
		if($option->kboard_display){
			$buttons = $this->get_naver_openmain_button($option->kboard_align);
			$buttons = $buttons . $this->get_share_buttons($option->kboard_align);
			
			if($option->kboard_display == 'top'){
				$content = $buttons . $content;
			}
			else{
				$content = $content . $buttons;
			}
		}
		
		$this->kboard_content_uid = 0;
		
		return $content;
	}
	
	public function get_share_buttons($align='left', $url='', $title=''){
		$option = $this->option;
		
		if($this->option->active){
			if(!$url){
				$url = $this->get_share_url();
			}
			if(!$title){
				$title = $this->get_share_title();
			}
			
			$skin_path = COSMOSFARM_SHARE_BUTTONS_URL . '/layout/default';
			
			ob_start();
			include COSMOSFARM_SHARE_BUTTONS_DIR_PATH . '/layout/default/layout.php';
			return ob_get_clean();
		}
		return '';
	}
	
	public function get_naver_openmain_button($align='left'){
		$option = $this->option;
		
		if($this->option->naver_openmain_active && $this->option->naver_openmain_name && $this->option->naver_openmain_url){
			wp_enqueue_script('naver-openmain', 'https://openmain.pstatic.net/js/openmain.js', array(), COSMOSFARM_SHARE_BUTTONS_VERSION, true);
			
			$button = sprintf('<div class="nv-openmain" data-title="%s" data-url="%s" data-type="%s"></div>', esc_attr($this->option->naver_openmain_name), esc_attr($this->option->naver_openmain_url), esc_attr($this->option->naver_openmain_type));
			$button = sprintf('<div class="cosmosfarm-share-naver-openmain" style="text-align:%s;margin:20px 0;overflow:hidden;">%s</div>', esc_attr($align), $button);
			return $button;
		}
		return '';
	}
	
	public function get_share_url(){
		global $post;
		
		if($this->kboard_content_uid){
			$url = new KBUrl();
			$share_url = $url->getDocumentRedirect($this->kboard_content_uid);
		}
		else{
			if($this->option->url_type == 'shortlink'){
				$share_url = wp_get_shortlink($post->ID);
			}
			else{
				$share_url = get_permalink($post->ID);
			}
		}
		
		return esc_url_raw($share_url);
	}
	
	public function get_share_title(){
		global $post;
		
		if($this->kboard_content_uid){
			$content = new KBContent();
			$content->initWithUID($this->kboard_content_uid);
			$share_title = $content->title;
		}
		else{
			$share_title = $post->post_title;
		}
		
		$share_title = wp_strip_all_tags($share_title);
		return htmlspecialchars($share_title);
	}
}