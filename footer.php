<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

		<div class="row">
			<div class="col-lg-4 col-md-4">
				<li>List 1</li>
				<li>List 2</li>
				<li>List 3</li>
			</div>
			<div class="col-lg-4 col-md-4">
				<li>List 1</li>
				<li>List 2</li>
				<li>List 3</li>
			</div>
			<div class="col-lg-4 col-md-4">
				<li>List 1</li>
				<li>List 2</li>
				<li>List 3</li>
			</div>
		</div><!-- row end -->


</div><!-- #page this is opened in the header-->

<!-- Keep this wp_footer() here to pull in scripts at the end of the page -->
<?php wp_footer(); ?>

</body>

</html>
