<?php
//The template for category  Blogs
get_header();
?>
<!-- Container-->
<div class="container-fluid my-5 mx-5 padding_by_footer "  style="min-height: 500px">
    <div class="row my3">
        
          <!-- Loop when send  posts -->
        <?php if (have_posts()):while (have_posts()):the_post(); ?>
          <div class="col-12 col-sm-6 col-md-4 mt-3">
              <div class="card">
                  <!-- card image top -->
                  <a href="<?php the_permalink();?>"><?php if (has_post_thumbnail()){
                    the_post_thumbnail('post-thumbnails', array('class'=>'card-img-top img-fluid'));
                  }?>
                  </a>
                  <div class="card-block">
                      <a href="<?php the_permalink();?>"> <h4 class="card-title"><?php the_title();?></h4></a>
                      <p class="card-text"><?php the_excerpt();?></p>
                  </div>
                  
                  <div class="card-footer">
                      <small class="text-muted"><?php echo get_the_date();?> / <?php the_category(', ');?> / <?php the_author();?></small>
                  </div>
              </div>
              
          </div>
            
        <?php endwhile;
        endif;
        ?>  
    </div>
    
</div>
<?php get_footer(); ?>