<?php get_header(); ?>
<?php global $wp_query; ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php the_title(); the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>