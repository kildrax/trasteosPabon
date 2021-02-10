<?php /*Template Name: Landing*/ ?>
<?php get_header(); ?>
<?php global $wp_query; ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <main>
            <section class="glass">
                <h1>testssss</h1>
            </section>
        </main>
        <div class="circle1"></div>
        <div class="circle2"></div>
        <?php get_footer(); ?>
    <?php endwhile; ?>
<?php endif; ?>