<?php get_header(); ?>

	<?php if ( have_posts() ) : ?>
		
		<?php while ( have_posts() ) : the_post(); ?>
			
			<?php if (in_category('projects')) { ?>
			   <div class="projects">
			<?php } else { ?>
			   <div class="weblog">
			<?php } ?>
			
			<h2><?php the_title(); ?></h2>
			<span class="date">
			<?php if (in_category('weblog')) {
				the_time('j M Y');
			} else {
				the_time('M Y');
			}?>
			</span>
			<?php remove_filter ('the_content', 'wpautop'); ?> <!-- Removes <p> tags when inserting content -->
			<?php the_content(); ?>

			<!--<span class="comment"><?php //comments_number('NO COMMENTS', '1 COMMENT', '% COMMENTS' );?></span>-->
			
			</div>
		<?php endwhile; ?>

	<?php else : ?>

		<p>Zero posts</p>

	<?php endif; ?>
	
	<div class="paging next"><?php next_posts_link('Next Page', 0); ?></div>
	<div class="paging prev"><?php previous_posts_link('Previous Page', 0); ?></div>
<?php get_footer(); ?>