<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>

<div class="search-bar">
	<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div class="form-group">
            <input type="text" id="<?php echo $unique_id; ?>" class="form-control" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s">            
        </div>
        <!-- <div class="input-group-btn"> -->
            <button class="btn btn-primary" type="submit">
                <span>Search</span>
            </button>
        <!-- </div> -->
    </form>
</div>

<div class="sidebar-header">recent posts</div>
<hr class="main-horizontal-line" />
<div class="recent-post">
	<?php
        $args = array(
            'numberposts' => 5,
            'offset' => 0,
            'category' => 0,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'include' => '',
            'exclude' => '',
            'meta_key' => '',
            'meta_value' =>'',
            'post_type' => 'post',
            'post_status' => 'publish',
            'suppress_filters' => true
        );          
        
        $recent_posts = wp_get_recent_posts( $args, ARRAY_A );
        foreach( $recent_posts as $recent ){  
    ?>
    <div class="recent-posts">
    	<div class="recent-post-blog-img">
            <?php 
            	preg_match("#<img(.+?)src=(.+?)\/>#", $recent['post_content'], $matches); 
            	if (isset($matches[0])) {
            		echo $matches[0];
            	}else {
            		echo '<img src="http://18.188.229.2/oolaga/blog/wp-content/uploads/2018/09/No-image-available.jpg">';
            	}                
            ?>
        </div>
        <div class="recent-post-blog-header">    
            <?php             
            	echo '<p><a href="' . get_permalink($recent["ID"]) . '">' .substr($recent["post_title"], 0,30).'...</a></p>';   	
        	?>
        </div>
    </div>
    <?php
 		}
        wp_reset_query();
    ?>
</div>
