<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sunfine_template
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script> (function(d) { var config = { kitId: 'gfg0adh', scriptTimeout: 3000, async: true }, h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s) })(document); </script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="l-body" data-tmpdir="<?php echo esc_url(get_template_directory_uri()); ?>/">
<header id="masthead" class="l-header">
	<div class="site-branding l-header__title">
		<?php //the_custom_logo(); ?>
		<?php
		if ( is_front_page() && is_home() ) : ?>
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php else : ?>
			<p class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		<?php endif; ?>
	</div><!-- .site-branding -->

	<?php get_template_part('template-parts/components/nav','pc'); ?>
	<?php get_template_part('template-parts/components/nav','sp'); ?>


	<?php
	$header_tel               = get_field('header_tel', 'options');
	$header_field_tel_title   = get_field_object('header_tel','options');
	$header_business_hours    = get_field('header_business-hours', 'options');
	$header_field_business_hours_title   = get_field_object('header_business-hours','options');
	$header_contact_link               = get_field('header_contact-link', 'options');
	$header_field_contact_title   = get_field_object('header_contact-link','options');
	$header_step_link    = get_field('header_step-link', 'options');
	$header_field_step_title   = get_field_object('header_step-link','options');
	?>
	<ul class="l-header__info">
		<li>
			<span class="title"><?php echo $header_field_tel_title['label']; ?></span><span class="number"><?php echo $header_tel; ?></span>
		</li>
		<li>
			<span class="title"><?php echo $header_field_business_hours_title['label']; ?></span><span class="time"><?php echo $header_business_hours; ?></span>
		</li>
		<li>
			<div><a href="<?php echo $header_contact_link; ?>"><?php echo $header_field_contact_title['label']; ?></a></div>
		</li>
		<li>
			<div><a href="<?php echo $header_step_link; ?>"><?php echo $header_field_step_title['label']; ?></a></div>
		</li>
	</ul>


</header><!-- #masthead -->

