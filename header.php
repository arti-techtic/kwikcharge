<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"content="width=device-width, initial-scale=1.0">
		<title> <?php wp_title('|',true,'right');?> <?php bloginfo('name')?>  </title>
	<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="main-top">
			<div class="header-height">
				<div class="top-line">
					<div class="container">
						<div class="cd-dropdown-wrapper">
							<a class="cd-dropdown-trigger meanmenu-reveal" href="#"><span></span><span></span><span></span></a>
							<nav class="cd-dropdown">
								<h2>Menu</h2>
								<a href="#0" class="cd-close">Close</a>
								<?php wp_nav_menu( array( 'theme_location' => 'mobile-menu','menu_class' => 'cd-dropdown-content' ) ); ?>
							</nav>
						</div>
						<div class="top-line-inner">
							<div class="logo">
								<?php if( have_rows('header','option')): ?>
									<?php while( have_rows('header', 'option') ): the_row(); ?>
										<?php $logo = get_sub_field('header_logo','option'); ?>
										<a href="<?php echo site_url(); ?>">
											<img src="<?php echo esc_url($logo['url']);?>">
										</a>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
							<div class="header-nav">
								<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>	
							</div>
						</div>
					</div>
				</div>
			</div>