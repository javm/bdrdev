<?php
//The template for displaying all single posts and attachments
get_header();
?>
<?php if(is_front_page()) : ?>
<div id="request-section" class="container-fluid blue-bg">
	<div class="px-5 request bolder">
	<a href="/contact">
	<i class="fa fa-angle-right" style="font-size: 28px;"></i> Request a consultation
	</a>
	
	</div>
</div>
<?php endif; ?>

<!-- Container-->
<div class="container-fluid  my-5 mx-5 padding_by_footer"  style="min-height: auto;">
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
