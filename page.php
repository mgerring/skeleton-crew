<?php get_header(); ?>
<div id="main" role="main">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
    <article <?php post_class(); ?>>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </article>
    <?php endwhile; endif; ?>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>