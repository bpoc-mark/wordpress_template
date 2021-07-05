<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title');?></title>
  
    <?php wp_head();?>	
    <?php wp_footer(); ?>
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/release/css/style.css">

</head>
<body <?php body_class(); ?>>
    
<main>
    <div class="page__header">
        <p class="yugo_b" style="font-size: 54px;">お客様の声</p>
    </div>
    <div class="page__content">