<?php get_header(); ?>

<div class="grid grid-2-1 grid-top">
	<div id="contenu">
		<?php
		// boucle de base et content
		if (have_posts()){
			while (have_posts()){
				the_post();
				?>
				<article class="">
					<header>
						<h1><?php the_title(); ?></h1>
					</header>
					<?php the_content(); ?>
				</article>
				<?php
			}//endwhile
		}//endif
		?>
	</div>

	<?php
	get_sidebar();
	?>
</div>
<?php get_footer(); ?>
