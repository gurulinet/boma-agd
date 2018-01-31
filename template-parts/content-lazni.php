<?php
$lazni = lazniOptions();
$allowedHtml = allowedHtmlForMaps();

$kses = ksesShopAddresses();
?>
<div class="row">
	<div class="col">
		<div class="product-title">
			<h4 class="shop-content-title">
				<?php echo esc_attr($lazni['lazni']['title']); ?><br/>
				<span><small><?php echo esc_attr($lazni['lazni']['address']) ?></small></span>
			</h4>
		</div>
		<div class="col-sm-6 image-shop">
			<p>
				<?php
				if(!empty($lazni['lazni']['description'])):
					echo wp_kses($lazni['lazni']['description'], $kses);
				endif;
				?>
			</p>
			<div class="col-sm-6 image-shop">
				<img src="<?php echo esc_url($lazni['lazni']['images']['left']); ?>" />
			</div>
			<div class="col-sm-6 image-shop">
				<img src="<?php echo esc_url($lazni['lazni']['images']['right']); ?>" />
			</div>
		</div>
		<div class="col-sm-6 map-shop">
			<div class="google-map">
				<?php echo wp_kses($lazni['lazni']['maps'], $allowedHtml); ?>
			</div>
		</div>
	</div>
</div>