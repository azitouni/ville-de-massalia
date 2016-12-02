<?php
/*
MU Plugin: get_logo
Description: envoie un lien si on est pas sur la page d'accueil
Version : 02/12/2016
*/

/* génération code du logo */
function get_logo(){
	if (is_front_page()) :
		$custom_logo_id = get_theme_mod('custom_logo');
		$image = wp_get_attachment_image( $custom_logo_id ,'full');// full: c'est l'original
	else :
		$image = get_custom_logo();
	endif;
	return $image;
}

 ?>
