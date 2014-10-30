<?php get_header(); ?>

		<?php if (have_posts()) : ?>

			<article <?php post_class('archive-list') ?>>
				
 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2>Categoria &#8216;<?php single_cat_title(); ?>&#8217;</h2>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2>Articoli con Tag &#8216;<?php single_tag_title(); ?>&#8217;</h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2>Archivio <?php the_time('F jS, Y'); ?></h2>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2>Archivio <?php the_time('F, Y'); ?></h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2 class="pagetitle">Archivio <?php the_time('Y'); ?></h2>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2 class="pagetitle">Archivio autore</h2>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="pagetitle">Archivi</h2>
			
			<?php } ?>

			<?php
				global $wp_query;
				if ( $wp_query->max_num_pages > 1 ) : ?>
			<div class="navigation">
				<div class="next-posts"><?php next_posts_link('&laquo; Indietro') ?></div>
				<div class="prev-posts"><?php previous_posts_link('Avanti &raquo;') ?></div>
			</div>
			<br style="clear:both;margin-bottom:32px;display:block" />
			<?php endif; ?>

			<?php while (have_posts()) : the_post(); ?>

						<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						<?php edit_post_link( 'Modifica', '<span class="edit-link">', '</span>' ); ?>
						<ul class="meta-info">
							<li class="date-time"><?php the_time('j F Y') ?></li>
							<li class="categories"><?php echo get_the_category_list( ', ' ) ?></li>
							<li class="comments"><a href="<?php the_permalink() ?>#comments"><?php echo get_comments_number() ?> commenti</a></li>
						</ul>
					
						<?php //include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

						<div class="entry-content">
							<?php the_content(''); ?>
							<p class="more"><a href="<?php the_permalink(); ?>">Continua...</a></p>
						</div>

			<?php endwhile; ?>
			</article>

			<?php get_sidebar('archive'); ?>

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
<div id="appinch"></div>
<?php get_footer(); ?>