<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->


	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">



				<div id="inner-header" class="wrap cf">

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
						<a href="<?php echo home_url(); ?>" rel="nofollow"><img id="MyLogo" src="http://terraintechnicalservices.ca/wp-content/uploads/terrain-technical-services-logo.png" /></a>
				
					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>

					<?php function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' ); ?>

<?php 

function register_my_menus() {
  register_nav_menus(
    array(
      'menubar' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

?>




<?php wp_nav_menu( array( 

    'menu_class' => 'menubar',
    'items_wrap' => '<ul id="%1$s" class="menubar">%3$s</ul>'


 ) );

 ?>

                                 





					

				</div>

			</header>
