<?php
/**
 * Template Name: Products
 * @package boma_agd
 */
?>
<?php
$productsTitle = get_field('marki');
?>
<?php get_header(); ?>
<?php
    queryPostsByProduct(
        'post',
        'produkty',
        'publish',
        '4',
        get_query_var('paged')
    );
?>
    <section id="main-cont">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <div class="row-content">
                        <div class="container-pla">
                            <h1 class="<?php echo !is_front_page() ? __('b-title') : __('shop-title r-title') ?>"><?php print empty($productsTitle) ? esc_html_e('Marki', 'boma_agd') : esc_attr($productsTitle); ?></h1>
                        </div>
						<?php if (have_posts()): ?>
							<?php while (have_posts()): the_post(); ?>
                            <div class="row agd-post-excerpt" id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
                                <div class="products">
                                    <h4 class="product-content-title">
                                        <a href="<?php the_permalink(); ?>"
                                           title="<?php echo esc_attr('Czytaj dalej') ?>"><?php the_title(); ?></a>
                                    </h4>
                                    <div class="thumbnail-agd">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(200, 220)); ?></a>
                                    </div>
	                                <?php printExcerpt(100);//the_excerpt(__('Czytaj dalej »', 'boma_agd')); ?>
	                                <?php echo moreText(); ?>
                                </div>
                                </div><?php get_the_ID(); ?>
							<?php endwhile; ?>
                            <div class="navigation">
                                <span class="newer"><?php previous_posts_link(__('« Poprzednie produkty', 'boma_agd')) ?></span>
                                <span class="older"><?php next_posts_link(__('Wiecej produktów »', 'boma_adg')) ?></span>
                            </div><!-- /.navigation -->
						<?php else: ?>

                            <div id="post-404" class="noposts">

                                <p><?php _e('Produkty nie znaleziono :(', 'boma_agd'); ?></p>

                            </div><!-- /#post-404 -->
						
						<?php endif;
						wp_reset_query(); ?>
                    </div>
                </div>
				<?php get_template_part('template-parts/content', 'sidebar'); ?>
            </div>
        </div>
    </section>
<?php get_template_part('template-parts/content', 'promo'); ?>

<?php get_footer(); ?>