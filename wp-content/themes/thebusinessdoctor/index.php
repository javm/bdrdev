<?php
//The main template file
get_header();
?> 

<!-- Container-->
<div class="container-fluid  my-5 mx-5" style="min-height: 500px">
    <div class="row">

        <div class="col-12">
            <!-- Loop when send  posts -->
            <?php if (have_posts()):while (have_posts()):the_post(); ?>
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('post-thumbnails', array('class' => 'img-fluid'));
                    }
                    ?>
                    <div class="text-justify text-content-decorator">
                    <?php the_content() ?> 
                    </div>
                    <?php
                endwhile;
            endif;
            ?> 
        </div>
    </div>

</div>
<?php get_footer(); ?>