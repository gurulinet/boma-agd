<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package boma_agd
 */
global $post;


$categoryName = get_the_category();

if ($categoryName[0]->name == 'gazetki') {
	//return;
}
?>

<?php if ($categoryName[0]->name == 'wpisyBlogowe') : ?>
    <section id="main-cont post-<?php the_ID(); ?>" style="margin-top: 88px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="more1">
                        <div class="hidden"></div>
						<?php
						if (is_singular()) :
							the_title('<h1 class="entry-title boma-title">', '</h1>');
						else :
							the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
						endif;
						
						
						if ('post' === get_post_type()) : ?>
							
							<?php if (has_post_thumbnail($post->ID)): ?>
								<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                                <div id="custom-bg">
                                    <img width="" height="" src="<?php echo esc_url($image[0]); ?>">
                                </div>
							<?php endif; ?>
                            <div class="entry-meta">
								<?php //boma_agd_posted_on(); ?>
                            </div><!-- .entry-meta -->
							<?php
						endif; ?>
                        <div id="primary" class="content-area" style="margin-top: 14px; text-align: justify;">
                            <main id="main" class="site-main">
								
								<?php
								the_content(sprintf(
									wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
										__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'boma_agd'),
										array(
											'span' => array(
												'class' => array(),
											),
										)
									),
									get_the_title()
								));
								
								wp_link_pages(array(
									'before' => '<div class="page-links">' . esc_html__('Pages:', 'boma_agd'),
									'after' => '</div>',
								));
								
								?>

                            </main><!-- #main -->
                        </div><!-- #primary -->
                        <div class="product-like">
                            <div id="fb-root"></div>
                            <script>(function (d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10&appId=1555284184687438";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>

                            <div class="fb-like"
                                 data-href="http://boma-agd.pl/<?php echo esc_attr($post->post_name) ?>"
                                 data-layout="button_count" data-action="like" data-size="small"
                                 data-show-faces="true" data-share="true"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-4">
                    <div class="">

                    </div>

                </div>
            </div>
    </section>
	<?php get_template_part('template-parts/content', 'promo'); ?>
<?php else : ?>
    <!--GAZETKI / PRODUKTY ----------------------------------------------------------------------------->
    <section id="main-cont post-<?php the_ID(); ?>" style="margin-top: 88px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="more1">
                        <div class="more1-img-cont">
                            <div class="hidden"></div>
							<?php
							if (is_singular()) :
								the_title('<h1 class="entry-title boma-title">', '</h1>');
							else :
								the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
							endif;
							
							
							if ('post' === get_post_type()) : ?>
								
								<?php if (has_post_thumbnail($post->ID)): ?>
									<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                                    <div id="custom-bg">
                                        <img width="" height="" src="<?php echo esc_url($image[0]); ?>">
                                    </div>
								<?php endif; ?>
                                <div class="entry-meta">
									<?php //boma_agd_posted_on(); ?>
                                </div><!-- .entry-meta -->
								<?php
							endif; ?>
                            <div id="primary" class="content-area" style="margin-top: 14px; text-align: justify;">
                                <main id="main" class="site-main">
									
									<?php
									the_content(sprintf(
										wp_kses(
										/* translators: %s: Name of current post. Only visible to screen readers */
											__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'boma_agd'),
											array(
												'span' => array(
													'class' => array(),
												),
											)
										),
										get_the_title()
									));
									
									wp_link_pages(array(
										'before' => '<div class="page-links">' . esc_html__('Pages:', 'boma_agd'),
										'after' => '</div>',
									));
									
									?>

                                </main><!-- #main -->
                            </div><!-- #primary -->

                            <div class="product-like">
                                <div id="fb-root"></div>
                                <script>(function (d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10&appId=1555284184687438";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>

                                <div class="fb-like"
                                     data-href="http://boma-agd.pl/<?php echo esc_attr($post->post_title) ?>"
                                     data-layout="button_count" data-action="like" data-size="small"
                                     data-show-faces="true" data-share="true"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xs-6 col-md-4">
                    <div class="">

                    </div>

                </div>
            </div>
    </section>
	<?php get_template_part('template-parts/content', 'promo'); ?>
<?php endif; ?>
