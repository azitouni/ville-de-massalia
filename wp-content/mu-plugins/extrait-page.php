<?php
/*
MU Plugin: extrait_page
Description: ajouter un extrait à chaque page
Version : 02/12/2016
*/

function add_excerpt_support_for_pages(){
	add_post_type_support('page','excerpt');
}
add_action('init','add_excerpt_support_for_pages')
 ?>
