<?php
/**
 * Template Name: Gazetki
 * @package boma_agd
 */
?>
<?php get_header(); ?>

<?php
queryPostsByGazetki(
	'post',
	'gazetki',
	'publish',
	'3',
	get_query_var('paged')
);
?>

<section id="main-cont">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8">
				<div class="row-content">
					<div class="container-pla">
						<h1 class="<?php echo !is_front_page() ? __('b-title') : __('shop-title r-title') ?>">Gazetki</h1>
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
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(500, 500)); ?></a>
								</div>
								<?php the_excerpt(__('Czytaj dalej »', 'boma_agd')); ?>
							</div>
							</div><?php get_the_ID(); ?>
						<?php endwhile; ?>
						<div class="navigation">
							<span class="newer"><?php previous_posts_link(__('« Poprzednie wpisy', 'boma_agd')) ?></span>
							<span class="older"><?php next_posts_link(__('Wiecej »', 'boma_adg')) ?></span>
						</div><!-- /.navigation -->
					<?php else: ?>
						
						<div id="post-404" class="noposts">
							
							<p><?php _e('Gazetki nie znaleziono :(', 'boma_agd'); ?></p>
						
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
