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
$post_id=get_the_ID();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>
    <?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>


	<div class="single-post-content">
		<?php
			preg_match_all('/(<img [^>]*>)/', get_the_content(), $images);
			if (isset($images[1]) && (count($images[1])>0)) {				
		        for($i=0; isset($images[1]) && $i < count($images[1]); $i++) {
		            echo $images[1][$i];
		        }
			}else {
				echo '<img src="http://18.188.229.2/oolaga/blog/wp-content/uploads/2018/09/No-image-available.jpg">';
			}
	        
        
    	if ( 'post' === get_post_type() ) :
			echo '<div class="blog-time"><span class="date-blog"><i class="fa fa-calendar-o fa-fw"></i>';
				if ( is_single() ) :
					twentyseventeen_posted_on();
				else :
					echo twentyseventeen_time_link();
					twentyseventeen_edit_link();
				endif;			
			echo '</span></div>';
		endif; 
        
        if ( is_single() ) {
			the_title( '<div class="single-post-title">', '</div>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
        ?>
        
        <p>By :<span> <?php the_author(); ?></span></p>
        <div class="single-post-context">
        	<?php
				$content = preg_replace('/(<img [^>]*>)/', '', get_the_content());
		        $content = apply_filters('the_content', $content);
		        echo $content ; 
				wp_link_pages( array(
					'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
					'after'       => '</div>',
					'link_before' => '<span class="page-number">',
					'link_after'  => '</span>',
				) );
			?>
        </div>
	</div>
	      
	<!-- .entry-content -->

	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>

</article><!-- #post-## -->
