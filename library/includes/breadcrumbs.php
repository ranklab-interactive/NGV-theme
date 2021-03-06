<ul class="breadcrumbs inline-list" id="bread-wrapper">
<?php // Breadcrumb navigation
    if (is_page() && !is_front_page() || is_single() || is_category()) {
        echo '<li id="breadcrumb">';
        echo '<a id="home-bread" href="'.get_bloginfo('url').'"></a>';
 		if (is_single()) {
        	echo '<li><a href="'.get_bloginfo('url').'/blog/">Blog</a></li>';	
        }else{
        
        }

        if (is_page()) {
            $ancestors = get_post_ancestors($post);
 
            if ($ancestors) {
                $ancestors = array_reverse($ancestors);
 
                foreach ($ancestors as $crumb) {
                	
                    echo '<li><a href="'.get_permalink($crumb).'">'.get_the_title($crumb).'</a></li>';
                    
                }
            }
        }
 
        if (is_single('blog_posts')) {
            $category = get_the_category();
            echo '<li><a href="'.get_category_link($category[0]->cat_ID).'">'.$category[0]->cat_name.'</a></li>';
        }
 
        if (is_category()) {
            $category = get_the_category();
            echo ''.$category[0]->cat_name.'';
        }
 
        // Current page
        if (is_page() || is_single()) {
            echo '<li>'.get_the_title().'</li>';
            
        }
        echo '</li>';
    } elseif (is_front_page() || is_home()) {
        // Front page or Home
        echo '<li id="breadcrumb">';
        echo '<a id="home-bread" href="'.get_bloginfo('url').'"></a>';
        echo '</li>';
        echo '<li>';
        echo 'Blog';
        echo '</li>';
    }
?>
</ul><!-- end bread-wrapper -->