<div id="comments">
  <?php if (post_password_required()) : ?>
  <p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'undolog_theme' ); ?></p>
</div><!-- #comments -->
<?php
/* Stop the rest of comments.php from being processed,
      * but don't kill the script entirely -- we still have
      * to fully load the template.
      */
return;
endif;
?>

<?php if ( have_comments() ) : ?>
  <h3 class="commenttitle"><?php comments_number( 'Nessun commento', 'Un commento', '% commenti' ) ?> a: &#8220;<?php the_title( '', '', false ) ?> &#8221;</h3>
  <ol class="commentlist">
    <?php foreach ( $comments as $comment ) : ?>
      <?php
      $authcomment  = ( $comment->user_id == 3 ) ? ' authcomment' : '';
      $classcomment = ( empty( $classcomment ) ) ? ( ( $authcomment == '' ) ? ' alt' : '' ) : '';
      ?>
      <li rel="<?php echo $comment->user_id ?>"
          class="<?php echo $classcomment; echo $authcomment ?>"
          id="comment-<?php comment_ID() ?>">
        <div class="content-avatar">
          <a target="_blank"
             href="<?php echo ( $comment->comment_author_url == "" ) ? 'http://www.gravatar.com' : $comment->comment_author_url ?>">
            <?php echo get_avatar( $comment->comment_author_email, "48" ) ?>
          </a>
        </div>
        <div class="comment-content">
          <small class="comment-date">
            <a href="#comment-<?php comment_ID() ?>"><?php echo get_comment_date( 'd M, Y' ) ?></a>
          </small>
          <cite><?php echo get_comment_author_link() ?>:</cite><?php //edit_comment_link('Modifica', ' | ', ''); ?>
          <?php if ( $comment->comment_approved == '0' ) : ?>
            <em>Il tuo commento &egrave; in attesa di moderazione.</em>
          <?php endif;
          echo comment_text() ?>
          <?php if ( comments_open() && $comment->comment_type != "trackback" && $comment->comment_type != "pingback" ) : ?>
            <div class="jqr2c_ul">
              <?php
              echo sprintf( '<a href="javascript:jqr2c_reply(\'comment-%s\');">Rispondi</a>', get_comment_ID() );
              echo sprintf( '<a href="javascript:jqr2c_quote(\'comment-%s\');">Quota</a>', get_comment_ID() );
              ?>
            </div>
          <?php endif; ?>
        </div>
      </li>
    <?php endforeach; /* end for each comment */ ?>
  </ol>
<?php else : // this is displayed if there are no comments so far ?>
  <h3 class="commenttitle">Non ci sono commenti per questo Post</h3>
  <?php if ( 'open' == $post->comment_status ) : ?>
  <?php else : // comments are closed ?>
    <p class="nocomments">I Commenti sono chiusi.</p>
  <?php endif; ?>
<?php endif; ?>

<?php if ( 'open' == $post->comment_status ) : ?>
  <h3 class="respond">Lascia un commento</h3>
  <?php if ( get_option( 'comment_registration' ) && !$user_ID ) : ?>
    <p>Devi eseguire il <a href="<?php echo
        get_option( 'siteurl' ) . '/wp-login.php?redirect_to=' . urlencode( get_permalink() ) ?>">login</a> per lasciare
       un commento.</p>
  <?php else : ?>
    <div id="comment-form" class="round-border">
      <form action="<?php echo get_option( 'siteurl' ); ?>/wp-comments-post.php" method="post" id="commentform">
        <?php if ( $user_ID ) : ?>
          <p>Sei connesso al sistema come <a href="<?php echo get_option( 'siteurl' ) . '/wp-admin/profile.php' ?>"><?php echo $user_identity ?></a> | <a href="<?php echo get_option( 'siteurl' ); ?>/wp-login.php?action=logout" title="Esegui il logout"></a></p>
        <?php else : ?>
          <p><input type="text"
                    name="author"
                    id="author"
                    value="<?php echo $comment_author; ?>"
                    size="22"
                    tabindex="1"/>
            <label for="author">
              <small>Nome</small>
            </label></p>
          <p><input type="text"
                    name="email"
                    id="email"
                    value="<?php echo $comment_author_email; ?>"
                    size="22"
                    tabindex="2"/>
            <label for="email">
              <small>Email</small>
            </label></p>
          <p><input type="text"
                    name="url"
                    id="url"
                    value="<?php echo $comment_author_url; ?>"
                    size="22"
                    tabindex="3"/>
            <label for="url">
              <small>Sito web</small>
            </label></p>
        <?php endif; ?>
        <div class="editable-tags">
          <small><strong>TAG XHTML PERMESSI</strong>:</small>
          <code style="height:30px;overflow:hidden;"><?php echo allowed_tags() ?></code>
          <small><strong style="margin-top:8px;display:block">INSERIMENTO CODICE:</strong></small>
				<pre><code>&lt;pre&gt;&lt;/pre&gt; // blocco generico
                   &lt;code&gt;&lt;/code&gt; // blocco generico
                   [cc_actionscript][/cc_actionscript] // Actionscript
                   [cc_actionscript3][/cc_actionscript3] // Actionscript 3
                   [cc_css][/cc_css] // CSS Style Sheet
                   [cc_html][/cc_html] // HTML
                   [cc_js][/cc_js] // Javascript
                   [cc_objc][/cc_objc] // Objective-C
                   [cc_php][/cc_objc] // PHP
                   [cc_sql][/cc_sql] // SQL</code></pre>
        </div>
        <p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

        <p class="aligncenter">
          <input name="submit" type="submit" id="submit" tabindex="5" value="Invia commento"/>
          <input type="hidden" name="comment_post_ID" value="<?php echo $id ?>"/>
        </p>
        <?php do_action( 'comment_form', $post->ID ); ?>
      </form>
    </div>
  <?php endif; ?>
<?php endif; ?>
</div>