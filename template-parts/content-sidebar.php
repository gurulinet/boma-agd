<?php
$wSaleOptions = wSaleOptions();

$pageOptions = array(
	'boma_shops' => get_field('boma_shops'),
);

$kses = ksesShopAddresses();
?>
<div class="col-xs-6 col-md-4">
    <div class="shop-front">
        <h3 class="<?php echo !is_front_page() ? __('b-title') : __('our-stores') ?>"><?php echo esc_attr($pageOptions['boma_shops']); ?></h3>
        <ul class="shop-small-cont">
            <li>
                   <span>
                       <strong><?php echo esc_attr($wSaleOptions['hurtowniaShop']['title']); ?></strong>
                        <br/><?php echo wp_kses($wSaleOptions['hurtowniaShop']['address'], $kses); ?>
                       <br/><?php echo wp_kses($wSaleOptions['hurtowniaShop']['opening'], $kses); ?>
                       <br/><?php echo esc_attr($wSaleOptions['hurtowniaShop']['phone']); ?>
                    </span>

            </li>
            <li>
                   <span>
                        <strong><?php echo esc_attr($wSaleOptions['lazniShop']['title']); ?></strong>
                        <br/><?php echo esc_attr($wSaleOptions['lazniShop']['address']); ?>
                       <br/><?php echo wp_kses($wSaleOptions['lazniShop']['opening'], $kses); ?>
                       <br/><?php echo esc_attr($wSaleOptions['lazniShop']['phone']); ?>
                    </span>

            </li>
            <li>
                   <span>
                        <strong><?php echo esc_attr($wSaleOptions['katShop']['title']); ?></strong>
                        <br/><?php echo esc_attr($wSaleOptions['katShop']['address']); ?>
                       <br/><?php echo wp_kses($wSaleOptions['katShop']['opening'], $kses); ?>
                       <br/><?php echo esc_attr($wSaleOptions['katShop']['phone']); ?>
                    </span>

            </li>
            <li>
                   <span>
                        <strong><?php echo esc_attr($wSaleOptions['bulkaShop']['title']); ?></strong>
                        <br/><?php echo esc_attr($wSaleOptions['bulkaShop']['address']); ?>
                       <br/><?php echo wp_kses($wSaleOptions['bulkaShop']['opening'], $kses); ?>
                       <br/><?php echo esc_attr($wSaleOptions['bulkaShop']['phone']); ?>
                    </span>
                
            </li>
            <li>
                    <span>
                        <strong><?php echo esc_attr($wSaleOptions['pewexShop']['title']); ?></strong>
                        <br/><?php echo esc_attr($wSaleOptions['pewexShop']['address']); ?>
                        <br/><?php echo wp_kses($wSaleOptions['pewexShop']['opening'], $kses); ?>
                        <br/><?php echo esc_attr($wSaleOptions['pewexShop']['phone']); ?>
                    </span>

            </li>
        </ul>
    </div>
</div>