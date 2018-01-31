<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package boma_agd
 */

?>

<?php wp_footer(); ?>
<?php

$social = array(
	'fb' => array(
		'title' => get_field('fb_title'),
		'description' => get_field('fb_description'),
	),
	'instagram' => array(
		'title' => get_field('inst_title'),
		'description' => get_field('inst_description'),
	)
);

$contact = array(
	'title' => get_field('footer_contact_title'),
	'tel_1' => get_field('tel_1'),
	'tel_2' => get_field('tel_2'),
	'tel_3' => get_field('tel_3'),
	'footerEmail' => get_field('footer_email'),
	'footerAddress' => get_field('footer_address'),
	'footerCity' => get_field('footer_city'),
	'postalCode' => get_field('postal_code'),
);

$phone2 = array(
	'phone1' => get_option('bomaFooterPhone_1'),
	'phone2' => get_option('bomaFooterPhone_2')
)
?>
<footer class="footer-main">
    <section class="container">
        <div class="container footer-inside">
            <div class="row widgets">
                <div class="col-lg-3">
                    <h4 class="footer-title"><?php print empty($social['fb']['title']) ? esc_html_e('Facebook', 'boma_agd') : $social['fb']['title'] ?></h4>
                    <p class="footer-text"><?php print(empty($social['fb']['description'])) ? esc_html_e('Polub nas na facebook\'u', 'boma_agd') : $social['fb']['description'] ?></p>
                    <div class="social">
                        <div class="facebook-not-toggle">
                            <a href="<?php echo esc_url('https://www.facebook.com/bomaagd') ?>"
                               class="facebook-like"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4 class="footer-title"><?php print empty($social['instagram']['title']) ? esc_html_e('Instagram', 'boma_agd') : $social['instagram']['title'] ?></h4>
                    <p class="footer-text instagram"
                       style="margin-bottom: 30px;"><?php print(empty($social['instagram']['description'])) ? esc_html_e('Obserwuj nas na instagram\'ie', 'boma_agd') : $social['instagram']['description'] ?></p>

                    <div class="social">
                        <div class="instagram-not-toggle">
                            <a href="<?php echo esc_url('https://www.instagram.com/boma_agd/') ?>"
                               class="instagram-obs"></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3">
                    <h4 class="footer-title"><?php print empty($contact['title']) ? esc_html_e('Kontakt', 'boma_agd') : $contact['title']; ?></h4>
                    <p class="footer-text">
						<?php print empty($contact['tel_1']) ? esc_html_e($phone2['phone1']) : $contact['tel_1']; ?><br/>
						<?php print empty($contact['tel_2']) ? $phone2['phone2'] : $contact['tel_2']; ?><br/>
						<?php print empty($contact['tel_3']) ? esc_html_e('') : $contact['tel_3']; ?><br/><br/>
                        <a class="contact" style="color:#908F8F"
                           href="mailto:boma@op.pl"><?php print empty ($contact['footerEmail']) ? esc_html_e('Email: boma@op.pl') : $contact['footerEmail']; ?></a>
                    </p>
                    <p class="footer-text">
						<?php print empty($contact['footerAddress']) ? esc_html_e('ul. 9 Maja 8') : $contact['footerAddress'] ?>
                        <br/> <?php print empty($contact['footerCity']) ? esc_html_e('Gorzów Wielkopolski ') : $contact['footerCity'] ?><?php print empty($contact['postalCode']) ? esc_html_e(' 66-400 ') : $contact['postalCode'] ?>
                    </p>
                </div>

            </div>
            <div class="toggle-footer">
                <div class="social">
                    <div class="li">
                        <div id="fb-root"></div>
                        <div id="fb-root"></div>
                        <script>(function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.10&appId=1555284184687438";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>
                        <div class="fb-like" data-href="https://www.facebook.com/bomaagd" data-layout="button"
                             data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>

                    </div>
                    <div class="li inst">
                        <div class="instagram">
                            <a href="<?php echo esc_url('https://www.instagram.com/boma_agd/') ?>">
                                <img src="<?php bloginfo('template_directory') ?>/assets/images/if_instagram_252092.png"/>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="clear-both"></div>
                <div class="col-lg-3">
                    <h4 class="footer-title"><?php print empty($contact['title']) ? esc_html_e('Kontakt', 'boma_agd') : $contact['title']; ?></h4>

                    <p class="footer-text">
						<?php print empty($contact['tel_1']) ? esc_html_e($phone2['phone1']) : $contact['tel_1']; ?><br/>
						<?php print empty($contact['tel_2']) ? $phone2['phone2'] : $contact['tel_2']; ?><br/>
						<?php print empty($contact['tel_3']) ? esc_html_e('') : $contact['tel_3']; ?><br/><br/>
                        <a class="contact" style="color:#908F8F"
                           href="mailto:boma@op.pl"><?php print empty ($contact['footerEmail']) ? esc_html_e('Email: boma@op.pl') : $contact['footerEmail']; ?></a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="fa-copyright"><p
                class="copyright"><?php esc_html_e('© ' . date('Y') . ' Wszelkie prawa zastrzeżone.', 'boma_agd') ?></section>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/assets/js/bagdjquery3.2.1.js"></script>
<script src="<?php bloginfo('template_directory') ?>/assets/js/boma.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<!-- WhatsHelp.io widget -->
    <script src="<?php bloginfo('template_directory') ?>/assets/js/messanger.js"></script>
<!-- /WhatsHelp.io widget -->
</body>
</html>