<?php
/**
 * 코스모스팜 공유하기 버튼 컨트롤러
 * @link https://www.cosmosfarm.com/
 * @copyright Copyright 2020 Cosmosfarm. All rights reserved.
 */
final class Cosmosfarm_Share_Buttons_Controller {
	
	public function __construct(){
		$action = isset($_POST['action'])?$_POST['action']:'';
		if($action == 'cosmosfarm_share_buttons_save'){
			$this->save();
		}
	}
	
	private function save(){
		if(isset($_POST['cosmosfarm-share-buttons-save-nonce']) && wp_verify_nonce($_POST['cosmosfarm-share-buttons-save-nonce'], 'cosmosfarm-share-buttons-save')){
			$option = new Cosmosfarm_Share_Buttons_Option();
			$option->save();
		}
	}
}