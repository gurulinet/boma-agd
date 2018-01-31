<?php
$katedra = katedraOptions();
$allowedHtml = allowedHtmlForMaps();

$kses = ksesShopAddresses();
?>
<div class="row">
	<div class="col">
		<div class="product-title">
			<h4 class="shop-content-title">
				<?php echo esc_attr($katedra['katedra']['title']) ?><br/>
				<span><small><?php echo esc_attr($katedra['katedra']['address']) ?></small></span>
			</h4>
		</div>
		<div class="col-sm-6 image-shop">
			<p>
				<?php
				if (!empty($katedra['katedra']['description'])):
					echo wp_kses($katedra['katedra']['description'], $kses);
				endif;
				?>
			</p>
			<div class="col-sm-6 image-shop">
				<img src="<?php echo esc_url($katedra['katedra']['images']['left']); ?>"/>
			</div>
			<div class="col-sm-6 image-shop">
				<img src="<?php echo esc_url($katedra['katedra']['images']['right']); ?>"/>
			</div>
		</div>
		<div class="col-sm-6 map-shop">
			<div class="google-map">
				<?php echo wp_kses($katedra['katedra']['maps'], $allowedHtml) ?>
			</div>
		</div>
	</div>
</div>