<?php get_header(); ?>
<div class="grid grid-2-1 grid-top">


	<div id="contenu">

	<section>

		<h1>Résultats de recherche pour "<?php echo get_search_query(); ?>"</h1>
					<?php
					if(have_posts()):
						while(have_posts()):
						the_post();
					?>
					<article>
							<header>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							</header>

							<div>
								<?php the_excerpt(); ?>
							</div>
						</article>
						<?php

							endwhile;
						endif;
						the_posts_pagination(array('prev_text'=>'Page précédente',
													'next_text'=>'Page suivante'));
						?>
	</section>

	</div>
</div>
