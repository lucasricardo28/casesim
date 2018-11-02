<?php
/**
 * The template used for displaying page content in template-homepage.php
 *
 * @package storefront
 */

?>
<?php
$featured_image = get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' );
?>
<section class="storefront-product-section" >
	<?php echo do_shortcode('[wonderplugin_slider id=1]'); ?>
</section>

<section class="second-banner">
	<div style="width: 50%; float: right"></div>
</section>
