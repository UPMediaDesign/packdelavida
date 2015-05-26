<?php
/*
Template Name: Alo Doctor
*/
?>
<?php get_header(); ?>
        <?php $topimagen = get_field('top_imagen' , $post->ID)?>
        <div class="beneficiadas" style="background-image:url(<?php echo $topimagen?>)">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 single-container ">
                        <div class="col-md-12 jumbotron caption centered">
                            <h2><?php echo $post->post_title?></h2>
                            <span class="top-line"></span>
                            <p><?php echo $post->post_excerpt?></p>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>

        <section class="container white">
                <div class="row">
                    <div class="col-md-12 medic-ask jumbotron">
                        <h2>¿Tienes consultas?</h2>
                        <div class="line-green"></div>
                        <?php echo apply_filters('the_content' , $post->post_content)?>
                    </div>
                </div>
        </section>
        
        <section class="container white videos">
            <div class="row">
                <div class="col-md-12 videos">
                    <h2>Videos</h2>
                    <div class="line-green"></div>
                </div>
            </div>

            <div class="row videos-area slider">
                <script src="//f.vimeocdn.com/js/froogaloop2.min.js"></script>
                <?php $cvideo = 0?>
                <?php $videos = get_posts(array('post_type' => 'videos' , 'tipo'=>'alo-doc' , 'numberposts' => 10 ))?>

                <?php foreach($videos as $video):?>
                <?php $cvideo++?>

                <div class="col-md-4 pdlr0 ">
                
                    <figure class="slide">
                        <?php echo get_the_post_thumbnail($video->ID , 'filosofia' , array('data-toggle' => 'modal' , 'data-target'=> '#modal-'.$cvideo , 'class' => 'btn btn-primary'))?>
                        <figcaption>
                            <img src="<?php bloginfo('template_directory')?>/images/play.png" alt="" width="90" data-toggle="modal" data-target="#modal-<?php echo $cvideo?>" />
                            <h3><?php echo get_the_title($video->ID , array('data-toggle' => 'modal' , 'data-target'=> '#modal-'.$cvideo , 'class' => 'btn btn-primary'))?></h3>
                        </figcaption>
                    </figure>
                        
                    
                    <!-- Fin Ventana Modal -->
                </div>
                <?php endforeach?>


                <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
                </style>

            </div>

        <!-- Fin Contenido Varices -->
        <script>
            jQuery('.slider').bxSlider({
                slideWidth: 600,
                slideMargin:5,
                minSlides: 3,
                maxSlides: 3,
                pager:false,    
            });    
        </script>

    </section>
        

            <!-- Modal Videos -->
            <?php $cvideo = 0;?>
            <?php foreach($videos as $video):?>
            <?php $cvideo++?>
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

            <?php endforeach ?>
                    <!-- Fin Modal Videos -->


		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


        <section class="container contactt white">
            <div class="row">
                <h2>Haz tus consultas aquí</h2>
                <div class="line-green"></div>
            </div>
        </section>
        <section class="container white" style="overflow:auto">
        	<div class="row">
            
            <div class="col-md-12 chat-consult">

                    <div class="separator clear"></div>                    
                    <div class="col-md-6 col-md-offset-3 input-group">
                        <input type="text" class="form-control" id="text-search" placeholder="Buscar Preguntas" aria-label="..."/>
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-success" id="buscar"><span class="fa fa-search fa-fw"></span> Buscar</button>
                        </div>
                    </div>
                    
                    <div class="clear separator"></div>
                    
                    <?php
                        //Gather comments for a specific page/post 
                        $comments = get_comments(array(
                            'post_id' => $post->ID,
                            'status' => 'approve', //Change this to the type of comments to be displayed
                            //'orderby' => 'ID',
                            'order' => 'ASC',
                            'numberposts' => -1
                        ));
                    ?>
                    
                    <div id="tabs">
                    <?php 
						wp_list_comments( array(
					  		'type' => 'comment',
					  		'callback' => 'custom_comment',
					  		'per_page' => 12
					 	), $comments);
					?>
                    
                    <div class="clear separator"></div>
                    <?php echo wp_paginate_comments('range=1&anchor=0&nextpage=Sig.&previouspage=Previous');?>
                    </div>
                    
                    
                    
                    
                    <div class="hidden" id="preguntas">
                    <?php foreach($comments as $comentario):?>
                        <?php if( $comentario->comment_parent == 0){?>
                        <?php $itcount ++?>     
                                <div class="comentario col-md-3 hidden">
                                    <div class="content-coment" data-toggle="modal" data-target="#modal-id-<?php echo $comentario->comment_ID?>">
                                        <p><?php echo substr($comentario->comment_content , 0, 110)?>...</p>
                                        <p class="name-pacient"><?php echo $comentario->comment_author?> <?php echo get_comment_meta( $comentario->comment_ID, 'apellido', true )?>, <?php echo get_comment_meta( $comentario->comment_ID, 'edad', true )?> años</p>

                                        <button type="button" class="btn btn-primary question" data-toggle="modal" data-target="#modal-id-<?php echo $comentario->comment_ID?>">Leer Pregunta</button>
                                    </div> 
                                </div>
                        <?php }?>
                    <?php endforeach;?>
                    </div> 
                    
                    <div class="clear separator"></div> 
					
                    <div id="modals">
                    <?php foreach($comments as $comentario):?>
                      
                        <?php if( $comentario->comment_parent == 0){?>
                        <?php $itcount ++?> 	
                                    <?php  foreach($comments as $comentarioinside):?>
                                    <?php if($comentarioinside->user_id == 1  && $comentarioinside->comment_parent == $comentario->comment_ID ){?>
                                            <div class="modal fade bs-example-modal-lg" id="modal-id-<?php echo $comentario->comment_ID ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                              <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <div class="askk"><?php echo $comentario->comment_content?></div>
                                                    <p class="name-pacient counter"><em><?php echo $comentario->comment_author?> <?php echo get_comment_meta( $comentario->comment_ID, 'apellido', true )?>, <?php echo get_comment_meta( $comentario->comment_ID, 'edad', true )?> años</em></p>
                                                    <div class="col-md-2 doc-prof">
                                                            <img class="img-responsive" src="<?php bloginfo('template_directory')?>/images/avatar-doc.png" alt="" />
                                                            <p>Doctor Juan Pablo Fuenzalida Gálvez</p>
                                                    </div>
                                                    <div class="anss col-md-10">
                                                            <?php echo $comentarioinside->comment_content?>
                                                    </div>
                                                    <div class="clear separator"></div>
                                                    
                                                </div>
                                              </div>
                                            </div>
                                    <?php }?>
                                	<?php endforeach  ?>
                                    
                        <?php }?>
                    <?php endforeach;?>
                    </div>
                    </div>
                    <div class="separator clear"></div> 
                
            </div>    
            
        	</div>
        </section>
        <div class="clear separator"></div>
        <section class="container contactt white">
        	<div class="row">
                <div class="form">
                    <?php $args = array(
        				'fields' => apply_filters( 'comment_form_default_fields', array(
            			'author' => '<div class="col-md-6"><p class="comment-form-author">'. ( $req ? '<span class="required">*</span>' : '' ) .
                        '<input id="author" name="author" type="text" placeholder="Nombre" value="' .
                        esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />' .
                        '</p></div>',
                        'email'  => '<div class="col-md-6"><p class="comment-form-email">' .
                        '' .
                        ( $req ? '<span class="required">*</span>' : '' ) .
                        '<input id="email" name="email" type="text" placeholder="Email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />' .
        		        '</p></div>',
                        'url'    => '' )),
        				
        				'label_submit'=>'Enviar consulta',
        					
        				'comment_field' => '<div class="col-md-12"><p class="comment-form-comment"><textarea id="comment" placeholder="Mensaje" name="comment" aria-required="true"></textarea></p></div>',
    				);?>
                    
                    <?php comment_form($args)?>
                </div>
            </div>
        </section>
        
        <?php endwhile; else: ?>
        Sorry, no posts matched your criteria.
        <?php endif; ?>

		
        <div class="clear separator"></div>

                <section class="container spokesman white">
            <div class="row">
                <div class="col-md-12">
                    <h3><?php echo get_field('vocero_medico')?></h3>
                    <div class="line-green-0"></div>
                   <!--  <span>Vocero Médico</span> -->
                    <?php echo apply_filters('the_content' , get_field('comentario_vocero'))?>
                </div>
            </div>
        </section>
        
        <section class="container-fluid suscribe">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Conoce a las beneficiadas</h3>
                        <a title="" href="<?php echo get_page_link(10)?>" >Ingresa Aquí</a>
                    </div>
                </div>
        </section>
        

        
        
        <!-- Modal -->
        <div class="modal fade container modal-inscripcion" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog col-md-10" style="width:100%">
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

        <script>
		jQuery( document ).ready(function() {
            jQuery(function() {    
                jQuery('#buscar').bind('click', function(ev) {
                    // pull in the new value
                    var searchTerm = jQuery('#text-search').val();

                    // remove any old highlighted terms
                    jQuery('#tabs').addClass('hidden');
                    jQuery('#preguntas').removeClass('hidden').addClass('show')
                    $('body').removeHighlight();

                    // disable highlighting if empty
                    if ( searchTerm ) {
                        // highlight the new term
                        jQuery('#preguntas').highlight( searchTerm );
                        jQuery('.highlight').parent('p').parent('.content-coment').parent('.comentario').removeClass('hidden').addClass('show')            
                    }
                });

                jQuery('#borrar').click(function(event) {
                     
                    jQuery('.show').addClass('hidden')
                    jQuery('#text-search').val('')
                    jQuery('#tabs').removeClass('hidden').addClass('show')
                    jQuery('#preguntas').removeClass('show').addClass('hidden')
                    
                });

                jQuery('#text-search').bind( 'keyup change' ,function(event) {
                     
                    jQuery('.show').addClass('hidden')
                    //jQuery('#text-search').val('')
                    jQuery('#tabs').removeClass('hidden').addClass('show')
                    jQuery('#preguntas').removeClass('show').addClass('hidden')
                    
                });
                
            });
		 });
        </script>

<?php get_footer(); ?>