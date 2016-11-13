<h4>About</h4>
	<div class="well well-sm">
	<?php the_author_meta('description');?>
	</div>

<h4>Archive</h4>
	<ol class="list-unstyled">
		<?php wp_get_archives( 'type=monthly' ); ?>
	</ol>
	