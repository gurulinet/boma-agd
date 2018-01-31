<?php
$bulki = bulkiOptions();
$allowedHtml = allowedHtmlForMaps();
$kses = ksesShopAddresses();
?>
<div class="row">
	<div class="col">
		<div class="product-title">
			<h4 class="shop-content-title">
				<?php echo esc_attr($bulki['bulki']['title']) ?><br/>
				<span><small><?php echo esc_attr($bulki['bulki']['address']) ?></small></span>
			</h4>
		</div>
		<div class="col-sm-6 image-shop">
			<p>
				<?php
				if (!empty($bulki['bulki']['description'])):
					echo wp_kses($bulki['bulki']['description'], $kses);
				endif;
				?>
			</p>
			<div class="col-sm-6 image-shop">
				<img src="<?php echo esc_url($bulki['bulki']['images']['left']); ?>"/>
			</div>
			<div class="col-sm-6 image-shop">
				<img src="<?php echo esc_url($bulki['bulki']['images']['right']); ?>"/>
			</div>
		</div>
		<div class="col-sm-6 map-shop">
			<div class="google-map">
				<?php echo wp_kses($bulki['bulki']['maps'], $allowedHtml) ?>
			</div>
		</div>
	</div>
</div>