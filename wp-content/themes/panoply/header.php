<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head();?>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" <?php body_class(); ?>>
<div class="wrapper">
 <header class="header">
    <nav class="navbar main-nav">
      <div class="container"> 
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </button>
          <div class="logo">
         <?php if(function_exists( 'the_custom_logo')){if(has_custom_logo()){?>
            <div class="logo-img"><?php the_custom_logo();?></div>
           <?php }else{?>
          <?php $header_textcolor=get_theme_mod('header_textcolor');if($header_textcolor!=='blank'){?>
            <a href="<?php echo esc_url(home_url()); ?>"><h2 class="logo-title"><?php echo bloginfo('name');?></h2></a>
            <?php }?>
                      <?php $header_textcolor=get_theme_mod('header_textcolor');if($header_textcolor!=='blank'){?>
           <p><?php bloginfo('description'); ?></p>
           <?php }}}?>
         </div>
       </div>
       <!-- Collect the nav links, forms, and other content for toggling -->
       <div class="collapse navbar-collapse" id="navbar-collapse">
       <?php wp_nav_menu( array('theme_location'=>'primary','container' => '', 'container_class' => '', 'container_id' => '', 'menu_class'=>'nav navbar-nav','depth'=> 0)); ?>  
       </div>
     </div>
   </nav>
 </header>
 <!--close-header-->