<?php

/* Template Name: Blog Page */

get_header();?>

<?php
            $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
            
            $args = array(
                'post_type' => 'post',
                'post_status'=>'publish',
                'posts_per_page' => 9,
                'paged' => $paged,
            );
            
            $the_query = new WP_Query($args);
        ?>

<?php if ( $the_query->have_posts() ) : ?>

<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<!-- BLOG POST CONTENT -->

<?php endwhile; ?>
<?php echo easy_wp_pagenavigation($the_query); ?>
<?php endif; ?>

<?php get_footer();?>