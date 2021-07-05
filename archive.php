<?php get_header();?>
<section class="jumbo_section">
        <div class="w_100">
            <div class="jumbo_cont jumbo_news">
                <div class="jumbo_overlay"></div>
                <div class="jumbo_des">
                    <h3>    
                        NEWS <br>
                        <span>お知らせ</span>
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <section class="news_section_2 w_100">
        <div class="container">
            <div class="title_filter">
                <?php dynamic_sidebar('blog-category'); ?>  
                <!-- <div class="tab">
                    <button class="tablinks active" onclick="openCity(event, 'cont_1')">All</button>
                    <button class="tablinks" onclick="openCity(event, 'cont_2')">News</button>
                </div> -->
            </div>
            <!-- 1st Content -->
            <div id="cont_1" class="outer_cont tabcontent">
                <div class="inner_cont">

                    <?php
                        $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
                        $current_category = single_cat_title("", false);
                        
                        $args = array(
                            'post_type' => 'post',
                            'post_status'=>'publish',
                            'posts_per_page' => 9,
                            'paged' => $paged,
                            'category_name' => $current_category,
                        );
                        
                        $the_query = new WP_Query($args);
                    ?>
                        
                    <?php if ( $the_query->have_posts() ) : ?>
                            
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <!-- Row -->
                        <div class="thumbnail">
                            <a href="<?php echo get_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                            </a>
                            <div class="inner_content">
                                <p class="border_b"><?php the_title();?></p>
                                <p class="date"><i class="fas fa-calendar-day"></i> &nbsp;<?php echo get_the_date('Y.m.d'); ?></p>
                                <p class="bold"><?php echo get_the_excerpt(); ?></p>
                                <div class="btn_read">
                                    <a href="<?php echo get_permalink(); ?>">Read More →</a>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                        
                    <?php endif; ?>

                </div>
                <div class="info_list_nav">
                    <div class="a-pagination-cont">
                        <?php echo easy_wp_pagenavigation( $the_query ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>