<?php
if( ! function_exists('get_recent_posts_by_category')) {
    function get_recent_posts_by_category($slug) {

      //Getting the category id
      $category = get_term_by('slug', $slug, 'category');
      $id = (int) $category->term_id;
      //Getting the recent posts of that category
      $posts = wp_get_recent_posts(array('numberposts' => 5, 'category' => $id));

      $prods = "";
      echo $prods;
			foreach ($posts as $recent) {
        $post_id = $recent->ID;
				$title = $recent->post_title;
				$url = esc_url(get_permalink($post_id));
				$excerpt = get_the_excerpt($post_id) ?: 'Blog Post';
				$uploads = wp_upload_dir();
				$u_url = $uploads['url'];
				$thumbnail =
					get_the_post_thumbnail_url($post_id, array(70,70)) ?: $u_url.'/blog_post_thumb.png';
				$img = '<a href="'.$url.'">'.
					'<img src="'.$thumbnail.'" height="auto" width="auto"/>'.
					'</a>';
				$prods .= sprintf(
				 '<div class="row">
				 %s
				 <a href="%s"><p>%s</p></a>
				 </div>
         <hr>',
					$img,
					$url,
				  $title);
			}
			return $prods;
    }
}
?>
