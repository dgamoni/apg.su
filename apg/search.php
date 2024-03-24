<?php
/**
 * The template for displaying search results pages.
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if ( have_posts() ) : ?>
					<h1 class="page-title" style="text-align:center;">Результаты поиска </h1>
					<?php while ( have_posts() ) : the_post(); ?>

						<!-- post -->
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<!-- entry-header -->
									<header class="entry-header">
										<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
									</header>
								<!-- entry-header end -->
								<!-- entry-summary -->
									<div class="entry-summary">
										<?php the_excerpt(); ?>
									</div>
								<!-- entry-summary end -->
								<!-- entry-footer -->
									<footer class="entry-footer">
										<?php edit_post_link( 'Редактировать', '<span class="edit-link">', '</span>' ); ?>
									</footer>
								<!-- entry-footer end -->
							</article>
						<!-- post end -->

					<?php endwhile;
					the_posts_pagination( array(
						'prev_text'          => '<- ',
						'next_text'          => ' ->',
						'before_page_number' => '<span class="meta-nav screen-reader-text"></span>',
					) );
				else :
					get_template_part( 'content', 'none' );
				endif;
				?>
				
			</div>
		</div>
	</div>

<?php get_footer(); ?>
