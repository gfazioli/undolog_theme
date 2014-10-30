<div id="sidebar">

	<div class="widget_recent_entries">
		<h2>Più votati "<?php single_tag_title(); ?>"</h2>
		<?php $category = get_the_category(); ?>
		<?php if (function_exists('get_most_rated_category')): ?>
		<ol>
			<?php get_most_rated_category($category[0]->cat_ID, '', 0, 5); ?>
		</ol>
		<?php endif; ?>
	</div>

	<div class="widget_recent_entries">
		<h2>Più visti di "<?php single_tag_title(); ?>"</h2>
		<?php if (function_exists('get_most_viewed_category')): ?>
		<ol>
			<?php get_most_viewed_category($category[0]->cat_ID, '', 5); ?>
		</ol>
		<?php endif; ?>
		</div>

	<?php dynamic_sidebar('sidebar-archives') ?>

	<?php if (function_exists('get_recent_comments')) { ?>
	<div id="get-recent-comments" class="widget widget_get_recent_comments">
	   <h2>Ultimi Commenti</h2>
	   <div id="get_recent_comments_wrap">
	     <ul><?php get_recent_comments(); ?></ul>
	   </div>
	</div>
	<?php } ?>

</div>