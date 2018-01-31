<?php
/**
 * Template Name: Contact
 * @package boma_agd
 */
?>
<?php get_header(); ?>
<?php
$contact = array(
	'title' => get_field('contact_title'),
	'hurtownia' => get_field('hurtownia'),
	'address' => get_field('address'),
	'phone' => get_field('contact_phone'),
	'email' => get_field('contact_email'),
	'regonNip' => get_field('contact_regon_nip_krs'),
);
$allowedHtml = array(
	'br' => array(),
);

$images = array(
	'second' => get_field('small_contact_image'),
	'third' => get_field('small_second_image'),
);

$opis = get_field('krotki_opis');

$maps = get_field('maps_contact');

$kses = allowedHtmlForMaps();
$ksesShoAddress = ksesShopAddresses();
?>
<section id="main-cont">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <div class="row-content boma-agd-contact">
                    <div class="container-pla">
                        <h1 class="content-title contact-title"><?php print empty($contact['title']) ? esc_html_e('Kontakt') : esc_attr($contact['title']); ?></h1>

                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="col-sm-6 image-shop">
                                <h4><?php print empty($contact['hurtownia']) ? esc_html_e('Hurtownia') : esc_attr($contact['hurtownia']); ?></h4>
                                <br/>
                                <p><?php print wp_kses($contact['address'], $allowedHtml); ?></p>
                                <br/>
                                <p><?php print esc_Attr($contact['phone']); ?></p>
                                <p><?php print esc_attr($contact['email']); ?></p>
                                <p class="regon"><?php print wp_kses($contact['regonNip'], $ksesShoAddress); ?></p>
                            </div>
                            <div class="col-sm-6 image-shop contact-image" style="">
                                <div class="main-image" style="">
									<?php echo wp_kses($maps, $kses); ?>
                                </div>
                            </div>
                            <div class="contact-small-image-cont">
                                <div class="no-padding">
                                    <div class="contact-small-image" style="">
                                        <img class="small-image margin-right" src="<?php echo $images['second'] ?>"/>
                                    </div>
                                </div>
                                <div class="no-padding">
                                    <div class="contact-small-image" style="">
                                        <img class="small-image margin-left" src="<?php echo $images['third'] ?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <h1 class="footer-title"
                        style="margin-left: -52px; margin-top:50px;font-size:17px; color:#ce0a64;"><?php echo $opis; ?></h1>

                </div>
            </div>
			<?php get_template_part('template-parts/content', 'sidebar'); ?>
        </div>

    </div>
    </div>
</section>
<?php get_template_part('template-parts/content', 'promo'); ?>


<?php get_footer(); ?>
