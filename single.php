<?php get_header(); ?>
<div id="main" role="main" class="clearfix">
    		<?php if (have_posts()): while (have_posts()): the_post(); ?>
		    <article <?php post_class(); ?>>
				<h2 class="fancy"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="meta">
					By <span class="author"><?php the_author_link(); ?></span> &middot; posted <span class="date"><?php the_time("F j, Y"); ?></span>
				</div>
		        <?php the_content(); ?>
		    </article>
		    <?php endwhile; endif; ?>
			<?php comments_template(); ?>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>