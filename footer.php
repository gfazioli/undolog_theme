<br style="clear:both;" />
</div>
<footer id="footer" class="source-org vcard copyright">
	<?php dynamic_sidebar('sidebar-footer') ?>
	<div class="facebook">
		<script type="text/javascript" src="http://static.ak.connect.facebook.com/connect.php/it_IT"></script>
		<script type="text/javascript">FB.init("50ba17a88242d2784622cf62d37f0480");</script>
		<fb:fan profile_id="113539545325263" stream="0" connections="12" logobar="1" width="240" height="328"></fb:fan>
		<p style="text-align:center;margin-bottom:16px"><a href="http://www.facebook.com/pages/Undolog/113539545325263">Undolog</a> on Facebook</p>
		<p style="text-align:center"><a href="http://feeds2.feedburner.com/undolog"><img src="http://feeds2.feedburner.com/~fc/undolog?bg=ee8800&amp;fg=ffffff&amp;anim=1" height="26" width="88" style="border:0" alt="" /></a></p>
	</div>
	<div class="footer-content">
		<p><a target="_blank" class="notarget" rel="license" href="http://creativecommons.org/licenses/by-nc-nd/2.5/it/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-nd/2.5/it/80x15.png"/></a></p>
		<p>Questa opera &egrave; pubblicata sotto una

		<a target="_blank" rel="license" href="http://creativecommons.org/licenses/by-nc-nd/2.5/it/">Licenza Creative Commons</a></p>
		<p><?php echo get_bloginfo('name').' utilizza <a href="http://wordpress.org/">WordPress</a> | <a href="' . get_bloginfo('rss2_url') . '">Articoli (RSS)</a> | <a href="' . get_bloginfo('comments_rss2_url') . '">Commenti (RSS)</a>' ?> - Designed &amp; Developed by Giovambattista Fazioli</p>

		<p>Hosting on<br/><a class="notarget" title="Amazon EC2" target="_blank" href="http://aws.amazon.com/ec2/">Amazon EC2</a></p>

	</div>
</footer>

<?php wp_footer(); ?>


<!-- here comes the javascript -->

<!-- jQuery is called via the Wordpress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/scrollspy.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>
<?php if (is_single() && comments_open()) :	?>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/_/js/jqr2c.js"></script>
<?php endif; ?>

<!-- Asynchronous google analytics; this is the official snippet.
	 Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.
	 
<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->
	
</body>

</html>
