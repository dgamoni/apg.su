<div class="col-md-4 container--object">
	<div class="img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
	<div>
		<span class="date"><?php the_time('d.m.Y'); ?></span>
		<a href="<?php the_permalink(); ?>"><div class="title"><?php the_title(); ?></div></a>
	</div>
</div>