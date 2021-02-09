<?php /*Template Name: Landing*/ ?>
<?php global $wp_query; ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="canonical" href="">
    <title>Mudanzas Pabón</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        
    </header>
</body>
</html>


<?php endwhile; ?>
<?php endif; ?>