<?php get_header(); ?>

<?php if (have_posts()) : ?>
		<article <?php post_class('archive-list') ?>>
		<h2>Risultati della ricerca</h2>

	<?php
 			global $wp_query;
	if ($wp_query->max_num_pages > 1) : ?>
		<div class="navigation">
			<div class="next-posts"><?php next_posts_link('&laquo; Indietro') ?></div>
			<div class="prev-posts"><?php previous_posts_link('Avanti &raquo;') ?></div>
		</div>
		<br style="clear:both;margin-bottom:32px;display:block"/>
		<?php endif; ?>

	<?php while (have_posts()) : the_post(); ?>

		<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		<?php edit_post_link( 'Modifica', '<span class="edit-link">', '</span>' ); ?>
		<ul class="meta-info">
			<li class="date-time"><?php the_time('j F Y') ?></li>
			<li class="categories"><?php echo get_the_category_list(', ') ?></li>
			<li class="comments"><a href="<?php the_permalink() ?>#comments"><?php echo get_comments_number() ?>
				commenti</a></li>
		</ul>

		<?php //include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

		<div class="entry-content">
			<?php the_content(''); ?>
			<p class="more"><a href="<?php the_permalink(); ?>">Continua...</a></p>
		</div>

		<?php endwhile; ?>

	</article>

			<?php get_sidebar('search'); ?>

			<?php
				global $wp_query;
				if ( $wp_query->max_num_pages > 1 ) : ?>
				<br style="clear:both;margin-bottom:32px;display:block" />
				<div class="navigation">
					<div class="next-posts"><?php next_posts_link('&laquo; Indietro') ?></div>
					<div class="prev-posts"><?php previous_posts_link('Avanti &raquo;') ?></div>
				</div>
			<?php endif; ?>

	<?php else : ?>

		<h2>Nothing found</h2>

	<?php endif; ?>

<?php get_footer(); ?>