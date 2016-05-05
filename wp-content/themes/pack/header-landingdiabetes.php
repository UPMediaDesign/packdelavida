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

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style_landing-diabetes.css" media="screen" />

<?php wp_head(); ?>

</head>

<body>

<header class="pink-girl">
	<div class="container">
		<div class="row">

			<div class="jumbotron">
				<h1>Diabetes</h1>
			</div>

		</div>
	</div>
</header>

<aside class="nav-sider">
	<ul>
		<li><a href=""></a></li>
		<li><a href=""></a></li>
		<li><a href=""></a></li>
		<li><a href=""></a></li>
		<li><a href=""></a></li>
	</ul>
</aside>