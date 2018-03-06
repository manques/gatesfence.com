<?php
$blog_Section_id=get_theme_mod('blog_Section_id');
$blog_Section=get_theme_mod('blog_Section');
$panoply_blog_count=get_theme_mod('panoply_blog_count');
?>
<?php if($blog_Section_id){?>
<section class="section-row home-blog" id="<?php echo esc_attr($blog_Section_id);?>">
     <div class="container">
       <div class="page-title">
         <h2 class="main-title"><?php echo esc_html($blog_Section);?></h2>
       </div>
       <div class="row">
       <?php
	   if(!empty($panoply_blog_count))
{
$params = array('posts_per_page' =>$panoply_blog_count, 'post_type' => 'post','orderby' => 'DESC');
}
else
{
	$params = array('posts_per_page' =>3, 'post_type' => 'post','orderby' => 'DESC');
}
$wc_query = new WP_Query($params);
?>
<?php if ($wc_query->have_posts()) : ?>
<?php while ($wc_query->have_posts()) :
                $wc_query->the_post(); 
				?>
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInDown">
           <div class="blog-post">
             <article>
               <header class="entry-header">
                 <div class="entry-thumbnail">
                   <?php the_post_thumbnail('panoply-blog-image', array( 'class'	=> "img-responsive",'alt'=>esc_attr(get_the_title()))); ?>
                 </div>
                 <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                 <div class="entry-meta">
                   <?php the_category(); ?>
                 </div>
               </header>
               <div class="entry-summary">
                <?php the_excerpt();?>
                 <a class="btn" href="<?php the_permalink();?>"><?php esc_html_e('Read More', 'panoply'); ?></a>
               </div>
             </article>
           </div>
         </div>
 <?php endwhile; endif;?> 
       </div>
     </div>
   </section>
   <?php }?>