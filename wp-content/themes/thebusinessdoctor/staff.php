<?php
//The template for category  Out Staff
get_header();
?>
<!-- Container-->
<div class="container-fluid my-4 mx-5 padding_by_footer" style="min-height: 500px">
  <div class="text-justify text-content-decorator">
    <div class="container-fluid my-3 mx-4 padding_by_footer ">
      <div class="row my-5">
        <!-- Loop when send  posts -->
        <?php if (have_posts()):while (have_posts()):the_post(); ?>
        <div class="col-xs-12 col-sm-6 col-md-4">
        <?php
        if (has_post_thumbnail()) {
          the_post_thumbnail(array(242, 304), array('class' => 'img-fluid d-block wp-post-image'));
        } else {
        echo '<img width="242" height="304" src="/wp-content/uploads/2018/10/placeholder_243x301.png" class="img-fluid d-block wp-post-image img-responsive center-block" width="auto" />';
        } ?>
          <div class="mt-3 ">
           <p class="font-16 bold"><?php the_title(); ?><br>
             <?php if(get_field('position_snippet')):?>
              <?php the_field('position_snippet'); ?></p>
             <?php endif?>
           <div class="mt-4"><strong><a class="font-16" href="<?php  echo get_permalink(); ?>">Read Full Bio</a></strong></div>
          </div>
        </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
  </div>
  </div>
</div>
<?php get_footer(); ?>
