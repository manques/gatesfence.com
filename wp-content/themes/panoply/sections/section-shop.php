<?php
$shoppage_Section_id=get_theme_mod('shoppage_Section_id');
$shoppage_Section=get_theme_mod('shoppage_Section');
$panoply_shop_page_count=get_theme_mod('panoply_shop_page_count');
?>
<?php if($shoppage_Section_id){?>
<section class="section-row home-shop" id="<?php echo esc_attr($shoppage_Section_id);?>">
     <div class="container">
       <div class="page-title">
         <h2 class="main-title"><?php echo esc_html($shoppage_Section);?></h2>
       </div>
       <div class="home-products row">
         <ul class="products">
         <?php
		 if(!empty($panoply_shop_page_count))
		 {
              $params = array('posts_per_page' =>$panoply_shop_page_count, 'post_type' => 'product','orderby' => 'DESC');
		 }else
		 {
			 $params = array('posts_per_page' =>4, 'post_type' => 'product','orderby' => 'DESC');
		 }
$wc_query = new WP_Query($params);
global $product; 
?>
<?php if ($wc_query->have_posts()) : ?>
<?php while ($wc_query->have_posts()) :
                $wc_query->the_post(); 
				$product = new WC_Product(get_the_ID());
				?>
           <li class="col-md-3 col-sm-3 col-xs-6 wow fadeInDown">
             <div class="product">
             <a href="<?php echo esc_url(get_permalink( $wc_query->post->ID )); ?>" title="<?php echo esc_attr($wc_query->post->post_title ? $wc_query->post->post_title : $wc_query->post->ID); ?>">
             <?php if($product->is_on_sale()) : ?>
<span class="onsale"><?php esc_html_e('Sale!', 'panoply'); ?></span><?php endif; ?>
               <?php if (has_post_thumbnail( $wc_query->post->ID )) echo get_the_post_thumbnail($wc_query->post->ID);?>
               <h3><?php the_title(); ?></h3>
	           <span class="price">
                 <?php echo $product->get_price_html(); ?>
               </span>
             </a>
             <?php woocommerce_template_loop_add_to_cart( $wc_query->post); ?>
             </div>
           </li>
           <?php endwhile; endif;?>
         </ul>
       </div>
     </div>
   </section>
   <?php }?>