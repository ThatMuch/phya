<?
/**
 * @author      ThatMuch
 * @version     0.1.0
 * @since       phya_1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/aos.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/fullpage.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/animate.css">

		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/normalize.css">
    <?php phya_gtm('head') ?>
    <!--=== OPEN-GRAPH TAGS ===-->
    <?php phya_ogtags() ?>
    <!--=== PRELOAD FONTS ===-->
    <?php // phya_preload_fonts() ?>
    <!--=== WP HEAD ===-->
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
	<div id="fullpage">
			<div class="section hero__area">
		<div class="header__area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header">
                             <div class="language dropdown">
                                <button class="btn dropdown-toggle" type="button" id="language" data-bs-toggle="dropdown" aria-expanded="false">FR</button>
                                <ul class="dropdown-menu" aria-labelledby="language">
                                    <li><a class="dropdown-item" href="<?php echo site_url(); ?>/en">EN</a></li>
                                </ul>
                            </div>
                            <div class="social__bookmarks">
                                <ul>
                                   <!-- <li><a href="#" target="_blank"><img src="<?php // echo get_template_directory_uri() ?>/assets/img/tiktok-white.svg" alt="tiktok"></a></li> -->
                                    <li><a href="https://www.instagram.com/phya_sport/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram-white.svg" alt="instagram"></a></li>
                                    <li><a href="https://www.linkedin.com/company/phyaco/?originalSubdomain=fr" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/img/linkedin-white.svg" alt="linkedin"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
            <div class="hero__image">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/metisse.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="hero__text">
                            <div class="logo" data-aos="fade-down" data-aos-anchor=".hero__area" data-aos-delay="900">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/phya-logo.svg" alt="phya">
                            </div>
                            <h1 class="text-uppercase" data-aos="fade-up" data-aos-anchor=".hero__area" data-aos-delay="500"><span class="light">Learn</span> <span class="middle">Train</span> Play</h1>
							<?php if ($wp_query->queried_object->post_name == "en" ) : ; ?>
                            <p data-aos="fade-up" data-aos-anchor=".hero__area" data-aos-delay="600">
							The app that’s revolutionizing fitness! <br>Enjoy motivating, totally interactive workouts<br> with expert coaches. And without having to leave your home!</p>
							<?php else : ?>
                            <p data-aos="fade-up" data-aos-anchor=".hero__area" data-aos-delay="600">L’Application qui révolutionne le Fitness ! <br>Des séances motivantes, totalement interactives, fun, <br>avec des experts qualifiés. Le tout sans bouger de chez vous !</p>
							<?php endif;?>
                            <div class="signup__form" data-aos="fade-up" data-aos-anchor=".hero__area" data-aos-delay="800">
								<form method="POST" action="https://bodystat.activehosted.com/proc.php" id="_form_1_" class="_form _form_1 _inline-form _inline-style _dark" novalidate>
									<input type="hidden" name="u" value="1" />
									<input type="hidden" name="f" value="1" />
									<input type="hidden" name="s" />
									<input type="hidden" name="c" value="0" />
									<input type="hidden" name="m" value="0" />
									<input type="hidden" name="act" value="sub" />
									<input type="hidden" name="v" value="2" />
									<input type="hidden" name="or" value="746b6b4d71f8eb62f7052cd03d62d1d2" />
									<input type="text" id="email" name="email" placeholder="Email address" required/>
									<button id="_form_1_submit" class="_submit" type="submit">
										<img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow-right.svg" alt="arrow right"><span class="text-uppercase">Sign up</span>
									</button>

								</form>
                            </div>
                            <div class="app__link" data-aos="fade-up" data-aos-anchor=".hero__area" data-aos-delay="800">
                                <a href="https://apps.apple.com/fr/app/phya/id1596641685" target="_blank">
                                    <span class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/img/apple.svg" alt=""></span>
                                    <span class="text">Download on the <strong>App Store</strong></span>
                                </a>
                             <a href="https://play.google.com/store/apps/details?id=com.bodystat.phya_v3" target="_blank">
                                    <span class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/img/play.svg" alt=""></span>
                                    <span class="text">Get it on <strong>Google Play</strong></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>

    <?php phya_gtm('body') ?>
