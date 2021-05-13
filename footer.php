		<footer>
			<?php if( have_rows('footer','option')): ?>
				<?php while( have_rows('footer', 'option') ): the_row(); ?>
			<div class="contact-us" id="contact">
				<div class="container">
					<h2><?php the_sub_field('contact_us_heading','option')?></h2>
					<div class="row">
						<?php if( have_rows('columns','option')): ?>
							<?php while( have_rows('columns', 'option') ): the_row(); ?>
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="foot-cont">
								<?php $ftricon = get_sub_field('column_icon','option'); ?>
								<?php if($ftricon):?>
								<i><img src="<?php echo esc_url($ftricon['url']);?>"></i>
								<?php endif; ?>
								<?php the_sub_field('column_content','option');?>
							</div>
						</div>
						<?php endwhile; ?>
					<?php endif; ?>
					</div>
				</div>
			</div>

			<div class="btm-foot">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-12">
							<div class="btm-foot-left">
								<?php the_sub_field('copyright_text','option');?>
							</div>
						</div>
						<div class="col-md-8 col-sm-12">
							<div class="btm-foot-right">
								<ul>
									<?php if( have_rows('footer_links','option')): ?>
										<?php while( have_rows('footer_links', 'option') ): the_row(); ?>
											<?php $ftrlink = get_sub_field('link_text'); ?>
											<li><a href="<?php echo esc_url( $ftrlink['url'] ); ?>"><?php the_sub_field('link_text','option');?></a></li>
										<?php endwhile; ?>
									<?php endif; ?>	
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		<?php endif; ?>
		</footer>
		<div class="top" onclick="toTop()" style="display: block;"><i><img src="<?php bloginfo('template_directory'); ?>/images/top-arrow.svg"></i></div>
		<?php wp_footer(); ?>
	</body>
</html>