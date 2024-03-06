<?php
/* Header Template
*@package Aquila
*/
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>   <?php wp_title();  ?>  </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body  <?php body_class(); ?> >
<?php 
if(function_exits('wp_body_open')){
    wp_body_open(); 
}
?>
     <header> Header  </header> 
    
