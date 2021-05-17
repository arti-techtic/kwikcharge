<?php get_header(); ?>
<?php if( have_rows('home_section') ): ?>
    <?php while( have_rows('home_section') ): the_row(); ?>
		<div class="top-mid" id="home">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-12">
						<div class="mid-left-cont" data-aos="fade-right">
							<h1><?php the_sub_field('heading'); ?></h1>
							<?php the_sub_field('description'); ?>
							<ul>
							<?php if( have_rows('buttons') ): ?>
	    						<?php while( have_rows('buttons') ): the_row(); ?>
	    							<?php $btnimage = get_sub_field('button_image');
	    								$btnlink = get_sub_field('button_link'); 
	    								if($btnimage) :
	    							 ?>
									<li data-aos="fade-up" data-aos-duration="1000"><a href="<?php echo esc_url( $btnlink['url'] ); ?>" target="<?php echo $btnlink['target'] ? $btnlink['target'] : '_self'; ?>"><img src="<?php echo esc_url( $btnimage['url'] ); ?>"></a></li>
									<?php endif; ?>
								<?php endwhile; ?>
							<?php endif; ?>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="mid-right-img" data-aos="fade-left" data-aos-delay="700">
							<?php $image = get_sub_field('right_image'); ?>
							<figure><img src="<?php echo esc_url( $image['url'] ); ?>"></figure>
						</div>
					</div>
				</div>
			</div>
		</div>
  	<?php endwhile; ?>
<?php endif; ?>
</div>
<?php if( have_rows('about_us_section') ): ?>
    <?php while( have_rows('about_us_section') ): the_row(); ?>
		<div class="about-us" id="about">
			<div class="container">
				<h2 data-aos="fade-down"><?php the_sub_field('section_title'); ?></h2>
				<div data-aos="fade-up" data-aos-duration="1000"><?php the_sub_field('content'); ?></div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>
<?php if( have_rows('how_it_works_section') ): ?>
    <?php while( have_rows('how_it_works_section') ): the_row(); ?>
<div class="how-work">
	<?php $slide_img = get_field('how_it_works_section_slider_Images'); 
	?>
	<?php if( $slide_img ): ?>
	<div class="work-list">
		<?php foreach( $slide_img as $simg ): ?>
		<div class="mobile-item">
			<figure><img src="<?php echo esc_url( $simg['url'] ); ?>"></figure>
		</div>
		<?php endforeach; ?>
	</div>
	<?php endif; ?>
	<div class="work-content" id="howwork">
		<div class="container">
			<h2 data-aos="fade-down"><?php the_sub_field('section_title'); ?></h2>
			<div class="row">
				<?php if( have_rows('section_columns') ): ?>
    				<?php while( have_rows('section_columns') ): the_row(); ?>
				 <div class="col-lg-4 col-md-6 col-sm-12">
				 	<div class="work-inner-cont" data-aos="fade-up" data-aos-delay="800" data-aos-duration="800">
				 		<?php $icon = get_sub_field('column_icon'); 
				 			if($icon):
				 		?>
					 		<i><img src="<?php echo esc_url( $icon['url'] ); ?>"></i>
					 	<?php endif; ?>
				 		<h4><?php the_sub_field('column_title'); ?></h4>
				 		<?php the_sub_field('column_content'); ?>
				 	</div>
				 </div>
				 	<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>