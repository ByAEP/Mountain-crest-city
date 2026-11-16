<?php get_header(); ?>

<main class="content-container">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php the_title( '<h1>', '</h1>' ); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>