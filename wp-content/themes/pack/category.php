		<?php get_header()?>
        
        <?php $var = get_queried_object()?>

		<?php $topimagen = get_field('top_imagen' , 'category_'.$var->cat_ID)?>
        <div class="varices" style="background-image:url(<?php echo $topimagen?>)">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 single-container ">
                        <div class="jumbotron caption centered">
                            <h2><?php echo $var->cat_name?></h2>
                            <span class="top-line"></span>
                            <p>Aquí encontrarás importantes noticias y nuevos descubrimientos relativos al Pack de la Vida y al Síndrome Metabólico.</p>
                            <?php /*?><p><?php echo $post->post_excerpt?></p><?php */?>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>

        <aside class="float-cta">
            <a href="http://www.packdelavida.cl/hazte-el-pack/">
                <img src="<?php bloginfo('template_directory')?>/images/float_cta.png" alt="">
            </a>
        </aside>
		
        
     <div class="clear"></div>       
            
            
        	<section id="seccion-noticias" class="page-content">
            	<div class="container white">
                <div class="clear separator"></div>
                	<div class="row about">
                    	<?php $cpost = 0?>
                        <?php foreach($posts as $post):?>
                        <?php $cpost++?>
                        	<article class="col-md-6">
                            	<h3 class="newsPack"><a href="<?php echo get_the_permalink($post->ID)?>"><?php echo $post->post_title?></a></h3>
                            	<a href="<?php echo get_the_permalink($post->ID)?>" class="alignleft"><?php echo get_the_post_thumbnail($post->ID , 'smallNuus');?></a>
                                <p><?php echo substr( $post->post_excerpt, 0 , 280);?>...</p>
                                <div class="clear"></div>
                                <a href="<?php echo get_permalink($post->ID)?>" class="morelink">Continúa leyendo</a>
                                <div class="clear"></div>
                            </article>
                            <?php if($cpost % 2 == 0){echo '<div class="clear separator"></div>';}?>
                        <?php endforeach?>
                        <div class="clear separator"></div>
                    </div>
                </div>
            </section>
        	
            
           
      
        
<?php get_footer()?>