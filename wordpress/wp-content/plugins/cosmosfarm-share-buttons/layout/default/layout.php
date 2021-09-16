<?php if(!defined('ABSPATH')) exit;?>
<div class="cosmosfarm-share-buttons cosmosfarm-share-buttons-default cosmosfarm-align-<?php echo $align?>">
	<span class="cosmosfarm-share-button-title">
		<picture>
			<source media="(min-width: 600px)" srcset="<?php echo $skin_path?>/images/icon-share-32.png">
			<img src="<?php echo $skin_path?>/images/icon-share.png" alt="<?php echo __('Share', 'cosmosfarm-share-buttons')?>" title="<?php echo __('Share', 'cosmosfarm-share-buttons')?>">
		</picture>
	</span>
	<?php foreach($option->active as $key=>$value):?>
	<button class="cosmosfarm-share-button cosmosfarm-<?php echo esc_attr($value)?>" onclick="return cosmosfarm_share('<?php echo $value?>', '<?php echo addslashes($url)?>', '<?php echo addslashes($title)?>');">
		<picture>
			<source media="(min-width: 600px)" srcset="<?php echo $skin_path?>/images/icon-<?php echo esc_attr($value)?>-32.png">
			<img src="<?php echo $skin_path?>/images/icon-<?php echo esc_attr($value)?>.png" alt="<?php echo esc_attr($option->sns[$value])?>" title="<?php echo esc_attr($option->sns[$value])?>">
		</picture>
	</button>
	<?php endforeach?>
</div>