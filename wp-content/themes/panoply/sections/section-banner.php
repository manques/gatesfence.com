<?php
/**
 *
 * @package panoply
 */
?>
<?php 
$banner_title_one = get_theme_mod( 'banner_Section_display');
if($banner_title_one==1){?>
<div class="home-slider flexslider">
   <ul class="slides">
     <li>
       <div class="slide-image cover" style="background-image:url(<?php echo esc_url(get_theme_mod('banner-upload_one'));?>)"></div>
       <div class="slider-content">
         <div class="slide-content">
           <h1><?php $banner_title_one = get_theme_mod( 'banner_title_one');if($banner_title_one!==''){echo esc_html($banner_title_one);}?></h1>
           <p><?php $banner_text_one = get_theme_mod( 'banner_text_one');if($banner_text_one!==''){echo esc_html($banner_text_one);}?></p>
           <a href="<?php $banner_button_url_one = get_theme_mod( 'banner_button_url_one');if($banner_button_url_one!==''){echo esc_url($banner_button_url_one);}?>" class="btn"><?php $banner_button_one = get_theme_mod( 'banner_button_one');if($banner_button_one!==''){echo esc_html($banner_button_one);}?></a>
         </div>
       </div>
     </li>
     <!--slide-1-->
     <li>    
       <div class="slide-image cover" style="background-image:url(<?php echo esc_url(get_theme_mod('banner-upload_two'));?>)"></div>
       <div class="slider-content">
         <div class="slide-content">
           <h1><?php $banner_title_two = get_theme_mod( 'banner_title_two');if($banner_title_two!==''){echo esc_html($banner_title_two);}?></h1>
           <p><?php $banner_text_two = get_theme_mod( 'banner_text_two');if($banner_text_two!==''){echo esc_html($banner_text_two);}?></p>
           <a href="<?php $banner_button_url_two = get_theme_mod( 'banner_button_url_two');if($banner_button_url_two!==''){echo esc_url($banner_button_url_two);}?>" class="btn"><?php $banner_button_two = get_theme_mod( 'banner_button_two');if($banner_button_two!==''){echo esc_html($banner_button_two);}?></a>
         </div>
       </div>
     </li>
     <!--slide-2-->
     <li>
       <div class="slide-image cover" style="background-image:url(<?php echo esc_url(get_theme_mod('banner-upload_third'));?>)"></div>
       <div class="slider-content">
         <div class="slide-content">
           <h1><?php $banner_title_third = get_theme_mod( 'banner_title_third');if($banner_title_third!==''){echo esc_html($banner_title_third);}?></h1>
           <p><?php $banner_text_third = get_theme_mod( 'banner_text_third');if($banner_text_third!==''){echo (esc_html($banner_text_third));}?></p>
           <a href="<?php $banner_button_url_third = get_theme_mod( 'banner_button_url_third');if($banner_button_url_third!==''){echo esc_url($banner_button_url_third);}?>" class="btn"><?php $banner_button_third = get_theme_mod( 'banner_button_third');if($banner_button_third!==''){echo esc_html($banner_button_third);}?></a>
         </div>
       </div>
     </li>
     <!--slide-3-->
   </ul>
 </div>
 <?php }?>