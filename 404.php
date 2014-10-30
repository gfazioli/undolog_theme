<?php get_header(); ?>

<article class="post">

	<h2 class="entry-title">Pagina non trovata: errore 404</h2>

	<div class="entry-content">
		<p class="aligncenter"><img alt="Pagina non trovata" alt="Pagina non trovata" src="/wp-content/uploads/2009/08/Alert.png"/></p>

		<h3 class="aligncenter">Spiacente, ma la pagina che cercavi <b>non &egrave; presente</b> su questo server!</h3>
		<h3>Cosa fare?</h3>
		<ul>
			<li>Prova a verificare attentamente l'<strong>url</strong> presente nella barra degli indirizzi del tuo
				browser
			</li>
			<li>Usa lo strumento <strong>cerca</strong> (posto in alto a destra)</li>
			<li>Controlla la Sitemap qui sotto</li>
			<li><a href="/contatti">Contattami...</a></li>
		</ul>
		<?php include_once (TEMPLATEPATH . '/sitemap.inc.php'); ?>
	</div>
</article>

<?php get_sidebar('page'); ?>

<?php get_footer(); ?>