<?php get_header(); ?>

<div class="grid grid-2-1 grid-top">
	<div id="contenu">
		<section>
			<header>
				<?php //titre de la catégorie  ?>
				<h1>La liste des articles de : <?php the_author(); ?></h1>
			</header>
			<?php //boucle sur articles avec leur titre, image, à la une et extrait ?>
			<?php
			// boucle de base et content
			if (have_posts()){
				while (have_posts()){
					the_post();
					?>
					<article class="bloc-lien mb2em clearfix">
						<h2><a href="<?php the_permalink(); ?>"><?php the_author(); ?></a></h2>

						<div class="left w50p">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="right w50p excerpt">
							<?php the_excerpt(); ?>
						</div>
					</article>
					<?php
				}//endwhile
			}//endif
			?>
		</section>
		<?php the_posts_pagination(array(
					'prev_text'=>'Page Précédente',
					'next_text'=>'Page Suivante'
		)) ?>
	</div>
	<?php
	get_sidebar();
	?>
</div>
<?php get_footer(); ?>
