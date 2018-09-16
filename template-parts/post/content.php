<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
    	if ( is_sticky() && is_home() ) :
    		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
    	endif;
	?>
    <!-- Blog Post Starts-->    
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <div class="single-blog">
            <!-- Post Title -->
            <?php
                if ( is_single() ) { 
                    the_title( '<div class="post-header">', '</div>' );
                } elseif ( is_front_page() && is_home() ) { 
                    the_title( '<div class="post-header"><a style="color:#000;" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></div>' );
                } else { 
                //  the_title( '<div class="post-header"><a href="' . esc_url( get_permalink() ) . '"      rel="bookmark">', '</a></div>' );
                    $title = get_the_title(); // This must be!, because this is the return - the_title would be echoed
                    $title_array = explode(' ', $title);
                    $count = count($title_array);
                    //echo $count;
                    if ($count > 7) {
                        $trimmed_title = $title_array[0].' '.$title_array[1].' '.$title_array[2].' '.$title_array[3].' '.$title_array[4].' '.$title_array[5].' '.$title_array[6].'...';

                        echo '<div class="post-header"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">'.$trimmed_title.'</a></div>';
                    } else {
                        $trimmed_title = $title_array[0].' '.$title_array[1].' '.$title_array[2].' '.$title_array[3].' '.$title_array[4].' '.$title_array[5].' '.$title_array[6];

                        echo '<div class="post-header"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">'.$trimmed_title.'</a></div>';
                    }
                }
            ?>

            <div class="post-header-image">
                <?php 
                    preg_match_all('/(<img [^>]*>)/', get_the_content(), $images);
                    if (isset($images[1]) && (count($images[1])>0)) {
                        for($i=0; isset($images[1]) && $i < count($images[1]); $i++) {
                            echo $images[1][$i];
                        }
                    }else {
                        echo '<img src="http://18.188.229.2/oolaga/blog/wp-content/uploads/2018/09/No-image-available.jpg">';
                    }            
                ?>
            </div>
            <!-- Post Content -->
            <div class="post-content">
                <?php
                    $content = preg_replace('/(<img [^>]*>)/', '', get_the_content());
                    $content = apply_filters('the_content', $content);
                    //echo $content;
                    echo $content = substr($content, 0, 135); echo "..."; 
                    wp_link_pages( array(
                        'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
                        'after'       => '</div>',
                        'link_before' => '<span class="page-number">',
                        'link_after'  => '</span>',
                    ) );
                ?>
            </div>
            <!-- Post Date -->
            <ul class="meta-data-list">
                <li class="meta-data-list-item">
                    <?php
                        if ( 'post' === get_post_type() ) :
                            echo '<span class="blog-date">';
                                if ( is_single() ) :
                                    twentyseventeen_posted_on();
                                else :
                                    echo twentyseventeen_time_link();
                                    //twentyseventeen_edit_link();
                                endif;
                             echo '</span>';
                        endif; 
                    ?>
                    <!-- Category Name -->
                    <span class="author-name">
                        <?php 
                            $category = get_the_category();
                            $firstCategory = $category[0]->cat_name; 
                            echo $firstCategory;
                        ?>
                    </span>
                    <!-- Author Name -->                    
                    <!-- <span class="author-name">By : <?php //the_author(); ?></span> -->                
                </li>
            </ul>
        </div> 
    </div>
    <!-- Blog Post Ends -->
    <?php
    if ( is_single() ) {
    	twentyseventeen_entry_footer();
    }
    ?>

</article><!-- #post-## -->
