<h3>Pagine</h3>
		<ul>
			<li><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">Undolog.com - Home Page</a></li>
			<li><a target="_blank" href="https://github.com/gfazioli">GitHub</a></li>
			<li><a target="_blank" href="https://code.google.com/p/undolibrary/">Google Project</a></li>
			<?php wp_list_pages('title_li=&'); ?>
		</ul>
		<?php $archive_query = new WP_Query('showposts=1000'); ?>
		<h3>Post (<?php echo $archive_query->post_count?>)</h3>

		<div class="sitemapBox">
			<ul>
				<?php
				while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
					<li><a href="<?php the_permalink() ?>" rel="bookmark"
						   title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a> (
						<small style="font-size:10px"><?php the_time('j F, Y') ?></small>
						)
					</li>
					<?php endwhile; ?>
			</ul>
		</div>
		<h3>Archivi mensili</h3>

		<div class="sitemapBox">
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
		</div>
		<h3>Categorie</h3>

		<div class="sitemapBox">
			<ul>
				<?php wp_list_categories	('title_li=0&show_count=1'); ?>
			</ul>
		</div>
		<h3>Feeds RSS/FeedBurner</h3>
		<ul>
			<li><a href="<?php bloginfo('rdf_url'); ?>" title="RDF/RSS 1.0 feed"><acronym
					title="Resource Description Framework">RDF</acronym>/<acronym
					title="Really Simple Syndication">RSS</acronym> 1.0 feed</a></li>
			<li><a href="<?php bloginfo('rss_url'); ?>" title="RSS 0.92 feed"><acronym
					title="Really Simple Syndication">RSS</acronym> 0.92 feed</a></li>
			<li><a href="<?php bloginfo('rss2_url'); ?>" title="RSS 2.0 feed"><acronym
					title="Really Simple Syndication">RSS</acronym> 2.0 feed</a></li>
			<li><a href="<?php bloginfo('atom_url'); ?>" title="Atom feed">Atom feed</a></li>
		</ul>