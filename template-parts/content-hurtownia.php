<?php
    $hurtownia = hurtowniaOptions();
    $allowedHtml = allowedHtmlForMaps();
    
    $kses = ksesShopAddresses();
?>
<div class="row">
    <div class="col">
        <div class="product-title">
            <h4 class="shop-content-title">
				<?php echo esc_attr($hurtownia['hurtownia']['title']) ?><br/>
                <span><small><?php echo esc_attr($hurtownia['hurtownia']['address']) ?></small></span>
            </h4>
        </div>
        <div class="col-sm-6 image-shop">
            <p>
				<?php
				if (!empty($hurtownia['hurtownia']['description'])):
					echo wp_kses($hurtownia['hurtownia']['description'], $kses);
				endif;
				?>
            </p>
            <div class="col-sm-6 image-shop">
                <img src="<?php echo esc_url($hurtownia['hurtownia']['images']['left']); ?>"/>
            </div>
            <div class="col-sm-6 image-shop">
                <img src="<?php echo esc_url($hurtownia['hurtownia']['images']['right']); ?>"/>
            </div>
        </div>
        <div class="col-sm-6 map-shop">
            <div class="google-map">
				<?php echo wp_kses($hurtownia['hurtownia']['maps'], $allowedHtml) ?>
            </div>
        </div>
    </div>
</div>