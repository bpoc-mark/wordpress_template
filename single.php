<?php get_header();?>
    <h1>single page</h1>
    <section class="single_section_2 w_100">
        <div class="container">
            <div class="inner_cont">
                <?php if(have_posts() ): while(have_posts () ): the_post();?>

                    <?php
                        $terms = get_the_terms( $post->ID, 'job_type' ); 
                        $jobcat = "";
                        foreach($terms as $term) {
                            $jobcat = $term->name;
                        }
                        
                        if($jobcat == "正社員"):
                    ?>
                        <table style="width: 700px; text-align: left; border: 1px solid;border-collapse: collapse;">
                            <tr>
                                <th style="background-color: #ccc;border: 1px solid #dddddd;padding: 8px;">Project title</th>
                                <th style="border: 1px solid #dddddd;padding: 8px;"><?php the_field('project_title');?><br></th>
                            </tr>
                            <tr>
                                <td style="background-color: #ccc;border: 1px solid #dddddd;padding: 8px;">Recommended age</td>
                                <td style="border: 1px solid #dddddd;padding: 8px;"><?php the_field('recommended_age');?><br></td>
                            </tr>
                            <tr>
                                <td style="background-color: #ccc;border: 1px solid #dddddd;padding: 8px;">Salary range</td>
                                <td style="border: 1px solid #dddddd;padding: 8px;"><?php the_field('salary_range');?><br></td>
                            </tr>
                            <tr>
                                <td style="background-color: #ccc;border: 1px solid #dddddd;padding: 8px;">Position</td>
                                <td style="border: 1px solid #dddddd;padding: 8px;"><?php the_field('position');?><br></td>
                            </tr>
                            <tr>
                                <td style="background-color: #ccc;border: 1px solid #dddddd;padding: 8px;">Job Summary</td>
                                <td style="border: 1px solid #dddddd;padding: 8px;"><?php the_field('job_summary');?><br></td>
                            </tr>
                        </table>
                    <?php endif;?>
                    <?php
                        $terms = get_the_terms( $post->ID, 'job_type' ); 
                        $jobcat = "";
                        foreach($terms as $term) {
                            $jobcat = $term->name;
                        }
                        
                        if($jobcat == "フリーランス"):
                    ?>
                        <table style="width: 700px; text-align: left; border: 1px solid;border-collapse: collapse;">
                            <tr>
                                <th style="background-color: #ccc;border: 1px solid #dddddd;padding: 8px;">Project title</th>
                                <th style="border: 1px solid #dddddd;padding: 8px;"><?php the_field('project_title');?><br></th>
                            </tr>
                            <tr>
                                <td style="background-color: #ccc;border: 1px solid #dddddd;padding: 8px;">Features</td>
                                <td style="border: 1px solid #dddddd;padding: 8px;"><?php the_field('features');?><br></td>
                            </tr>
                            <tr>
                                <td style="background-color: #ccc;border: 1px solid #dddddd;padding: 8px;">Compensation range</td>
                                <td style="border: 1px solid #dddddd;padding: 8px;"><?php the_field('compensation_range');?><br></td>
                            </tr>
                            <tr>
                                <td style="background-color: #ccc;border: 1px solid #dddddd;padding: 8px;">Contract type</td>
                                <td style="border: 1px solid #dddddd;padding: 8px;"><?php the_field('contract_type');?><br></td>
                            </tr>
                            <tr>
                                <td style="background-color: #ccc;border: 1px solid #dddddd;padding: 8px;">Job Summary</td>
                                <td style="border: 1px solid #dddddd;padding: 8px;"><?php the_field('job_summary');?><br></td>
                            </tr>
                        </table>
                    <?php endif;?>

                    <?php endwhile; ?>
                <?php else: endif;?>
            </div>
        </div>
    </section>
<?php get_footer();?>