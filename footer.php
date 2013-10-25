<?php
/**
 * @package WordPress
 * @subpackage DFM-Strapit-Theme
 * @since Strapit 1.0
 */
?>

<!-- Footer plus JS and analytics. -->

		<footer class="source-org vcard copyright" role="contentinfo">
			<div class="container">
				<small>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></small>
				<p>Brought to you by the good folks at Twitter and Zurb and cobbled together by the UX team at Digital First Media.</p>
				<p>Original project links:<span class="divider"></span><a href="http://getbootstrap.com/">Bootstrap</a> <span class="divider">|</span> <a href="http://foundation.zurb.com/">Foundation</a><span class="divider">|</span><a href="http://sandbox.digitalfirstmedia.com/strapit/">Strapit Documentation</a></p>
			    <ul class="footer-links">
			      <li>Currently v2.0.1</li>
			      <!-- <li class="muted">&middot;</li>
			      <li><a href="https://github.com/jboho/strapit/issues?state=open">Issues</a></li>
			      <li class="muted">&middot;</li>
			      <li><a href="https://github.com/jboho/strapit/releases">Releases</a></li> -->
			    </ul>
			</div>
		</footer>

	</div><!-- end container -->

<!-- here comes the javascript -->

<!-- jQuery is called via the WordPress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

<!-- Strapit core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
<script src="http://platform.twitter.com/widgets.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/holder.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/application.js"></script>

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
	<?php wp_footer(); ?>	
</body>

</html>
