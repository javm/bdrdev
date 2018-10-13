<?php
if( ! function_exists('get_recent_posts_by_category')) {
    function get_recent_posts_by_category($slug) {

      //Getting the category id
      $category = get_term_by('slug', $slug, 'category');
      $id = (int) $category->term_id;
      //$subcategories
      $categories = get_categories( array(
        'child_of'=> $id
      ) );
      $subcategories = array($id);
      foreach ( $categories as $category ) {
        $subcategories[] = $category->cat_ID;
      }
      //Getting the recent posts of that category
      $args = array(
        'category__in' => $subcategories,
        'posts_per_page' => 5);

     $posts = get_posts($args);
     $content = '';
     foreach ($posts as $recent) {
       $post_id = $recent->ID;
       $title = $recent->post_title;
       $url = esc_url(get_permalink($post_id));
       $excerpt = get_the_excerpt($post_id) ?: 'Blog Post';
       $thumbnail = '/wp-content/uploads/2018/10/blog_post_thumb.png';
       if (has_post_thumbnail($post_id)) {
         $thumbnail = get_the_post_thumbnail_url($post_id, array(70,70));
       }
       $img =
       '<div style="display: block; position: relative; float: left;">'.
        '<a href="'.$url.'">'.
          '<img class="f-left" src="'.$thumbnail.'" height="70px" width="70px"/>'.
        '</a>'.
       '</div>';
       $content .=  '<div class="col-md-12 col-sm-12 col-xs-12 f-left" style="padding: 0">'.
                    $img.
                    '<a href="'.$url.'" style="text-decoration: inherit; color: inherit">'.
                    '<div style="display: inline-block; position: relative; float: left; width: 70%; text-align: left;">'.
                    '<p class="font-16 lh-21 ml-15 ml-20">'.
                    '<span>'.$title.'</span>'.
                   '</p>'.
               '</div>'.
               '</a>'.
               '</div>'.
               '<hr class="f-left w-100">';
			}
      return $content;
    }
}
?>
