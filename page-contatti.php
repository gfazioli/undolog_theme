<?php

get_header();

if( isset( $_POST[ 'send' ] ) && 'send' == $_POST[ 'send' ] ) {

  $name_of_contact = isset( $_POST[ 'name_of_contact' ] ) ? $_POST[ 'name_of_contact' ] : false;
  $email           = isset( $_POST[ 'email' ] ) ? $_POST[ 'email' ] : false;
  $what            = isset( $_POST[ 'what' ] ) ? $_POST[ 'what' ] : false;
  $subject         = isset( $_POST[ 'subject' ] ) ? $_POST[ 'subject' ] : false;
  $body            = isset( $_POST[ 'body' ] ) ? $_POST[ 'body' ] : false;

  $message = sprintf( 'Da: %s %s', $name, $email ) . "\n\n";
  $message .= sprintf( 'Per: %s', $what ) . "\n\n";
  $message .= $body;

  $result = wp_mail( 'giovambattista.fazioli@gmail.com', $subject, $message );

  function undolog_theme_mail_sent()
  {
    ?>
    <div class="undolog_theme_mail_sent">
      <h3><?php _e( 'Thanks') ?></h3>
      <p><?php _e( 'Your mail has been sent.') ?></p>
    </div>
    <?php
  }
  add_action( 'undolog_theme_mail_sent', 'undolog_theme_mail_sent' );

}

?>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  <article class="post" id="post-<?php the_ID(); ?>">
    <h2 class="entry-title"><?php the_title(); ?></h2>

    <div class="entry-content">

      <?php do_action( 'undolog_theme_mail_sent' ) ?>

      <form method="post" action="">

        <input type="hidden" name="send" value="send"/>

        <div>
          <label><?php _e( 'Name' ) ?>:
            <input type="text" name="name_of_contact" required="required"/>
          </label>
        </div>

        <div>
          <label><?php _e( 'Email' ) ?>:
            <input type="email" name="email" required="required"/>
          </label>
        </div>

        <div>
          <label><?php _e( 'For What?' ) ?>:
            <select name="what">
              <option><?php _e( 'Information' ) ?></option>
              <option><?php _e( 'Preventivo' ) ?></option>
              <option><?php _e( 'Plugin Develop' ) ?></option>
              <option><?php _e( 'Theme Develop' ) ?></option>
              <option><?php _e( 'Support' ) ?></option>
            </select>
          </label>
        </div>

        <div>
          <label><?php _e( 'Subject' ) ?>:
            <input type="text" name="subject" required="required"/>
          </label>
        </div>

        <div>
          <textarea name="body"></textarea>
        </div>

        <div>
          <input type="submit" value="<?php _e( 'Send' ) ?>"/>
        </div>

      </form>

    </div>
  </article>
  <?php get_sidebar( 'page' ); ?>
<?php endwhile; endif; ?>
<?php get_footer();