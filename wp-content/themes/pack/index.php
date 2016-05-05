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

        <!-- Botón Flotante -->
        <aside class="float-cta">
            <a href="http://www.packdelavida.cl/hazte-el-pack/">
                <img src="<?php bloginfo('template_directory')?>/images/float_cta.png" alt="">
            </a>
        </aside>

        <!-- Formulario -->
        <section class="white">
            <div class="container test-imc">
                <div class="row">
                    
                    <div class="col-md-12 col-xs-12 row">
                        <h3>Conóce tu IMC</h3>
                        <p>Ingresa los datos a continuación para calcular tu Índice de Masa Corporal.</p>

                        <div class="col-md-4 form">
                            <p>Peso (kg) </p>
                            <input type="text" class="number" name="peso" id="peso" size="3" maxlength="3" onkeypress="return isNumberKey(event)">
                        </div>
                        <div class="col-md-4 form">
                            <p>Altura (cm) </p>
                            <input type="text" class="number" name="altura" id="altura" size="3" maxlength="3" onkeypress="return isNumberKey(event)">
                        </div>
                        <div class="col-md-4 cta">
                            <a class="btn" onClick="calculaIMC()">Calcular IMC</a>
                        </div>

                        <div class="col-md-12 result-test">
                        <p class="imc resultado">Tienes un IMC de: <span id="imc"></span></p>
                        <div id="resultado-bajopeso" class="resultado col-md-12 row">
                            <p>Estás bajo peso, te faltan al menos <strong><span class="peso"></span> kgs.</strong> para llegar a tu peso ideal, cuídate y sigue los consejos para <a href="http://packdelavida.cl/landing-imc/bajopeso.html?utm_source=facebook&utm_medium=app&utm_content=button-share&utm_campaign=Descubre-tu-IMC" rel="help" class="outside" target="_blank">Bajo Peso</a></p>
                            <div class="clear"></div>
                            <div class="col-md-6 col-sm-6">
                                <a class="greenbutton" href="http://packdelavida.cl/landing-imc/bajopeso.html?utm_source=facebook&utm_medium=app&utm_content=button-share&utm_campaign=Descubre-tu-IMC" title="Ir a Pack de la Vida" rel="help">Sube de Peso Aquí</a>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <a class="sharebutton" onclick="share();" title="Compartir" rel="nofollow">Compartir en Facebook</a>
                            </div>
                        </div>
                        
                        <div id="resultado-normal" class="resultado col-md-12 row">
                            <p>Peso Normal, debes mantenerte, cuídate y sigue los consejos para <a href="http://packdelavida.cl/landing-imc/normopeso.html?utm_source=facebook&utm_medium=app&utm_content=button-share&utm_campaign=Descubre-tu-IMC" title="Ver consejos para mantener Peso Normal" rel="help" class="outside" target="_blank">Peso Normal</a></p>
                            <div class="col-md-6 col-sm-6">
                                <a class="greenbutton" href="http://packdelavida.cl/landing-imc/normopeso.html?utm_source=facebook&utm_medium=app&utm_content=button-share&utm_campaign=Descubre-tu-IMC" title="Ir a Pack de la Vida" rel="help">Informate sobre tu IMC Aquí</a>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <a class="sharebutton" onclick="share();" title="Compartir" rel="nofollow">Compartir en Facebook</a>
                            </div>
                        </div>
                        
                        <div id="resultado-sobrepeso" class="resultado col-md-12 row">
                            <p>Tienes sobrepeso, debes bajar <strong><span class="peso"></span> kgs.</strong> para llegar a tu peso ideal, cuídate y sigue los consejos para <a href="http://packdelavida.cl/landing-imc/sobrepeso.html?utm_source=facebook&utm_medium=app&utm_content=button-share&utm_campaign=Descubre-tu-IMC" class="outside" target="_blank" rel="help" title="Ver consejos ante sobrepeso">Sobrepeso</a></p>
                            <div class="col-md-6 col-sm-6">
                                 <a class="greenbutton" href="http://packdelavida.cl/landing-imc/sobrepeso.html?utm_source=facebook&utm_medium=app&utm_content=button-share&utm_campaign=Descubre-tu-IMC" title="Ir a Pack de la Vida" rel="help">Baja de Peso Aquí</a>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <a class="sharebutton" href="#" onclick="share();" title="Compartir" rel="nofollow">Compartir en Facebook</a>
                            </div>
                        </div>
                        
                        <div id="resultado-obesidad" class="resultado col-md-12 row">
                            <p>Te encuentras obeso, debes bajar <strong><span class="peso"></span> kgs.</strong> para llegar a tu peso ideal, cuídate y sigue los consejos para <a href="http://packdelavida.cl/landing-imc/obesidad.html?utm_source=facebook&utm_medium=app&utm_content=button-share&utm_campaign=Descubre-tu-IMC" class="outside" target="_blank" title="Ver consejos ante obesidad" rel="help">Obesidad</a></p>
                            <div class="col-md-6-col-sm-6">
                                <a class="greenbutton col-md-6 col-sm-6" href="http://packdelavida.cl/landing-imc/obesidad.html?utm_source=facebook&utm_medium=app&utm_content=button-share&utm_campaign=Descubre-tu-IMC" title="Ir a Pack de la Vida" rel="help">Baja de Peso Aquí</a>
                            </div>
                            <div class="col-md-6-col-sm-6">
                                <a class="sharebutton col-md-6 col-sm-6" href="#" onclick="share();" title="Compartir" rel="nofollow">Compartir en Facebook</a>
                            </div>
                        </div>
                
                    </div>


                    </div>


                </div>
            </div>
        </section>


        <!-- Fin Formulario -->


        <!-- Que es el Pack -->
        <section class="blue-girl">
            <div class="container ">
                <div class="row">

                    <div class="col-md-7 consult">
                        <h3>¿Qué es el Pack de la Vida?</h3>
                        <p>
                            El Pack de la Vida, es un nuevo e inédito conjunto de <strong>5 evaluaciones más una consulta médica</strong> que te permitirá conocer si tienes <strong>Síndrome Metabólico</strong>. Este examen puede salvar tú vida, ya que podrás detectar a tiempo el desarrollo de Enfermedades Crónicas no Transmisibles. 
                        </p>
                    </div>
                    <div class="clear separator"></div>

                </div>
            </div>
        </section>

        <section class="white">
            
            <div class="container">
                <div class="row">

                    <div class="examenes">
                        <h3>Pack de la Vida: 5 Exámenes + Una consulta médica</h3>


                        <div class="row">
                            <?php $examenes = get_field('examenes' , 'options')?>
                            <?php foreach($examenes as $examen):?>
                            <div class="col-md-20 examenes">
                                <img src="<?php echo $examen['imagen_examen']?>" alt="" />
                                <h4><?php echo $examen['nombre_examen']?></h4>
                            </div>
                            <?php endforeach?> 
                            
                        </div>
                    </div>
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
                    <div class="col-md-6 content cta">
                        <h3>Aló Doctor</h3>
                        <span>VOCERO MÉDICO</span>
                        <p>El 70% de las muertes en Chile, están relacionadas directa e 
indirectamente a malos hábitos de alimentación y estilos de vida.
El Dr. Jara, vocero médico de la Fundación Banmédica, está a tu disposición para orientarte en el cuidado de la diabetes, hipertensión y enfermedades cardiovasculares. Haz tus preguntas online.</p>
                        <a href="<?php echo get_page_link(417)?>">Preguntale al Doctor</a>
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
                    <p>La temprana detección del Síndrome Metábolico resulta fundamental para prevenir el desarrollo de Enfermedades Crónicas No Transmisibles. Previene a tiempo, después puede ser demasiado tarde</p>
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
                
                <div class="col-md-6 stadistics">
                    <div class="clear separator"></div>
                    <img src="<?php bloginfo('template_directory'); ?>/images/grafico-home_.png" alt="Porcentaje Edad/Pobalción" >
                </div>
                <div class="col-md-6 stadistics">
                    <div class="clear separator"></div>
                    <img src="<?php bloginfo('template_directory'); ?>/images/grafico-home_right.png" alt="1 de cada 3 Chilenos tiene Síndrome Metabólico">
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