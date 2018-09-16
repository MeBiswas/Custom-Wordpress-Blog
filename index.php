<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<div class="row">
    <?php 
       if ( have_posts() ) {
            the_post();
            get_template_part( 'template-parts/post/content-2', get_post_format() );
       }
       else {
            
       }
    ?>
	<div class="content">
		<div class="col-md-9 blog-content">								
			<?php
                query_posts('posts_per_page=4 & offset=1');
    			if ( have_posts() ) :
    				
    				while ( have_posts() ) : the_post(); 
    
    					get_template_part( 'template-parts/post/content', get_post_format() );
    
    				endwhile;
    
    				the_posts_pagination( array(
    					'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
    					'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
    					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
    				) );
    
    			else :
    
    				get_template_part( 'template-parts/post/content', 'none' );
    
    			endif;
    	    ?>	
		</div>
        <div class="col-md-3 sidebar-content">
            <div class="blog-sidebar">
               <?php get_sidebar(); ?>
            </div>   
		</div>
	</div>
</div>

<?php get_footer();
