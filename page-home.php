<?php
/*
 Template Name: Home Page
*/
?>


<?php get_header(); ?>


<h1 class="page-title"><?php the_title(); ?></h1>


<p> <!--Page's content here-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</p>

<?php get_footer(); ?>
