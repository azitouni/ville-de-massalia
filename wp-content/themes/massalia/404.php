<?php get_header(); ?>


	<div class="grid grid-2-1 grid-top">
		<div id="contenu">
			<h1>Page non trouvée</h1>

			<p> La page demandée n'existe pas. Pour continuer la navigation, vous pouvez:</p>
				<ul class="a">
					<li>aller à la <a href="<?php echo esc_url( home_url( '/' ) );?> ">page d'accueil</a> ,</li>
					<li>consulter le plan du site <a href="<?php echo esc_url( home_url( '/plan-du-site' ) );?> ">Plan du site</a>,</li>
          <?php
          // $id = get_page_by_title('Plan du site');//rend un objet
          // $link = get_permalink(90);
           if(get_post_status(90)=='publish')
             { $link = get_permalink( 90 );
           ?>
           <li>consulter le plan du site <a href="<?php $link  ?>">Plan du site by link</a>,</li> <?php } ?>
					<li>utiliser le formulaire de recherche.</li>
				</ul>
        <p>En cas de problèmes persistants, n'hésiter pas à nous contacter. Vous trouvez nos coordonnées sur le page <a href="<?php echo esc_url( home_url( '/contact' ) );?>">Contact</a>.</p>
		</div>


		<?php get_sidebar(); ?>

	</div>
  <?php get_footer(); ?>
