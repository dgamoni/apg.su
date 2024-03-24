<?php get_header(); ?>
	<!-- HEADLINE -->
	<div class="headline singlepage">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
					<div class="title">
						<h1><?php the_title(); ?></h1>
					</div>
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

	<!-- CONTENT -->
	<div class="container wrapper">
		<div class="row">
			<div class="col-md-12">
				<?php if (have_posts()): while (have_posts()): the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
	<!-- CONTENT END -->

<?php get_footer(); ?> 