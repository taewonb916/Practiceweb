<?php
/**
 * 코스모스팜 소셜댓글 위젯
 * @link http://www.cosmosfarm.com/
 * @copyright Copyright 2016 Cosmosfarm. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl.html
 */
final class Cosmosfarm_Comments_Widget extends WP_Widget {
	
	public function __construct(){
		parent::__construct('Cosmosfarm_Comments_Widget', '코스모스팜 소셜댓글', array('description' => '코스모스팜 소셜댓글의 최신 댓글'));
	}
	
	public function form($instance){
		$title = !empty($instance['title'])?$instance['title']:'코스모스팜 소셜댓글';
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title')?>"><?php _e('Title:'); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' )?>" name="<?php echo $this->get_field_name('title')?>" type="text" value="<?php echo esc_attr($title)?>">
		</p>
		<?php
	}
	
	public function update($new_instance, $old_instance){
		$instance['title'] = (!empty($new_instance['title']))?strip_tags($new_instance['title']):'';
		return $instance;
	}
	
	public function widget($args, $instance){
		echo $args['before_widget'];
		if(!empty( $instance['title'])){
			echo $args['before_title'] . apply_filters('widget_title', $instance['title']). $args['after_title'];
		}
		echo '<ul id="cosmosfarm-latest-comments"></ul>';
		echo $args['after_widget'];
	}
}
?>