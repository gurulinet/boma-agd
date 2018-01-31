<?php
    $pewex = pewexOptions();
    $allowedHtml = allowedHtmlForMaps();
    
    $kses = ksesShopAddresses();
?>
<div class="row">
	<div class="col">
		<div class="product-title">
			<h4 class="shop-content-title">
                <?php echo esc_attr($pewex['pewex']['title']); ?><br/>
                <span><small><?php echo esc_attr($pewex['pewex']['address']) ?></small></span>
			</h4>
		</div>
		<div class="col-sm-6 image-shop">
			<p>
				<?php
				if(!empty($pewex['pewex']['description'])):
					echo wp_kses($pewex['pewex']['description'], $kses);
				endif;
				?>
			</p>
			<div class="col-sm-6 image-shop">
				<img src="<?php echo esc_url($pewex['pewex']['images']['left']); ?>" />
			</div>
			<div class="col-sm-6 image-shop">
                <img src="<?php echo esc_url($pewex['pewex']['images']['right']); ?>" />
			</div>
		</div>
		<div class="col-sm-6 map-shop">
			<div class="google-map">
				<?php echo wp_kses($pewex['pewex']['maps'], $allowedHtml); ?>
			</div>
		</div>
	</div>
</div>