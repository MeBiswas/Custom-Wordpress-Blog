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
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <!-- Blog Post Starts-->    
    <div class="col-md-12">
        <!-- Post Image -->
        <div class="Ist-post-image">
            <?php 
                preg_match_all('/(<img [^>]*>)/', get_the_content(), $images);
                if (isset($images[1]) && (count($images[1])>0)) {
                    for($i=0; isset($images[1]) && $i < count($images[1]); $i++) {
                        echo $images[1][$i];                  
                    }
                }else {
                    ?>
                    <div class="col-md-12 banner" style="background: rgba(0, 0, 0, 0) url('http://18.188.229.2/oolaga/blog/wp-content/uploads/2018/09/No-Image-Found-1.jpg') repeat scroll 0 0 / cover">
                    <?php
                }            
            ?>
            <div class="Ist-post-image-overlay">
                <div class="Ist-post-text-container">
                    <!-- Category Name -->
                    <span class="banner-pretitle">
                        <?php 
                            $category = get_the_category();
                            $firstCategory = $category[0]->cat_name; 
                            echo $firstCategory;
                        ?>
                    </span>
                    <!-- Post Title -->
                    <?php                
                        if ( is_single() ) { 
                            the_title( '<div class="post-header">', '</div>' );
                        } elseif ( is_front_page() && is_home() ) { 
                            the_title( '<div class="post-header"><a style="color:#000;" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></div>' );
                        } else { 
                         the_title( '<div class="banner-title">', '</div>' );                    
                        }
                    ?>
                    <!-- Read More -->                    
                    <?php
                        $link = get_permalink();
                        ?>
                        <div class="banner-subtitle"><a href="<?php echo get_permalink(); ?>">READ MORE</a></div>
                        <?php               
                    ?>
                </div>
            </div>                
        </div>
    </div>
    <!-- Blog Post Ends -->
    <?php
    if ( is_single() ) {
        twentyseventeen_entry_footer();
    }
    ?>

</article><!-- #post-## -->