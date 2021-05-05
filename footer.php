<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package I2M_Theme
 */

?>

		<p>
			<a href="#" id="returnTop" class="go-top" title="Retour en haut">
				<i class="fas fa-long-arrow-alt-up fa-3x"></i><br/>
				<span class="d-none d-sm-block" style="writing-mode: sideways-lr;">Retour en haut&nbsp</span>
			</a>
		</p>
	</section>
</div><!-- content -->

<footer class="page-footer font-small mdb-color pt-4">
	<div class="container text-center text-md-left">
		<div class="row text-center text-md-left mt-3 pb-3">
			<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
				<h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
				<p>Technopôle Château-Gombert 39, rue Frédéric Joliot-Curie
					13453 MARSEILLE Cedex 13<br/><br/>
					Téléphone : (+33) (0)4 13 55 14 00<br/>
					Fax : (+33) (0)4 13 55 14 02</p>
			</div>
			<hr class="w-100 clearfix d-md-none">
			<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
				<h6 class="text-uppercase mb-4 font-weight-bold">Offres d'emplois</h6>
				<p>
				<a href="https://www.i2m.univ-amu.fr/mylogin" target="_blank" class="text-muted">Connexion</a>
				</p>
				<p>
				<a href="https://www.i2m.univ-amu.fr/en/" 	  target="_blank" class="text-muted">English</a>
				</p>
			</div>
			<hr class="w-100 clearfix d-md-none">
			<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
				<h6 class="text-uppercase mb-4 font-weight-bold">Tutelles</h6>
				<p><img src="<?php echo get_template_directory_uri() . "/assets/img/logo_AMU.svg" ?>" alt="logo AMU" width="70">
				<a href="https://www.univ-amu.fr"     	  	   target="_blank" class="text-muted"> Aix-Marseille Université</a>
				</p>
				<p><img src="<?php echo get_template_directory_uri() . "/assets/img/logo_Centrale.svg" ?>" alt="logo Centrale Marseille" width="70">
				<a href="https://www.centrale-marseille.fr"    target="_blank" class="text-muted">Centrale Marseille</a>
				</p>
				<p><img src="<?php echo get_template_directory_uri() . "/assets/img/logo_CNRS.svg" ?>" alt="logo CNRS" width="30">
				<a href="https://www.cnrs.fr/fr/page-daccueil" target="_blank" class="text-muted">CNRS</a>
				</p>
			</div>
			<hr class="w-100 clearfix d-md-none">
			<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
				<h6 class="text-uppercase mb-4 font-weight-bold">Partenaires</h6>
				<p><a href="https://amidex.univ-amu.fr" 	   		   target="_blank" class="text-muted">AMIDEX</a></p>
				<p><a href="https://www.agence-nationale-recherche.fr" target="_blank" class="text-muted">ANR</a></p>
				<p><a href="https://www.fr-cirm-math.fr" 	   		   target="_blank" class="text-muted">CIRM</a></p>
				<p><a href="http://frumam.cnrs-mrs.fr" 			       target="_blank" class="text-muted">FRUMAM</a></p>
				<p><a href="https://labex-archimede.univ-amu.fr" 	   target="_blank" class="text-muted">Institut Archimède</a></p>
			</div>
		</div>
		<hr class="no-margin">
	</div><!-- Grid row -->

	<div id="colophon" class="site-footer">
		<div class="site-info text-center">
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Institut de Mathématiques 2020 - Marseille', 'i2m_theme' ));
			?>
			<span class="sep"> | </span>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'i2m_theme' ) ); ?>">
				<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Fièrement propulsé par %s', 'i2m_theme' ), 'WordPress' );
				?>
			</a>
		</div><!-- .site-info -->
	</div><!-- #colophon -->
</footer><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
