<?php
/**
 * Template Name: Shops
 *
 * @package boma_agd
 */

get_header(); ?>
<?php
// nasze-sklepy
$page = get_queried_object()->post_name;

$shops = array(
    'storesTitle' => get_field('stores-title'),
);

?>
<section id="main-cont">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <div class="row-content border">
                    <div class="make-of">
                        <div class="container-pla">
                            <h1 class="<?php echo !is_front_page() ? __('b-title') : __('shop-title r-title') ?>"><?php echo $shops['storesTitle'] ?></h1>

                        </div>
	                    <?php get_template_part('template-parts/content', 'hurtownia'); ?>
	                    <?php get_template_part('template-parts/content', 'pewex'); ?>
	                    <?php get_template_part('template-parts/content', 'lazni'); ?>
	                    <?php get_template_part('template-parts/content', 'katedra'); ?>
	                    <?php get_template_part('template-parts/content', 'bulki'); ?>
                    </div>
                </div>
            </div>
            <div class="make-of-sidebar">
	            <?php get_template_part('template-parts/content', 'sidebar'); ?>
            </div>
			
        </div>
    </div>
</section>
<?php get_template_part('template-parts/content', 'promo'); ?>

<?php get_footer(); ?>
