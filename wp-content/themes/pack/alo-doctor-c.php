<?php
/*
Template Name: Alo Doctor c
*/
?>
<?php get_header(); ?>
        <?php $topimagen = get_field('top_imagen' , $post->ID)?>
        <div class="beneficiadas" style="background-image:url(<?php echo $topimagen?>)">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 single-container ">
                        <div class="jumbotron caption centered">
                            <!--<h2><?php echo $post->post_title?></h2>
                            <span class="top-line"></span> -->
                            
                        </div>
                    </div>
    
                </div>
            </div>
        </div>

	

       
        <div class="clear separator"></div>
        <section class="container contactt">
        	<div class="row" style="text-align:center">
            	<div style="height:100px;"></div>
                <h2>Gracias por inscribirte</h2>
                <div class="line-green"></div>
                <p><?php echo $post->post_content?></p>
                <div style="height:200px;"></div>
             </div>
        </section>   
                
		
        <div class="clear separator"></div>
        
        <section class="suscribe">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Inscribete en el Programa</h3>
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