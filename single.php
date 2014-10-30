<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

    <h2 class="entry-title"><?php the_title(); ?></h2>
    <ul class="meta-info">
      <li class="date-time"><?php the_time( 'j F Y' ) ?></li>
      <li class="categories"><?php echo get_the_category_list( ', ' ) ?></li>
      <li class="comments"><a href="#comments"><?php $cn = get_comments_number();
          echo $cn; ?> comment<?php echo $cn > 1 ? 'i' : 'o' ?></a></li>
    </ul>

    <div class="entry-content clearfix">

      <?php the_content(); ?>

      <div class="social-box">
        <div class="rating">
          <?php if ( function_exists( 'the_ratings' ) ) {
            the_ratings();
          } ?>
        </div>

        <?php if ( function_exists( 'sociable_html' ) ) {
          echo sociable_html();
        } ?>

      </div>

      <?php //wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

      <?php //the_tags( 'Tags: ', ', ', ''); ?>

      <?php //include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

    </div>

    <?php //edit_post_link('Edit this entry','','.'); ?>

  </article>

  <?php get_sidebar(); ?>

  <?php comments_template(); ?>

<?php endwhile; endif; ?>
<?php get_footer(); ?>