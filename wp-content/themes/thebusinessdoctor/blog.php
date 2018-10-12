<?php
include  get_template_directory() . '/inc/helpers.php';
//The template for category  Blogs
get_header();
?>
<!-- Container-->
<div class="container-fluid my-5 mx-5 padding_by_footer "  style="min-height: 500px">
  <div class="row my-4">
	   <div class="col-md-8 col-sm-8 col-xs-12 text-justify" style="padding-right: 4rem !important">
          <!-- Loop when send  posts -->
        <?php if (have_posts()):while (have_posts()):the_post(); ?>
           <div class="mb-50">
            <a href="<?php the_permalink();?>">
              <?php if (has_post_thumbnail()){
              the_post_thumbnail(array(426, 352));
            }else{
              echo '<img class="img-fluid d-block wp-post-image" src="/wp-content/uploads/2018/10/blog_post.png" width="auto" height="auto" />';
            }
            ?>
          </a>

            <h2 class="font-16 fw-100 mt-50 uppercase">
              <?php $categories = get_the_category();
                $cat = $categories[0]->name;
                echo $cat;
              ?>
            </h2>
			      <hr />
            <h3 class="bold"><a href="<?php the_permalink();?>" style="text-decoration: inherit; color: inherit"><?php the_title();?></a></h3>
			      <p><?php echo get_the_date('F j, Y | g:iA');?></p>
			      <p class="font_16"><?php the_excerpt();?></p>
			      <a href="<?php the_permalink();?>">
			           <i class="fa fa-angle-right font-16 font-w700"></i> READ
			      </a>
		        </div>
        <?php endwhile;
        endif;
        ?>
      </div>

      <div class="col-md-4 col-sm-4 col-xs-12 text-justify">
          <h3 class="font-16">Recent Posts</h3>
            <?php
              echo get_recent_posts_by_category('blog');
              ?>
      </div>
  </div>
</div>
<?php get_footer(); ?>
