<?php
/*
	Template Name: Shop
*/

get_header(); ?> 

	<!-- HEADLINE -->
	<div class="headline contacts--all">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php if (function_exists('dimox_breadcrumbs')): dimox_breadcrumbs();?>
					<?php endif; ?>
<!-- 					<div class="title">
						<h1></h1>
					</div> -->
				</div>
				<div class="col-md-12">
				<?php if( $GLOBALS['child_li'] != "" ):?>
					<div class="child_link">
						<?php echo $GLOBALS['child_li']; ?>
					</div>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- HEADLINE END -->


	<div class="container wrapper container--contacts--all">
		<div class="row">
			<div class="col-md-3">
				<?php if ( function_exists('dynamic_sidebar') )
				dynamic_sidebar('shop-sidebar'); ?>
			</div>

			<div class="col-md-9">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
		</div>

	</div>


<?php get_footer(); ?>







 