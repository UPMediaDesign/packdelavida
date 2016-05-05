<!doctype html>
<html lang="es">

<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
<title>
    <?php if (is_front_page() ) { ?><?php bloginfo('name'); ?> · <?php bloginfo('description'); ?><?php } ?>
    <?php if ( is_author() ) { ?><?php bloginfo('name'); ?> · Archivo por autor<?php } ?>
    <?php if ( is_single() ) { ?><?php wp_title(''); ?> · <?php wp_title(''); ?><?php } ?>
    <?php if ( is_page() ) { ?><?php bloginfo('name'); ?> · <?php wp_title(''); ?><?php } ?>
    <?php if ( is_category() ) { ?><?php bloginfo('name'); ?> · Archivo por Categoria · <?php single_cat_title(); ?><?php } ?>
    <?php if ( is_month() ) { ?><?php bloginfo('name'); ?> · Archivo por Mes | <?php the_time('F'); ?><?php } ?>
    <?php if ( is_search() ) { ?><?php bloginfo('name'); ?> · Resultados<?php } ?>
    <?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?> · Archivo por Tag · <?php  single_tag_title("", true); } } ?>
</title>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/jquery.highlight.js"></script>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<!--BOOTSTRAP-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/jstyle.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/superslides.css">
<!-- bxSlider CSS file -->
<link href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslider.css" rel="stylesheet" />
    <!--[if lte IE 8]>
    <style>
        /* Rotation of the arrow element for IE < 9 */
        .next-icon { /* IE Matrix Calculator - http: //www.boogdesign.com/examples/transforms/matrix-calculator.html */;
            -ms-filter: "progid:DXImageTransform.Microsoft.Matrix(M11=0.70710678, M12=-0.70710678, M21=0.70710678, M22=0.70710678,sizingMethod='auto expand')";
            filter: progid:DXImageTransform.Microsoft.Matrix(M11=0.70710678, M12=-0.70710678, M21=0.70710678, M22=0.70710678,sizingMethod='auto expand');
        }
    </style>
    <![endif]-->
    
<?php wp_head(); ?>

<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/superslides.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/core.js"></script>


<!--FACEBOOK OG-->

<?php if (have_posts()):while(have_posts()):the_post(); endwhile; endif;?>
<!-- the default values -->
<meta property="fb:app_id" content="702517839779860" />
<meta property="fb:admins" content="1108564427" />

<!-- if page is content page -->
<?php if (is_single()) { ?>
<meta property="og:url" content="<?php the_permalink() ?>"/>
<meta property="og:title" content="<?php single_post_title(''); ?>" />
<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
<meta property="og:type" content="article" />
<meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); }?>" />

<!-- if page is others -->
<?php } else { ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<meta property="og:description" content="<?php bloginfo('description'); ?>" />
<meta property="og:type" content="website" />
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/images/og-iram.png" /> <?php } ?>

<!--//FACEBOOK OG-->
<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0014/4114.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>
</head>


<body  <?php body_class('grey')?>>
      <header class="overhead pd0">
        <div id="container-fluid header">
              <div class="logo">
                  <a href="<?php echo home_url() ?>"><img src="<?php bloginfo('template_directory'); ?>/images/packlogo_.png" /></a>
              </div>

              <div class="logo-banmedica">
                <a href="http://www.fundacionbanmedica.cl" title="Fundación Banmédica" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/logo-whitehigh.png"></a>
              </div>

              <div class="container-fluid clear menubarss">
                <div class="navbar-header">
                <button class="navbar-toggle collapsed btn-lg icon-bar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                  <span class="sr-only">Menú</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>

              <nav class="nav navbar-collapse bs-navbar-collapse collapse" role="navigation" id="menu" style="height: 1px;">
                    <?php /* Primary navigation */
                      wp_nav_menu( array(
                      'theme_location' => 'primary',
                      'depth' => 2,
                      'container' => false,
                      'menu_class' => 'nav',
                      //Process nav menu using our custom nav walker
                      'walker' => new wp_bootstrap_navwalker())
                    );
                    ?>
             </nav>
              </div>
          </div>

        </header>


