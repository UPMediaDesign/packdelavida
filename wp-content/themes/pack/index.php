<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

            <div id="bigcarousel">
                <div id="slides">
                  <ul class="slides-container">
                    
                    <?php $slides = get_posts(array('post_type'=>'slider' , 'posts_per_page'=>4));?>
                    <?php $scount = 0?>
                    <?php foreach($slides as $slide):$scount++?>
                    <?php
                    $thumb_id = get_post_thumbnail_id($slide->ID);
                    $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
                    ?>
                    <li style="background-image:url(<?php echo $thumb_url[0];?>); background-position:center top; height:580px; background-size:cover !important">
                      <?php //echo get_the_post_thumbnail($slide->ID , 'full')?>
                        <div class="carousel-caption jumbotron cta">
                        	<div class="lq" style="background-image:url(<?php bloginfo('template_directory')?>/images/lq.png)"></div>
                            <h1><?php echo get_the_title($slide->ID)?></h1>
                            <p style="width:auto;"><?php echo $slide->post_excerpt?></p>
                            <div class="rq" style="background-image:url(<?php bloginfo('template_directory')?>/images/rq.png); float:left"></div>

                             <a href="<?php echo get_page_link(164)?>" title="" rel="">Hazte el Pack</a>
                        </div>
                    </li>
                    <?php endforeach;?>
                    
                  </ul>
                  <nav class="slides-navigation">
                    <a href="#" class="next"><span class="fa fa-chevron-right"></span></a>
                    <a href="#" class="prev"><span class="fa fa-chevron-left"></span></a>
                  </nav>
                </div>
                
                
                <script>
                jQuery(document).ready(function($) {
                    jQuery('#slides').superslides();
                });
              </script>
    
            </div>

        <!-- Que es el Pack -->
        <section class="blue-girl">
            <div class="container ">
                <div class="row">

                    <div class="col-md-7 consult">
                        <h3>¿Qué es el Pack de la Vida?</h3>
                        <p>
                            El Pack de la Vida es un nuevo e inédito conjunto de <strong>5 evaluaciones más una consulta médica</strong> que te ayudarán a conocer si tienes el <strong>Síndrome Metabólico</strong> y que podrían ayudarte a salvar tú vida, ya que, gracias a ellos puedes prevenir a tiempo.
                        </p>
                    </div>
                    <div class="clear separator"></div>

                </div>
            </div>
        </section>

        <section class="medium-gray">
            
            <div class="container">
                <div class="row">

                    <div class="whypack">
                        <h3>¿Por qué Pack de la Vida?</h3>


                        <div class="row">
                            <?php $porques = get_field('por_que' , 'options')?>
                            <?php foreach($porques as $xq):?>
                            <div class="col-md-20 reasons">
                                <img src="<?php echo $xq['icono']?>" alt="" />
                                <p>
                                    <?php echo $xq['razon']?>
                                </p>
                            </div>
                            <?php endforeach?> 
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="arrow"></section>

        <!-- Alo Doctor -->
        <section class="alodoc">
            <div class="container">
               <div class="row">
                    <div class="col-md-4 col-md-offset-1 doc-body">
                        <img src="<?php bloginfo('template_directory')?>/images/doc-body.png" width="200" alt="" />
                    </div>
                    <div class="col-md-7 content cta">
                        <h3>Aló Doctor</h3>
                        <span>VOCERO MÉDICO</span>
                        <p>El 70% de las muertes en Chile, están relacionadas directa e 
indirectamente a malos hábitos de alimentación y estilos de vida.
El Dr. Jara, vocero médico de la Fundación Banmédica, está a tu disposción para orientarte en el cuidado de la diabetes, hipertensión y enfermedades cardiovasculares. Haz tus preguntas online.</p>
                        <a href="<?php echo get_page_link(424)?>">Ir a Consulta</a>
                    </div>
               </div>
            </div>
        </section>


        <section class="anti-arrow"></section>

        <!-- Como prevenir -->
        <section class="prevencionhome">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 prevent">
                        <h3>¿Cómo prevenir?</h3>
                        <p>Conoce las principales enfermedades crónicas no transmisibles y como prevenir su desarrollo</p>
                    </div>
                 </div>
            </div>
            <div class="row">
            <div class="container consult prevenir"> 
                <div class="row">  
                   
                    <figure class="col-md-4 col-sm-4 roundprev">
                        <a style="border-top:none !important;" href="<?php echo get_page_link(9)?>/#seccion-4"><img src="<?php bloginfo('template_directory')?>/images/diabetes.jpg" width="200" alt="" />
                            </a>
                            <figcaption>
                                <h4><a href="<?php echo get_page_link(9)?>/#seccion-4">Diabetes</a></h4>
                                <a href="<?php echo get_page_link(9)?>/#seccion-4">Ver más</a>
                            </figcaption>
                        
                    </figure>
                    <figure class="col-md-4 col-sm-4 roundprev">
                        <a style="border-top:none !important;" href="<?php echo get_page_link(9)?>/#seccion-4"><img src="<?php bloginfo('template_directory')?>/images/hipertension.jpg"  width="200" alt="" /></a>
                        <figcaption>
                                <h4><a href="<?php echo get_page_link(9)?>/#seccion-4">Hipertensión</a></h4>
                                <a href="<?php echo get_page_link(9)?>/#seccion-4">Ver más</a>
                        </figcaption>
                        
                    </figure>
                    <figure class="col-md-4 col-sm-4 roundprev">
                        <a style="border-top:none !important;" href="<?php echo get_page_link(9)?>/#seccion-4"><img src="<?php bloginfo('template_directory')?>/images/cardio.jpg" width="200" alt="" /></a>
                        <figcaption>
                                <h4><a href="<?php echo get_page_link(9)?>/#seccion-4">Enfermedades<br />Cardiovasculares</a></h4>
                                <a href="<?php echo get_page_link(9)?>/#seccion-4">Ver más</a>
                        </figcaption>
                    </figure>
                    
                </div>
            </div>
            </div>
        </section>

        <!-- Acerca de PDV -->
        <section>
            <div class="container">
               <div class="row title-case">
                    <h3>Pack de la Vida</h3>
                    <p>La temprana detección del síndrome metábolico resulta fundamental para prevenir el desarrollo de enfermedades crónicas no transmisibles. Previene a tiempo, una vez gatilladas estas enfermedades, no hay como curarlas.</p>
               </div>
                       
            </div>
            <div class="container">
                <div class="row mgauto case-bottom">

                    <?php query_posts( 'page_id=7' );?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <figure class="col-md-esp col-md-4 col-sm-4 case">
                        <?php the_post_thumbnail('home-boxes'); ?>
                        <h3><a href="<?php the_permalink(); ?>" title="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </figure>
                    
                    <?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?>

                    <?php query_posts( 'page_id=9' );?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <figure class="col-md-esp col-md-4 col-sm-4 case">
                        <?php the_post_thumbnail('home-boxes'); ?>
                         <h3><a href="<?php the_permalink(); ?>" title="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h3>
                    <?php endwhile; endif; ?>
                    </figure>
                    
                    <?php wp_reset_query(); ?>

                    <?php query_posts( 'page_id=11' );?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <figure class="col-md-esp col-md-4 col-sm-4 case">
                        <?php the_post_thumbnail('home-boxes'); ?>
                         <h3><a href="<?php the_permalink(); ?>" title="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h3>
                    </figure>
                      
                    <?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </section>
        <!-- Fin Acerca de PDV -->

        <!-- Fin Sugerencias del Médico -->
		<section class="deep-blue">
        	<div class="container">
        	  <div class="row">
              	<div class="col-md-12 stadistics"><h3>Prevalencia de Síndrome Metabólico en Chile</h3></div>
                
                <div class="col-md-10 col-md-offset-1 stadistics">
<div class="clear separator"></div>
                    <img src="<?php bloginfo('template_directory'); ?>/images/graph-sindrome.png" title="" rel="">
                </div>
                <div class="col-md-3 stadistics">

                </div>
              </div>
        	</div>
        </section>
		
        
        
        
        <!-- Sugerencias para varices  -->
        <section class="sugerences">
            <div class="container ">
                <div class="row">
                    <div class="col-md-7 col-md-offset-5 cta">
                        <h4>Hazte el Pack de la Vida hoy</h4>
                        
                        <p>El Síndrome Metabólico es reversible, pero las enfermedades crónicas no. Por consiguiente es fundamental prevenirlas a tiempo.</p>
                        <a  href="<?php echo get_page_link(7)?>" title="" rel="">Infórmate Más</a>
                    </div>
                </div>
            </div>  

        </section>
        <!-- Fin -->
        
        
        <!-- Modal -->
        <div class="modal fade container modal-inscripcion" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog col-md-10 col-md-offset-1" style="width:100%">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Inscríbete</h4>
              </div>
              <div class="modal-body">
                <?php echo do_shortcode('[contact-form-7 id="51" title="Inscripción Pack de la Vida"]')?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
        
<?php get_footer(); ?>