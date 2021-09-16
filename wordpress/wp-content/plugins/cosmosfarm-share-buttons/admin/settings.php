<?php if(!defined('ABSPATH')) exit;?>
<div class="wrap">
	<div style="float:left;margin:7px 8px 0 0;width:36px;height:34px;background:url(<?php echo COSMOSFARM_SHARE_BUTTONS_URL . '/images/icon-big.png'?>) left top no-repeat;"></div>
	<h1>
		소셜 공유 버튼 By 코스모스팜
		<a href="https://www.cosmosfarm.com/" class="page-title-action" onclick="window.open(this.href);return false;">홈페이지</a>
		<a href="https://www.cosmosfarm.com/threads" class="page-title-action" onclick="window.open(this.href);return false;">커뮤니티</a>
		<a href="https://www.cosmosfarm.com/support" class="page-title-action" onclick="window.open(this.href);return false;">고객지원</a>
		<a href="https://blog.cosmosfarm.com/" class="page-title-action" onclick="window.open(this.href);return false;">블로그</a>
	</h1>
	<p>소셜 공유 버튼 By 코스모스팜은 국내외 SNS 공유하기 버튼을 제공합니다.</p>
	
	<hr>
	
	<form method="post" action="">
		<?php wp_nonce_field('cosmosfarm-share-buttons-save', 'cosmosfarm-share-buttons-save-nonce')?>
		<input type="hidden" name="action" value="cosmosfarm_share_buttons_save">
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row"><label for="cosmosfarm_share_post_display">포스트에 표시</label></th>
					<td>
						<select id="cosmosfarm_share_post_display" name="cosmosfarm_share_post_display">
							<option value="">비활성화</option>
							<option value="top"<?php if($option->post_display=='top'):?> selected<?php endif?>>상단 활성화</option>
							<option value="bottom"<?php if($option->post_display=='bottom'):?> selected<?php endif?>>하단 활성화</option>
						</select>
						<select name="cosmosfarm_share_post_align">
							<option value="left"<?php if($option->post_align=='left'):?> selected<?php endif?>>왼쪽 정렬</option>
							<option value="center"<?php if($option->post_align=='center'):?> selected<?php endif?>>중앙 정렬</option>
							<option value="right"<?php if($option->post_align=='right'):?> selected<?php endif?>>오른쪽 정렬</option>
						</select>
						<p class="description">포스트에 SNS 공유하기 버튼을 표시합니다.</p>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="cosmosfarm_share_page_display">페이지에 표시</label></th>
					<td>
						<select id="cosmosfarm_share_page_display" name="cosmosfarm_share_page_display">
							<option value="">비활성화</option>
							<option value="top"<?php if($option->page_display=='top'):?> selected<?php endif?>>상단 활성화</option>
							<option value="bottom"<?php if($option->page_display=='bottom'):?> selected<?php endif?>>하단 활성화</option>
						</select>
						<select name="cosmosfarm_share_page_align">
							<option value="left"<?php if($option->page_align=='left'):?> selected<?php endif?>>왼쪽 정렬</option>
							<option value="center"<?php if($option->page_align=='center'):?> selected<?php endif?>>중앙 정렬</option>
							<option value="right"<?php if($option->page_align=='right'):?> selected<?php endif?>>오른쪽 정렬</option>
						</select>
						<p class="description">페이지에 SNS 공유하기 버튼을 표시합니다.</p>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="cosmosfarm_share_excerpt_display">요약글에 표시</label></th>
					<td>
						<select id="cosmosfarm_share_excerpt_display" name="cosmosfarm_share_excerpt_display">
							<option value="">비활성화</option>
							<option value="top"<?php if($option->excerpt_display=='top'):?> selected<?php endif?>>상단 활성화</option>
							<option value="bottom"<?php if($option->excerpt_display=='bottom'):?> selected<?php endif?>>하단 활성화</option>
						</select>
						<select name="cosmosfarm_share_excerpt_align">
							<option value="left"<?php if($option->excerpt_align=='left'):?> selected<?php endif?>>왼쪽 정렬</option>
							<option value="center"<?php if($option->excerpt_align=='center'):?> selected<?php endif?>>중앙 정렬</option>
							<option value="right"<?php if($option->excerpt_align=='right'):?> selected<?php endif?>>오른쪽 정렬</option>
						</select>
						<p class="description">요약글에 SNS 공유하기 버튼을 표시합니다.</p>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="cosmosfarm_share_kboard_display">KBoard에 표시</label></th>
					<td>
						<select id="cosmosfarm_share_kboard_display" name="cosmosfarm_share_kboard_display">
							<option value="">비활성화</option>
							<option value="top"<?php if($option->kboard_display=='top'):?> selected<?php endif?>>상단 활성화</option>
							<option value="bottom"<?php if($option->kboard_display=='bottom'):?> selected<?php endif?>>하단 활성화</option>
						</select>
						<select name="cosmosfarm_share_kboard_align">
							<option value="left"<?php if($option->kboard_align=='left'):?> selected<?php endif?>>왼쪽 정렬</option>
							<option value="center"<?php if($option->kboard_align=='center'):?> selected<?php endif?>>중앙 정렬</option>
							<option value="right"<?php if($option->kboard_align=='right'):?> selected<?php endif?>>오른쪽 정렬</option>
						</select>
						<p class="description">KBoard 게시글에 SNS 공유하기 버튼을 표시합니다.</p>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="cosmosfarm_share_product_display">상품 상세페이지에 표시</label></th>
					<td>
						<select id="cosmosfarm_share_product_display" name="cosmosfarm_share_product_display">
							<option value="">비활성화</option>
							<option value="top"<?php if($option->product_display=='top'):?> selected<?php endif?>>상단 활성화</option>
							<option value="bottom"<?php if($option->product_display=='bottom'):?> selected<?php endif?>>하단 활성화</option>
						</select>
						<select name="cosmosfarm_share_product_align">
							<option value="left"<?php if($option->product_align=='left'):?> selected<?php endif?>>왼쪽 정렬</option>
							<option value="center"<?php if($option->product_align=='center'):?> selected<?php endif?>>중앙 정렬</option>
							<option value="right"<?php if($option->product_align=='right'):?> selected<?php endif?>>오른쪽 정렬</option>
						</select>
						<p class="description">우커머스 상품 상세페이지에 SNS 공유하기 버튼을 표시합니다.</p>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"></th>
					<td>
						<ul>
							<?php
							foreach($news_list as $news_item):?>
							<li>
								<a href="<?php echo esc_url($news_item->url)?>" target="<?php echo esc_attr($news_item->target)?>" style="text-decoration:none"><?php echo esc_html($news_item->title)?></a>
							</li>
							<?php endforeach?>
						</ul>
					</td>
				</tr>
			</tbody>
		</table>
		
		<p class="submit">
			<input type="submit" name="submit" id="submit" class="button-primary" value="변경 사항 저장">
		</p>
		
		<hr>
		
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row"><label for="cosmosfarm-share-sortable">표시할 버튼과 순서</label></th>
					<td>
						<div style="overflow:hidden">
							<ul id="cosmosfarm-share-sortable" style="float:left;margin:0">
								
								<?php foreach($option->active as $key=>$value):?>
								<li class="ui-state-default"><label><input type="checkbox" name="cosmosfarm_share_active[]" value="<?php echo $value?>" checked><?php echo $option->sns[$value]?></label></li>
								<?php endforeach?>
								
								<?php foreach($option->sns as $key=>$value): if(!in_array($key, $option->active)):?>
								<li class="ui-state-default"><label><input type="checkbox" name="cosmosfarm_share_active[]" value="<?php echo $key?>"><?php echo $option->sns[$key]?></label></li>
								<?php endif; endforeach?>
								
							</ul>
						</div>
						<p class="description">표시할 버튼을 체크하고 순서를 마우스로 드래그 하세요.</p>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="cosmosfarm_share_kakao_sdk_key">카카오 JavaScript 키</label></th>
					<td>
						<input type="text" id="cosmosfarm_share_kakao_sdk_key" name="cosmosfarm_share_kakao_sdk_key" value="<?php echo $option->kakao_sdk_key?>" class="regular-text">
						<a href="https://developers.kakao.com/console/app" onclick="window.open(this.href);return false;">카카오 앱 생성</a>
						<p class="description">카카오스토리, 카카오톡 버튼을 사용하기 위해서는 반드시 카카오 JavaScript 키가 필요합니다.<br>카카오 JavaScript 키가 없을 경우 오류가 발생될 수 있습니다.</p>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="cosmosfarm_share_default_img_src">공유하기 기본 이미지</label></th>
					<td>
						<input type="text" id="cosmosfarm_share_default_img_src" name="cosmosfarm_share_default_img_src" value="<?php echo $option->default_img_src?>" class="regular-text">
						<button type="button" class="button" id="cosmosfarm-share-default-img-button">이미지 선택</button> 
						<p class="description">카카오톡 공유하기에서 사용할 기본 이미지를 설정해주세요.</p>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="cosmosfarm_share_url_type">공유 주소 타입</label></th>
					<td> 
						<select id="cosmosfarm_share_url_type" name="cosmosfarm_share_url_type">
							<option value="">기본 주소</option>
							<option value="shortlink"<?php if($option->url_type == 'shortlink'):?> selected<?php endif?>>잛은 주소</option>
						</select>
						<p class="description">고유주소 설정에 따른 기본 주소 혹은 <code><?php echo site_url('/?p=123')?></code>와 같은 짧은 주소 중 선택해주세요.</p>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="cosmosfarm_share_kakao_sdk_key">숏코드 예제</label></th>
					<td>
						<code>[cosmosfarm_share_buttons url="<?php echo home_url()?>" title="<?php echo bloginfo('name')?>" align="left|center|right"]</code>
						<p class="description">숏코드의 <strong>url</strong>값과 <strong>title</strong>값을 변경해서 페이지 또는 포스트에 붙혀넣기 하세요.<br><strong>align</strong>값은 left, center, right 중 하나를 입력하거나 제거해주세요.</p>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"></th>
					<td>
						<ul>
							<?php
							foreach($news_list as $news_item):?>
							<li>
								<a href="<?php echo esc_url($news_item->url)?>" target="<?php echo esc_attr($news_item->target)?>" style="text-decoration:none"><?php echo esc_html($news_item->title)?></a>
							</li>
							<?php endforeach?>
						</ul>
					</td>
				</tr>
			</tbody>
		</table>
		
		<p class="submit">
			<input type="submit" name="submit" id="submit" class="button-primary" value="변경 사항 저장">
		</p>
		
		<hr>
		
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row"><label for="cosmosfarm_share_naver_openmain_active">네이버 오픈메인 버튼 출력</label></th>
					<td>
						<select id="cosmosfarm_share_naver_openmain_active" name="cosmosfarm_share_naver_openmain_active">
							<option value="">비활성화</option>
							<option value="1"<?php if($option->naver_openmain_active):?> selected<?php endif?>>활성화</option>
						</select>
						<a href="https://developers.naver.com/products/openmain/" onclick="window.open(this.href);return false;">네이버 오픈메인 설명</a> 
						<p class="description">오픈메인은 사용자의 웹페이지를 네이버 메인에 추가해 보는 기능입니다.</p>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="cosmosfarm_share_naver_openmain_name">네이버 오픈메인 버튼 이름</label></th>
					<td>
						<input type="text" id="cosmosfarm_share_naver_openmain_name" name="cosmosfarm_share_naver_openmain_name" value="<?php echo $option->naver_openmain_name?>" class="regular-text">
						<p class="description">버튼 이름은 최대 6자이내로 입력할 수 있습니다.</p>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="cosmosfarm_share_naver_openmain_url">네이버 오픈메인 주소</label></th>
					<td>
						<input type="text" id="cosmosfarm_share_naver_openmain_url" name="cosmosfarm_share_naver_openmain_url" value="<?php echo $option->naver_openmain_url?$option->naver_openmain_url:home_url()?>" class="regular-text"> 
						<p class="description">네이버 메인에서 보여질 홈페이지 주소를 입력해주세요.</p>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="cosmosfarm_share_naver_openmain_type">네이버 오픈메인 버튼 디자인</label></th>
					<td>
						<select id="cosmosfarm_share_naver_openmain_type" name="cosmosfarm_share_naver_openmain_type">
							<option value="W2"<?php if(!$option->naver_openmain_type || $option->naver_openmain_type == 'W2'):?> selected<?php endif?>>기본 버튼</option>
							<option value="W1"<?php if($option->naver_openmain_type == 'W1'):?> selected<?php endif?>>작은 버튼</option>
							<option value="T1"<?php if($option->naver_openmain_type == 'T1'):?> selected<?php endif?>>작은 버튼 (어두운 배경일 경우)</option>
						</select>
						<a href="https://developers.naver.com/docs/openmain/#2-2-3-%EB%B2%84%ED%8A%BC-%EB%94%94%EC%9E%90%EC%9D%B8-datatype" onclick="window.open(this.href);return false;">버튼 디자인 자세히 보기</a> 
						<p class="description">버튼 디자인을 지정하면 원하는 버튼을 웹사이트에 적용할 수 있습니다.</p>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"></th>
					<td>
						<ul>
							<?php
							foreach($news_list as $news_item):?>
							<li>
								<a href="<?php echo esc_url($news_item->url)?>" target="<?php echo esc_attr($news_item->target)?>" style="text-decoration:none"><?php echo esc_html($news_item->title)?></a>
							</li>
							<?php endforeach?>
						</ul>
					</td>
				</tr>
			</tbody>
		</table>
		
		<p class="submit">
			<input type="submit" name="submit" id="submit" class="button-primary" value="변경 사항 저장">
		</p>
	</form>
</div>
<div class="clear"></div>

<script>
jQuery(function(){
	jQuery("#cosmosfarm-share-sortable").sortable();
	jQuery("#cosmosfarm-share-sortable").disableSelection();
});
jQuery(document).ready(function(){
    var frame;
    jQuery('#cosmosfarm-share-default-img-button').click(function(e){
        e.preventDefault();
        
        if(frame){
        	frame.open();
            return false;
        }
        
        frame = wp.media({
            library: {type: 'image'}
        });
        
        frame.on('select', function(){
            var attachment = frame.state().get('selection').first().toJSON();
            jQuery('#cosmosfarm_share_default_img_src').val(attachment.url);
        });
        
        frame.open();
    });
});
</script>