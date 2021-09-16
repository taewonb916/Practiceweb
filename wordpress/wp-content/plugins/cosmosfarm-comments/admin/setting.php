<?php if(!defined('ABSPATH')) exit;?>
<div class="wrap">
	<div style="float:left;margin:7px 8px 0 0;width:36px;height:34px;background:url(<?php echo plugins_url('cosmosfarm-comments/images/icon-big.png')?>) left top no-repeat;"></div>
	<h1>
		코스모스팜 소셜댓글
		<a href="http://www.cosmosfarm.com" class="add-new-h2" onclick="window.open(this.href);return false;">홈페이지</a>
		<a href="http://www.cosmosfarm.com/threads" class="add-new-h2" onclick="window.open(this.href);return false;">커뮤니티</a>
		<a href="http://www.cosmosfarm.com/support" class="add-new-h2" onclick="window.open(this.href);return false;">고객지원</a>
	</h1>
	<p>사용 할 수록 홈페이지가 자연적으로 홍보되는 차세대 소셜댓글 서비스 입니다.</p>
	
	<hr>
	
	<form method="post" action="">
		<?php wp_nonce_field('cosmosfarm-comments-save', 'cosmosfarm-comments-save-nonce')?>
		<input type="hidden" name="action" value="cosmosfarm_comments_save">
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row"></th>
					<td>
						먼저 <a href="http://www.cosmosfarm.com/plugin/comments" onclick="window.open(this.href);return false;">소셜댓글</a> 관리사이트에서 이 워드프레스 사이트를 <a href="http://www.cosmosfarm.com/plugin/comments/create" onclick="window.open(this.href);return false;">등록</a>해주세요.
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="cosmosfarm_comments_plugin_id">소셜댓글 ID</label></th>
					<td>
						<input type="text" name="cosmosfarm_comments_plugin_id" id="cosmosfarm_comments_plugin_id" value="<?php echo get_option('cosmosfarm_comments_plugin_id', '')?>">
						<p class="description"><a href="http://www.cosmosfarm.com/plugin/comments/sites" onclick="window.open(this.href);return false;">등록된 사이트</a> » 설치하기 페이지에 나와있는 ID값을 입력해주세요.</p>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="use_cosmosfarm_comments_plugin">소셜댓글 사용</label></th>
					<td>
						<select name="use_cosmosfarm_comments_plugin" id="use_cosmosfarm_comments_plugin">
							<option value="">비활성화</option>
							<option value="1"<?php if(get_option('use_cosmosfarm_comments_plugin')):?> selected<?php endif?>>활성화</option>
						</select>
						<p class="description">워드프레스 댓글을 비활성화 하고 소셜댓글을 사용합니다.</p>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="cosmosfarm_comments_plugin_row">댓글 표시</label></th>
					<td>
						<select name="cosmosfarm_comments_plugin_row" id="cosmosfarm_comments_plugin_row" class="">
							<option value="10">10개</option>
							<option value="20"<?php if(get_option('cosmosfarm_comments_plugin_row')=='20'):?> selected<?php endif?>>20개</option>
							<option value="30"<?php if(get_option('cosmosfarm_comments_plugin_row')=='30'):?> selected<?php endif?>>30개</option>
							<option value="50"<?php if(get_option('cosmosfarm_comments_plugin_row')=='50'):?> selected<?php endif?>>50개</option>
							<option value="100"<?php if(get_option('cosmosfarm_comments_plugin_row')=='100'):?> selected<?php endif?>>100개</option>
						</select>
						<p class="description">한 페이지에 보여지는 댓글 숫자를 정합니다.</p>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="cosmosfarm_comments_count_display">표시 문자</label></th>
					<td>
						<input type="text" name="cosmosfarm_comments_count_display" id="cosmosfarm_comments_count_display" value="<?php echo get_option('cosmosfarm_comments_count_display', ' 댓글')?>">
						<p class="description">워드프레스에서 달린 댓글수를 표시할 때 입력된 문자로 표시합니다.(예: 7 댓글)</p>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="use_cosmosfarm_comments_plugin_extern_api">회원 연동 API 사용</label></th>
					<td>
						<select name="use_cosmosfarm_comments_plugin_extern_api" id="use_cosmosfarm_comments_plugin_extern_api">
							<option value="" selected="">비활성화</option>
							<option value="1"<?php if(get_option('use_cosmosfarm_comments_plugin_extern_api')):?> selected<?php endif?>>활성화</option>
						</select>
						<p class="description">이 워드프레스 사이트 회원의 이름으로 댓글을 남길 수 있습니다. (프리미엄 서비스 가입이 필요합니다. <a href="http://www.cosmosfarm.com/plugin/comments" onclick="window.open(this.href);return false;">사이트로 이동</a>)</p>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label>숏코드</label></th>
					<td>
						<code>[cosmosfarm_comments href="<?php echo site_url()?>"]</code>
						<p class="description">이 숏코드를 사용하면 워드프레스 페이지 중간에 소셜댓글을 설치할 수 있습니다.</p>
						<p class="description">href 주소는 실제 소셜댓글이 표시되는 페이지 주소로 입력해주세요.</p>
					</td>
				</tr>
			</tbody>
		</table>
		
		<p class="submit">
			<input type="submit" name="submit" id="submit" class="button-primary" value="변경 사항 저장">
		</p>
	</form>
	
	<iframe src="//www.cosmosfarm.com/display/size/320_100" frameborder="0" scrolling="no" style="margin-top:20px;width:320px;height:100px;border:none;"></iframe>
	<hr>
	
	<h3>회원 연동 API 정보</h3>
	<form method="post" action="">
		<?php wp_nonce_field('cosmosfarm-comments-request-token-reset', 'cosmosfarm-comments-request-token-reset-nonce')?>
		<input type="hidden" name="action" value="cosmosfarm_comments_request_token_reset">
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row"></th>
					<td>
						프리미엄 서비스 가입 후 아래의 모든 정보를 코스모스팜 소셜댓글 설정에 입력해주세요. <a href="http://www.cosmosfarm.com/plugin/comments" onclick="window.open(this.href);return false;">사이트로 이동</a>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">회원정보 요청 주소</th>
					<td>
						<input type="text" class="regular-text" value="<?php echo home_url("?cosmosfarm_comments_request_token={$request_token}")?>" readonly>
						<input type="submit" class="button" value="요청 주소 재설정">
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">로그인 버튼 아이콘 이미지 주소</th>
					<td>
						<input type="text" class="regular-text" value="<?php echo COSMOSFARM_COMMENTS_URL . '/images/wordpress-logo.png'?>" readonly>
						<img src="<?php echo COSMOSFARM_COMMENTS_URL . '/images/wordpress-logo.png'?>" alt="" style="vertical-align: middle;">
						<p class="description">※ 26x26 픽셀의 이미지입니다.</p>
					</td>
				</tr>
				<?php if(defined('COSMOSFARM_MEMBERS_CERTIFIED_PHONE')):?>
				<tr valign="top">
					<th scope="row">로그인 페이지 주소</th>
					<td>
						<input type="text" class="regular-text" value="<?php
						$login_url = wp_login_url('cosmosfarm_comments_href');
						$option = get_cosmosfarm_members_option();
						if($option->login_page_id || $option->login_page_url){
							if($option->login_page_id){
								$login_url = add_query_arg(array('redirect_to'=>'cosmosfarm_comments_href'), get_permalink($option->login_page_id));
							}
							else if($option->login_page_url){
								$login_url = add_query_arg(array('redirect_to'=>'cosmosfarm_comments_href'), $option->login_page_url);
							}
						}
						else if(wpmem_login_url()){
							$login_url = wpmem_login_url('cosmosfarm_comments_href');
						}
						echo $login_url;
						?>" readonly>
						<p class="description">※ 로그인 페이지 주소에서 cosmosfarm_comments_href가 실제 페이지 주소로 자동 변환됩니다.</p>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">프로필 페이지 주소</th>
					<td>
						<input type="text" class="regular-text" value="<?php echo get_cosmosfarm_members_profile_url()?>" readonly>
					</td>
				</tr>
				<?php else:?>
				<tr valign="top">
					<th scope="row">로그인 페이지 주소</th>
					<td>
						<input type="text" class="regular-text" value="<?php echo wp_login_url('cosmosfarm_comments_href')?>" readonly>
						<p class="description">※ 로그인 페이지 주소에서 cosmosfarm_comments_href가 실제 페이지 주소로 자동 변환됩니다.</p>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">프로필 페이지 주소</th>
					<td>
						<input type="text" class="regular-text" value="<?php echo admin_url('profile.php')?>" readonly>
					</td>
				</tr>
				<?php endif?>
			</tbody>
		</table>
	</form>
	
	<iframe src="//www.cosmosfarm.com/display/size/300_250" frameborder="0" scrolling="no" style="margin-top:20px;width:300px;height:250px;border:none;"></iframe>
</div>
<div class="clear"></div>