<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- DESKTOP MENU -->
<header class="bg-onePointRed py-0 lg:py-5" role="banner">
	<nav id="navbar" class="hidden lg:block">
		<div class="container mx-auto">
			<div class="flex justify-between">
				<!-- LEFT SECTION -->
				<!-- LOGO -->
				<div class="site-branding">
					<?php
					if ( has_custom_logo() ) {
						the_custom_logo();
					} elseif ( $site_name ) {
						?>
						<h1 class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo bloginfo('name'); ?>" rel="home">
								<?php echo esc_html( $site_name ); ?>
							</a>
						</h1>
						<p class="site-description">
							<?php
							if ( $tagline ) {
								echo esc_html( $tagline );
							}
							?>
						</p>
					<?php } ?>
				</div>
				<!-- RIGHT SECTION --> 
				<!-- NAVIGATION -->
				<div class="flex">
					<div class="nav_rightsection flex my-auto">
						<div class="my-auto">
							<?php wp_nav_menu(
								array(
								'theme_location' => 'primary-menu',
								'menu_class' => 'shop_menu text-black text-lgfont-medium flex font-openSans')
								); 
							?>
						</div>
					</div>
					<!-- CALL US BUTTON -->
					<div class="ml-10">
						<a href="#">
							<button class="bg-black text-white hover:text-onePointRed font-semibold py-2 px-4 border-2 border-white rounded">Call us: <?php echo the_field('contact_phone_number', 12); ?></button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</nav>
</header>

<!-- MOBILE MENU -->
<header>
  <nav id="navbar" class="lg:hidden bg-onePointRed py-5 relative">
        <div class="container mx-auto">
            <div class="flex justify-between">
                <!-- LOGO SECTION -->
				<div class="site-branding">
					<?php
					if ( has_custom_logo() ) {
						the_custom_logo();
					} elseif ( $site_name ) {
						?>
						<h1 class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo bloginfo('name'); ?>" rel="home">
								<?php echo esc_html( $site_name ); ?>
							</a>
						</h1>
						<p class="site-description">
							<?php
							if ( $tagline ) {
								echo esc_html( $tagline );
							}
							?>
						</p>
					<?php } ?>
				</div>
                <!-- MENU ICON -->
                <button class="nav-toggler" data-target="#navigation">
                    <i class="text-2xl text-white fas fa-bars"></i>
                </button>
            </div>
        </div>
        <!-- DROPDOWN CONTAINER -->
        <div class="hidden navbar_grid__dropdown w-full h-auto absolute top-0 right-0 z-10 bg-black flex justify-between" id="navigation">

            <!-- DROPDOWN MENU -->
            <div class="header_dropdown bg-black flex justify-center w-full h-auto py-10">
                <div class="">
                    <!-- CLOSE BUTTON -->
                    <button class="nav_close__button nav-toggler close_button text-white text-4xl p-3 absolute top-2 right-2" data-target="#navigation">&#215;</button>
                    <!-- NAVIGATION -->
                    <div class="navigation">
                        <div class="pages mb-5">
                            <?php wp_nav_menu(
								array(
								'theme_location' => 'primary-menu',
								'menu_class' => 'shop_menu text-black text-2xl font-medium font-openSans')
								); 
							?>
                        </div>
                    </div>
					<!-- KONFIGURATOR BUTTON -->
					<div class="">
						<a href="#">
							<button class="bg-white text-black hover:text-onePointRed font-semibold py-2 px-4 border-2 border-white rounded">Call us: <?php echo the_field('contact_phone_number', 12); ?></button>
						</a>
					</div>
                </div>
            </div>
        </div>
    </nav>
</header>

