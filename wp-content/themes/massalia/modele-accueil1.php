<?php
/*
Template Name: modele-accueil
*/
 ?>

 <?php get_header(); ?>
<div class="grid grid-2-1 grid-top">
  <div class="">
    <?php //dernier article de la catégorie agenda
    $args=array(
      'showposts'=>1,
      'category_name'=>'agenda',
      'orderby'=>'date',
      'order'=>'desc'
    );
    $loop1= new WP_Query($args);
    ?>
    <?php //dernier article de la catégorie actualité
    $args=array(
      'showposts'=>1,
      'category_name'=>'actualite',
      'orderby'=>'date',
      'order'=>'desc'
    );
    $loop1= new WP_Query($args);
    ?>
  </div>
  <?php get_sidebar(); ?>

</div>
  <?php get_footer(); ?>
