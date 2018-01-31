<?php
/**
 * Template Name: Home Page
 *
 * @package boma_agd
 */

get_header(); ?>

<?php
queryPostsInFrontPage(
	'post',
	'gazetki, wpisyBlogowe',
	'publish',
	'3',
	get_query_var('paged')
);
?>
<?php
$pageOptions = array(
	'poradnik' => get_field('poradnik'),
);

$aboutUs = get_field('about_us');

$kses = array(
	'br' => array(),
);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-8">
            <div class="row-content front-page-boma">
                <h1 class="shop-title r-title"><?php echo esc_attr($pageOptions['poradnik']) ?></h1>
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                    <div class="row agd-post-excerpt" id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                <h4 class="product-content-title">
                                    <a href="<?php the_permalink(); ?>"
                                       title="<?php echo esc_attr('Czytaj dalej') ?>"><?php the_title(); ?></a>
                                </h4>
                                <div class="thumbnail-agd">
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(200, 200)); ?></a>
                                </div>
                                <?php printExcerpt(100);//the_excerpt(__('Czytaj dalej »', 'boma_agd')); ?>
                                <?php echo moreText(); ?>
                            </main>
                        </div>
                        </div><?php get_the_ID(); ?>
                    <?php endwhile; ?>
                <?php else: ?>
                    <div id="post-404" class="noposts">
                        <p><?php _e('Wpisy nie znaleziono :(', 'boma_agd'); ?></p>
                    </div><!-- /#post-404 -->
                <?php endif;
                wp_reset_query(); ?>
            </div>
            <div class="about-us">
                <?php echo wp_kses(mb_substr($aboutUs, 0,250), $kses); ?>
                
                <a href="<?php echo esc_url(get_permalink(484)) ?>"><?php echo esc_attr('...&nbsp;Czytaj dalej »') ?></a>
            </div>
        </div>
        <?php get_template_part('template-parts/content', 'sidebar'); ?>
    </div>
</div>
<?php get_template_part('template-parts/content', 'promo'); ?>

<?php get_footer(); ?>
