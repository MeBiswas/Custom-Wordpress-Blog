<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
	</div>
	<?php include'footer.blade.php'; ?>

<script type="text/javascript">
	$(window).scroll(function () {
	  if ($(this).scrollTop() > 1)
	  {
	    $('.header-sec').addClass('sticky');
	  } 
	  else {
	    $('.header-sec').removeClass('sticky');
	  }
	});
</script>

</body>
</html>