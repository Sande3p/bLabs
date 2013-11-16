<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php bloginfo('name'); ?><?php wp_title(' - ', true, 'left'); ?></title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="format-detection" content="telephone=no"/>

	<?php wp_head(); ?>
	<?php get_template_part('header.assets'); ?>
	
  </head>

<body>
<?php
$nav = array (
		'menu' => 'Home Navigation',
		'menu_class'      => '',
		'container_class' => 'menu',
		'walker' => new nav_menu_walker () 
);
?>
	<div class="wrapper">
<nav class="slidingNav navOnly onMobi">
		<?php wp_nav_menu ( $nav );
	?>
</nav>
		<!-- Header-->
		<?php if ( is_front_page() ) : ?>
			<header id="header" class="slide">
			<div class="container">
						<a href="<?php bloginfo('wpurl');?>" title="<?php bloginfo('name'); ?>" id="logo" class="logo"></a>
						<nav class="mainNav">					
							<?php wp_nav_menu ( $nav ); ?>
					
		<?php else : ?>		
			<header id="header" class="section_title">
			<div class="container">
						<a href="<?php bloginfo('wpurl');?>" title="<?php bloginfo('name'); ?>" id="logo" class="logo"></a>
						<nav class="mainNav">
					<?php
					$nav = array (
							'menu' => 'Main Navigation',
							'menu_class'      => '',
							'container_class' => 'menu',
							'walker' => new nav_menu_walker () 
					);
					wp_nav_menu ( $nav );
					?>
		<?php endif; ?>
		
			
				
				
				</nav>
					<!-- /.mainNav -->
					<div class="clear"></div>
				</div>	
			</header>
			<!-- /#header -->
			
			
				
		
