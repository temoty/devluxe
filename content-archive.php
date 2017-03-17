<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
        <h1><a href="http://<?php the_title() ?>"><?php the_title() ?></a></h1>
<!--<small>Posted n: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>-->
	</header>

	<div class="row">

		<?php if( has_post_thumbnail() ): ?>

		<div class="col-xs-12 col-sm-4">
            <div class="thumbnail"><a href="http://<?php the_title() ?>"><?php the_post_thumbnail('medium'); ?></a></div>
		</div>
		<div class="col-xs-12 col-sm-offset-1 col-sm-4 col-sm-offset-3">
			<?php the_excerpt(); ?>
		</div>

	<?php else: ?>

		<div class="col-xs-12">
			<?php the_excerpt(); ?>
		</div>

	<?php endif; ?>

	</div>

</article>