<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package boma_agd
 */

?>
<?php

global $post;
$options = array(
	'tel' => get_field('phone'),
	'email' => get_field('email'),
	'logo' => get_field('logo'),
	'headerBg' => get_field('headerBg'),
);

$options2 = array(
	'phone' => get_option('bomaMainPhone'),
	'email' => get_option('bomaMainEmail')
);

$title = get_bloginfo('name') . ' | ' . $post->post_title;

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="icon" href="<?php bloginfo('stylesheet_directory') ?>/assets/images/boma_favicon.png"/>
    <title><?php echo esc_attr($title); ?></title>
    <link rel="stylesheet" href="" type="text/css"/>
    <link href="<?php bloginfo('stylesheet_directory') ?>/assets/css/icon-fonts/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/assets/css/boma.css"/>
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:700" rel="stylesheet">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.10&appId=1555284184687438";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'boma_agd'); ?></a>

    <!--HEADER-->
    <header class="site-header">
        <div class="logo contact">
            <div class="logo-cont">
                <ul class="logo">
                    <li class="brand">
                        <a class="brand" href="/">
							<?php if (!empty($options['logo'])) : ?>
                                <img src="<?php echo esc_url($options['logo']) ?>" alt="Boma AGD"/>
							<?php else : ?>
                                <img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/boma-logo.png"
                                     alt="Boma AGD"/>
							<?php endif; ?>
                        </a>
                    </li>
                    <li class="title"><h1 class="modal-title"><?php bloginfo('description'); ?></h1></li>
                </ul>
            </div>
            <div class="contact-cont">

                <ul class="contact-email">
                    <li><span>
                            <?php if (!empty($options['tel'])) : ?>
	                            <?php echo esc_attr($options['tel']); ?>
                            <?php else : ?>
	                            <?php echo esc_attr('Tel: ' . $options2['phone']) ?>
                            <?php endif; ?>
                        </span></li>
                    <li><span>
                            <a href="mailto:<?php print(empty($options['email']) ? $options2['email'] : $options['email']) ?>" class="main-email" style="color:#000;">
                               <?php if (!empty($options['email'])) : ?>
	                               <?php echo esc_attr($options['email']); ?>
                               <?php else : ?>
	                               <?php echo esc_attr('E-mail: ' . $options2['email']) ?>
                               <?php endif; ?>
                            </a>
                        </span></li>
                </ul>
            </div>
            <div class="container"></div>
            <div class="navbar-wrapper">
                <div class="navbar navbar-inverse" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse mynavbar" style="">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'primary',
							'container' => 'ul',
							'container_class' => 'navbar-collapse collapse navbar',
							'menu_class' => 'nav navbar-nav navbar-middle',
							'container_id' => 'navbar'
						));
						?>
                    </div>
                </div>
            </div>
        </div>
		<?php if (is_page('home')) : ?>
            <section id="hero">
				<?php if (!empty($options['headerBg'])) : ?>
                    <img src="<?php echo esc_url($options['headerBg']); ?>"/>
				<?php else : ?>
                    <img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/headerbg.jpg"
                         alt="<?php esc_html_e('Background', 'boma_agd') ?>"/>
				<?php endif; ?>
            </section>
		<?php else : ?>
            <div class="helper"></div>
		<?php endif; ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108381068-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108381068-1');
</script>

    </header>