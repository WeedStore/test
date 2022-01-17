<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package shoptimizer
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="height=device-height, width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '359348058865127');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=359348058865127&ev=PageView&noscript=1"
/></noscript>
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
} ?>

<?php do_action( 'shoptimizer_before' ); ?>

<div id="page" class="hfeed site">

	<?php
	do_action( 'shoptimizer_before_site' );
	do_action( 'shoptimizer_before_header' );
	?>

	<?php do_action( 'shoptimizer_topbar' ); ?>

	<header id="masthead" class="site-header">

		<div class="menu-overlay"></div>

		<div class="main-header col-full">

			<?php
			/**
			 * Functions hooked into shoptimizer_header action
			 *
			 * @hooked shoptimizer_site_branding                    - 20
			 * @hooked shoptimizer_secondary_navigation             - 30
			 * @hooked shoptimizer_product_search                   - 40
			 */
			do_action( 'shoptimizer_header' );
			?>

		</div>


	</header><!-- #masthead -->

	
	<div class="col-full-nav">

	<?php
	/**
	 * Functions hooked into shoptimizer_header action
	 *
	 * @hooked shoptimizer_primary_navigation_wrapper       - 42
	 * @hooked shoptimizer_primary_navigation               - 50
	 * @hooked shoptimizer_header_cart                      - 60
	 * @hooked shoptimizer_primary_navigation_wrapper_close - 68
	 */
	do_action( 'shoptimizer_navigation' );
	?>

	</div>

	<?php
	/**
	 * Functions hooked in to shoptimizer_before_content
	 *
	 * @hooked shoptimizer_header_widget_region - 10
	 */
	do_action( 'shoptimizer_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">

		<div class="shoptimizer-archive">

		<div class="archive-header">
			<div class="col-full">
				<?php
				/**
				 * Functions hooked in to shoptimizer_content_top
				 *
				 * @hooked woocommerce_breadcrumb - 10
				 */
				do_action( 'shoptimizer_content_top' );
				?>
			</div>
		</div>

		<div class="col-full">
