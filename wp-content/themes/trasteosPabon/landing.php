<?php /*Template Name: Landing*/ ?>
<?php global $wp_query; ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>




<?php endwhile; ?>
<?php endif; ?>