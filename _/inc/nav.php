<?php
	global $wp_query;
	if ( $wp_query->max_num_pages > 1 ) : ?>
<div class="navigation">
	<div class="next-posts"><?php next_posts_link('&laquo; Indietro') ?></div>
	<div class="prev-posts"><?php previous_posts_link('Avanti &raquo;') ?></div>
</div>
<?php endif; ?>