
<?php
//The template for displaying pages
get_header();
?> 
<!-- Container-->
<div class="container-fluid my-5 mx-5 padding_by_footer" style="min-height: 500px">

    <!-- Loop when send  posts -->
        <?php if (have_posts()):while (have_posts()):the_post(); ?>
            <div class="text-justify text-content-decorator">
            <?php the_content() ?> 
            </div>
    <?php endwhile;
endif; ?>
</div>
<?php get_footer(); ?>