<?php get_header(); ?>

  <div class="article colMedium">
    <h2>Ultimi articoli</h2>
    <?php
    $noduplicate = array();
    $args        = array( 'numberposts' => 6 );
    $lastposts   = get_posts( $args );
    foreach( $lastposts as $post ) : setup_postdata( $post ); ?>
      <?php $noduplicate[ ] = $post->ID; ?>
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <ul class="meta-info">
        <li class="date-time"><?php the_time( 'j F Y' ) ?></li>
        <li class="categories"><?php echo get_the_category_list( ', ' ) ?></li>
        <li class="comments"><a href="<?php the_permalink(); ?>#comments"><?php echo get_comments_number() ?>
            commenti</a></li>
      </ul>
      <div class="column-index">
        <p><?php the_content( '' ) ?></p>

        <p class="more"><a href="<?php the_permalink(); ?>">Continua...</a></p>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="article colLittle">
    <h2>Snippets</h2>
    <?php
    $max       = 4;
    $index     = 0;
    $args      = array( 'numberposts'   => $max,
                        'category_name' => 'very-short-snippet',
                        'post__not_in'  => $noduplicate );
    $lastposts = get_posts( $args );
    foreach( $lastposts as $post ) : setup_postdata( $post ); ?>
      <?php $noduplicate[ ] = $post->ID; ?>
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <div class="column-index">
        <p><?php the_excerpt() ?></p>

        <p class="more"><a href="<?php the_permalink(); ?>">Continua...</a></p>
      </div>
    <?php endforeach; ?>

    <h2>Tips & Tricks</h2>
    <?php
    $max       = 4;
    $index     = 0;
    $args      = array( 'numberposts' => $max, 'category_name' => 'very-short-trick', 'post__not_in' => $noduplicate );
    $lastposts = get_posts( $args );
    foreach( $lastposts as $post ) : setup_postdata( $post ); ?>
      <?php $noduplicate[ ] = $post->ID; ?>
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <div class="column-index">
        <p><?php the_excerpt() ?></p>

        <p class="more"><a href="<?php the_permalink(); ?>">Continua...</a></p>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="article colLittle last">
    <h2>Tutorials</h2>
    <?php
    $max       = 8;
    $index     = 0;
    $args      = array( 'numberposts' => $max, 'category_name' => 'tutorials', 'post__not_in' => $noduplicate );
    $lastposts = get_posts( $args );
    foreach( $lastposts as $post ) : setup_postdata( $post ); ?>
      <?php $noduplicate[ ] = $post->ID; ?>
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <div class="column-index">
        <p><?php the_excerpt() ?></p>

        <p class="more"><a href="<?php the_permalink(); ?>">Continua...</a></p>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="homePageHorizontalSeparator"></div>

  <div class="fourColumns">
    <div class="article colLittle">
      <h2>Objective-C</h2>
      <?php
      $max       = 5;
      $index     = 0;
      $args      = array( 'numberposts'   => $max,
                          'category_name' => 'objective-c-sviluppo',
                          'post__not_in'  => $noduplicate );
      $lastposts = get_posts( $args );
      foreach( $lastposts as $post ) : setup_postdata( $post ); ?>
        <?php $noduplicate[ ] = $post->ID; ?>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <?php endforeach; ?>
    </div>

    <div class="article colLittle">
      <h2>PHP</h2>
      <?php
      $index     = 0;
      $args      = array( 'numberposts' => $max, 'category_name' => 'php', 'post__not_in' => $noduplicate );
      $lastposts = get_posts( $args );
      foreach( $lastposts as $post ) : setup_postdata( $post ); ?>
        <?php $noduplicate[ ] = $post->ID; ?>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <?php endforeach; ?>
    </div>

    <div class="article colLittle">
      <h2>Javascript</h2>
      <?php
      $index     = 0;
      $args      = array( 'numberposts' => $max, 'category_name' => 'javascript', 'post__not_in' => $noduplicate );
      $lastposts = get_posts( $args );
      foreach( $lastposts as $post ) : setup_postdata( $post ); ?>
        <?php $noduplicate[ ] = $post->ID; ?>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <?php endforeach; ?>
    </div>

    <div class="article colLittle last">
      <h2>CSS</h2>
      <?php
      $index     = 0;
      $args      = array( 'numberposts' => $max, 'category_name' => 'css', 'post__not_in' => $noduplicate );
      $lastposts = get_posts( $args );
      foreach( $lastposts as $post ) : setup_postdata( $post ); ?>
        <?php $noduplicate[ ] = $post->ID; ?>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <?php endforeach; ?>
    </div>
  </div>

<?php get_footer();
