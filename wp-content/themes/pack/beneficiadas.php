<?php
/*
Template Name: Beneficiadas
*/
?>
<?php get_header(); ?>
		<?php $topimagen = get_field('top_imagen' , $post->ID)?>
        <div class="beneficiadas" style="background-image:url(<?php echo $topimagen?>)">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 single-container ">
                        <div class="jumbotron caption centered">
                            <h2><?php echo $post->post_title?></h2>
                            <span class="top-line"></span>
                            <p><?php echo $post->post_excerpt?></p>
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

        <section class="container white">
                <div class="row">
                    <div class="col-md-12 medic-ask jumbotron">
                        <h2>Historias Reales</h2>
                        <div class="line-green"></div>
                        <?php echo apply_filters('the_content' , $post->post_content)?>
                    </div>
                </div>
        </section>
 		
		<section class="container actress">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php bloginfo('template_directory'); ?>/images/solange.png">
                </div>
                <div class="col-md-6">
                    <h3>Solange Lackington</h3>
                    <div class="line-green-0"></div>
                    <span>Actriz</span>
                   
                    <?php echo apply_filters('the_content' , get_field('testimonio_solange_lackington'))?>
                    
                </div>
            </div>
        </section>

        <section class="container white">
        	<div class="row">
        		<div class="col-md-12 medic-ask jumbotron">
        			<h2>Testimonios</h2>
        			<!-- Slider Casos Beneficiadas -->
        			<div class="line-green"></div>
                    <ul class="benefit">
                       
                       <?php $testimonios = get_posts(array('post_type' => 'testimonio', 'numberposts' => 2))?>
                       <?php foreach($testimonios as $testimonio):?>
                       <li class="col-md-6">
                      		<?php echo get_the_post_thumbnail($testimonio->ID , 'tratamiento' , array('class' => 'testiimagen'))?>
                        	<!--<img src="<?php bloginfo('template_directory')?>/images/marcelagarrido.png" alt=""> -->
                        	<h4><?php echo $testimonio->post_title?></h4>
                        	<div class="line-text"></div>
                        	<?php echo apply_filters('the_content' , $testimonio->post_content)?>
                       	</li>
                        <?php endforeach;?>
                        <!--<li class="col-md-6">
                        	<img src="<?php bloginfo('template_directory')?>/images/doragonzalez.png" alt="">
                        	<h4>Dora Gonzalez</h4>
                        		<div class="line-text"></div>
                        		<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                        		<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, dolore eu feugiat nulla facilisis.</p>
                        </li> -->
                    </ul>
                    <!--<nav class="slides-navigation benefit-ctrl">
                    	<a href="#" class="slides-navigation righta"><span class="fa fa-chevron-right"></span></a>
                    	<a href="#" class="slides-navigation lefta"><span class="fa fa-chevron-left"></span></a>
                    </nav> -->
                    <!-- Fin Slider Casos Beneficiadas -->
                </div>
        	</div>
        </section>
		
        <section class="container white pdlr0 videos">
        	<div class="row">
        		<div class="col-md-12 videos">
        			<h2>Videos</h2>
        			<div class="line-green"></div>
        		</div>
        	</div>

        	<div class="row videos-area">
            	<script src="//f.vimeocdn.com/js/froogaloop2.min.js"></script>
            	<?php $cvideo = 0?>
				<?php $videos = get_posts(array('post_type' => 'videos' , 'numberposts' => 3 ))?>
                <?php foreach($videos as $video):?>
                <?php $cvideo++?>

        		<div class="col-md-4 pdlr0">
                
                	<figure>
                    	<?php echo get_the_post_thumbnail($video->ID , 'filosofia' , array('data-toggle' => 'modal' , 'data-target'=> '#modal-'.$cvideo , 'class' => 'btn btn-primary'))?>
                    	<figcaption>
                        	<img src="<?php bloginfo('template_directory')?>/images/play.png" alt="" width="90" data-toggle="modal" data-target="#modal-<?php echo $cvideo?>" />
                        </figcaption>
                    </figure>
                
					<?php /* <img class="btn btn-primary" data-toggle="modal" data-target="#modal-<?php echo $cvideo?>"src="<?php bloginfo('template_directory')?>/images/embed<?php echo $cvideo?>.jpg">  */?>
						
					<div class="modal fade bs-example-modal-lg" id="modal-<?php echo $cvideo?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg">
                            <div class="modal-header">
                            	<button type="button" id="cerrar-v-<?php echo get_field('id_del_video' , $video->ID)?>" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            	<h4 class="modal-title" id="myModalLabel">&nbsp;</h4>
                          	</div>
							<div class="modal-content">
                                  <div class='embed-container'>
                                    <iframe src='http://player.vimeo.com/video/<?php echo get_field('id_del_video' , $video->ID)?>?api=1' id="vi-<?php echo get_field('id_del_video' , $video->ID)?>" frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                  	<script type="text/javascript">
                                    jQuery(document).ready(function($) {
                                    	var iframe = document.getElementById('vi-<?php echo get_field('id_del_video' , $video->ID)?>');
										$f == Froogaloop
										var player = $f(iframe);
										
										var pauseButton = document.getElementById("cerrar-v-<?php echo get_field('id_del_video' , $video->ID)?>");
										pauseButton.addEventListener("click", function() {
										  player.api("pause");
										});
										
										var pauseButton = document.getElementById("modal-<?php echo $cvideo?>");
										pauseButton.addEventListener("click", function() {
										  player.api("pause");
										});
										
									});	
                                    </script>
                                  </div>
							</div>
						</div>
					</div>
					<!-- Fin Ventana Modal -->
				</div>
                <?php endforeach?>

				<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
                

				

<!-- 	        	<nav class="slides-pagination videos-ctrl">
	        		<a href="#" class="slides-pagination"><span class="fa fa-chevron-right"></span></a>
	        		<a href="#" class="slides-pagination"><span class="fa fa-chevron-right"></span></a>
	        		<a href="#" class="slides-pagination"><span class="fa fa-chevron-left"></span></a>
	         	</nav>

	         	<nav class="slides-pagination">
	         		<a href="#1" class="current">1</a>
	         		<a href="#2">2</a>
	         		<a href="#3">3</a>
	         	</nav> -->
        	</div>
        </section>
		<div class="clear separator"></div>
 		<section class="suscribe">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Inscríbete en el Programa</h3>
                        <a title="" rel="" data-toggle="modal" data-target="#myModal" >Ingresa Aquí</a>
                    </div>
                </div>
        </section>
        
        
        
        
        <!-- Modal -->
        <div class="modal fade container modal-inscripcion" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog col-md-10 col-md-offset-1" style="width:100%">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Inscríbete</h4>
              </div>
              <div class="modal-body">
                <?php echo do_shortcode('[contact-form-7 id="79" title="Formulario inscripcion"]')?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
        
       	
        
        <!-- Fin Contenido Varices -->

<?php get_footer(); ?>