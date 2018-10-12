<?php
//The template for category  Single Our Staff
get_header();
?>
<!-- Container-->
<div class="container_1024 container-fluid my-4 padding_by_footer">

    <div class="row my-5">
        <!-- Loop when send  posts -->
        <?php if (have_posts()):while (have_posts()):the_post(); ?>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('post-thumbnails', array('class' => 'img-fluid d-block'));
                    }
                    ?>

                    <?php if(get_field('verify_cpa_license') && get_field('verify_cpa_license')==true):?>
                    <i class="icon-blue fa fa-check-circle mr-sm-5 mt-4" aria-hidden="true"><strong class="pl-3 text-network">Verify CPA License</strong></i><br>
                    <?php endif;?>
                    <i class="icon-blue fab fa-linkedin-in mr-sm-5 mt-2" aria-hidden="true" style="display: inline-flex;height: 25px"><strong class="pl-3 text-network"><?php the_field('linkedin'); ?></strong></i><br>
                    <i class="icon-blue fab fa-twitter mr-sm-5 mt-1" aria-hidden="true" style="display: inline-flex;height: 25px"><strong class="pl-3 text-network"><?php the_field('twitter'); ?></strong></i><br>
                    <i class="icon-blue fab fa-facebook-square mr-sm-5 mt-1" aria-hidden="true" style="display: inline-flex;height: 25px"><strong class="pl-3 text-network"><?php the_field('facebook'); ?></strong></i><br>

                </div>

               <div class="col-md-8 col-sm-8 col-xs-12 strong_staff staff-font xs-mt">
                    <div><strong class="font-16"><?php the_field('position_in_the_company'); ?></strong></div>
                    <div class="staff-font"><?php the_excerpt(); ?></div>

                    <?php
                      $cv_fields = array(
                        'education',
                        'professional_affiliations',
                        'hobbies_interests',
                        'clubs_other_memberships'
                      );
                      foreach ($cv_fields as $f) {
                        $o = get_field_object($f);
                        $l = $o['label'];
                        $v = $o['value'];
                        echo sprintf('<div class="mt-4 font-italic">%s</div>%s', $l, $v);
                      }
                     ?>
                </div>

                <?php
            endwhile;
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>
