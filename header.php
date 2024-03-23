<?php
/**
 * Header Template
 * 
 * @package ThemeOne
 */

 ?>

<!DOCTYPE html>
 <html lang="<?php language_attributes(); ?>">
 <head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme One</title>
    <?php wp_head(); ?>
 </head>
 <body style="display: flex; flex-direction: column; min-height: 100%;">
   <header> 
      <?php get_template_part('template-parts/header/nav'); ?>
   </header>