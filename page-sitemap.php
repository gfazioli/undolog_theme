<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article class="post" id="post-<?php the_ID(); ?>">
	<h2 class="entry-title"><?php the_title(); ?></h2>

	<div class="entry-content">
		<?php include_once (TEMPLATEPATH . '/sitemap.inc.php'); ?>
	</div>
</article>
<?php get_sidebar('page'); ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>