<?php
if( !function_exists('panoply_home_section') ){
	function panoply_home_section(){
		$panoply_home_sections = apply_filters('panoply_home_sections',
		array(
			'banner',
			'aboutus',
			'services',
			'shop',
			'testimonials',
			'blog',
			'calltoaction',
			'contactus'			
			)
		);

		return $panoply_home_sections;
	}
}
function panoply_post_thumbnail() {
    if(is_singular()) :
 ?>
  <?php if (post_password_required() || is_attachment() || ! has_post_thumbnail() ) { } else {the_post_thumbnail('panoply-post-thumbnail', array('class'=>'img-responsive','alt' => esc_attr(get_the_title()) )); ?> 
<?php } ?>
 <?php else : ?>
  <a href="<?php the_permalink(); ?>">
   <?php if (post_password_required() || is_attachment() || ! has_post_thumbnail() ) { } else {the_post_thumbnail('panoply-post-thumbnail', array('class'=>'img-responsive','alt' => esc_attr(get_the_title()) )); ?> 
<?php } ?>
  </a>
<?php endif; // End is_singular()
}
//Panoply contact form
function panoply_woocommerce_page_title() {
return false;
}
add_filter('woocommerce_show_page_title', 'panoply_woocommerce_page_title');
?>