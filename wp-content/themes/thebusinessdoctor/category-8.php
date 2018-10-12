<?php
//The template for category  Tax Assistence
get_header();
?> 
<!-- Container-->
<div class="container-fluid my-5 mx-5 padding_by_footer "  style="min-height: 500px">
   
    <div class="row my-5">
        <!-- Loop when send  posts -->
        <?php if (have_posts()):while (have_posts()):the_post(); ?>
                <div class="col-12 col-sm-6 col-md-4 mt-3">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('post-thumbnails', array('class' => 'rounded-circle img-fluid mx-auto d-block'));
                    }
                    ?>
                    <div class="mt-3">
                        <strong><?php the_title(); ?></strong>

                        <?php the_excerpt(); ?>
                    </div>
                </div>



                <?php
            endwhile;
        endif;
        ?>
    </div>
</div>
<?php get_footer(); ?>
