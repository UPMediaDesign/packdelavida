<?php
/*
Template Name: Intra
*/
?>
<?php get_header()?>
		<?php $topimagen = get_field('top_imagen' , $post->ID)?>
        <div class="varices" style="background-image:url(<?php echo $topimagen?>)">
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
		
        <?php $contenidos = get_field('contenedor');?>
        
        <!-- Subnavegación verde -->
        <section>
            <div class="container green-nav">
                    <div class="row">
                        <ul class="col-md-12 ">
                        	<?php $scounter = 0?>
                        	<?php foreach($contenidos as $contenido):?>
                            <?php $scounter++?>
                            <?php if($contenido["navegacion_seccion"]){?>
                            <li><a href="#seccion-<?php echo $scounter?>" title="<?php echo $contenido["titulo_seccion"]?>" rel=""><?php echo $contenido["navegacion_seccion"]?></a></li>
                            <?php }?>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            
        </section>
        <!-- Fin Subnavegación verde -->
		
        
        <?php $scounter = 0;?>
        <?php foreach($contenidos as $contenido):?>
        	<?php $scounter++?>
            
            
            
        	<section id="seccion-<?php echo $scounter?>" class="page-content <?php if($contenido["especial"]){echo 'caja';}?>">
            	<div class="container white">
                	<div class="row about">
                    
                    	<div class="col-md-12">
                            <h2 id="que-son-las-varices"><?php echo $contenido["titulo_seccion"]?></h2>
                            <div class="line-green esp-<?php echo $scounter?>"></div>
                        </div>  
                        <div class="clear"></div>
                        <?php if($contenido["acf_fc_layout"] == 'col-md-12'){?>
                        
                        	<?php if($contenido["alineacionesp"]){?>
                            	<?php if($contenido['alineacion'] == 'izq'){?> 
                                    <div class="col-md-3 col-md-offset-1 vineta">
                                       <img src="<?php echo $contenido["imagen_caja"]?>" alt="" />
                                    </div>
                                    <div class="col-md-7">
                                        <?php echo apply_filters('the_content' , $contenido["editor"])?>
                                    </div>
                                <?php }elseif($contenido['alineacion'] == 'der'){?>
                                    <div class="col-md-7 col-md-offset-1">
                                        <?php echo apply_filters('the_content' , $contenido["editor"])?>
                                    </div>
                                    <div class="col-md-3 vineta">
                                        <img src="<?php echo $contenido["imagen_caja"]?>" alt="" />
                                    </div>
                                <?php }else{?>
                                	<div class="col-md-10 col-md-offset-1">
                                        <?php echo apply_filters('the_content' , $contenido["editor"])?>
                                    </div>
                                <?php }?>

                                
                                
                            <?php }else{?>
                            <div class="col-md-8 col-md-offset-2">
                                <?php echo apply_filters('the_content' , $contenido["editor"])?>
                            </div>
                            <?php }?>
                            <?php if($contenido["especial"]){?>
                                <style type="text/css">
                                	.esp-<?php echo $scounter?>{ display:none}
                                </style>
                            <?php }?>
                            
                        <?php }elseif($contenido["acf_fc_layout"] == 'col-md-6'){?>
                            <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                <?php echo apply_filters('the_content' , $contenido["columna_1"])?>
                            </div>
                            <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                <?php echo apply_filters('the_content' , $contenido["columna_2"])?>
                            </div>
                        <?php }elseif($contenido["acf_fc_layout"] == 'col-md-4'){?>
                            <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                <?php echo apply_filters('the_content' , $contenido["columna_1"])?>
                            </div>
                            <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                <?php echo apply_filters('the_content' , $contenido["columna_2"])?>
                            </div>
                            <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                <?php echo apply_filters('the_content' , $contenido["columna_3"])?>
                            </div>
                        <?php }elseif($contenido["acf_fc_layout"] == 'col-md-3'){?>
                            <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                <?php echo apply_filters('the_content' , $contenido["columna_1"])?>
                            </div>
                            <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                <?php echo apply_filters('the_content' , $contenido["columna_2"])?>
                            </div>
                            <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                <?php echo apply_filters('the_content' , $contenido["columna_3"])?>
                            </div>
                            <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                <?php echo apply_filters('the_content' , $contenido["columna_4"])?>
                            </div>
                        <?php }elseif($contenido["acf_fc_layout"] == 'col-md-2'){?>
                            <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                <?php echo apply_filters('the_content' , $contenido["columna_1"])?>
                            </div>
                            <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                <?php echo apply_filters('the_content' , $contenido["columna_2"])?>
                            </div>
                            <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                <?php echo apply_filters('the_content' , $contenido["columna_3"])?>
                            </div>
                            <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                <?php echo apply_filters('the_content' , $contenido["columna_4"])?>
                            </div>
                            <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                <?php echo apply_filters('the_content' , $contenido["columna_5"])?>
                            </div>
                            <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                <?php echo apply_filters('the_content' , $contenido["columna_6"])?>
                            </div>
                        <?php }elseif($contenido["acf_fc_layout"] == 'col-md-20'){?>
                            <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                <?php echo apply_filters('the_content' , $contenido["columna_1"])?>
                            </div>
                            <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                <?php echo apply_filters('the_content' , $contenido["columna_2"])?>
                            </div>
                            <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                <?php echo apply_filters('the_content' , $contenido["columna_3"])?>
                            </div>
                            <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                <?php echo apply_filters('the_content' , $contenido["columna_4"])?>
                            </div>
                            <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                <?php echo apply_filters('the_content' , $contenido["columna_5"])?>
                            </div>
                        <?php }elseif($contenido["acf_fc_layout"] == 'acordion'){?>
                        	<div class="col-md-8 col-md-offset-2 flex">
                            <div class="panel-group" id="accordion">
                            <?php $acordeones = $contenido["acordeones"];?>
                            <?php $acocounter = 0?>
                            <?php foreach($acordeones as $acordeon):?>
                            	<?php $acocounter++?>
                            	<div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#acordeon-<?php echo $acocounter?>">
                                      <?php echo $acordeon['titulo']?>
                                    </a>
                                  </h4>
                                </div>
                                <div id="acordeon-<?php echo $acocounter?>" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    <?php echo $acordeon['contenido']?>
                                  </div>
                                </div>
                              </div>
                            <?php endforeach;?>
                            </div>
                            </div>
                        <?php }?>
                        
                        </div>
                        <div class="clear separator"></div>
                </div>
            </section>
        	
            
           
            
        <?php endforeach;?>
        
        
        <?php if(is_page(164)){?>
            	<section id="seccion-2" class="page-content ">
            	<div class="container white">
                	<div class="row about">
                    
                    	<div class="col-md-12">
                            <h2 id="que-son-las-varices">¿Dónde me hago el Pack de la Vida?</h2>
                            <div class="line-green esp-2"></div>
                        </div>  
                        <div class="clear"></div>
                        
                        <style>
						.clinics, .clinics h3 , .clinics p{ text-align: left !important}
						.clinics p{ font-size:16px !important}
                        .clinics img{ width:120px !important; height:120px; margin-bottom:0px !important}
						
						
						.wpcf7 input, .wpcf7 textarea {
padding: 10px;
margin-bottom: 10px;
width: 100%;
border-radius: 5px;
border: 1px solid #39b5e4;
font-size: 18px;
 background-color:#f2f2f2
}

.wpcf7 .wpcf7-submit{ background-color: #39b5e4; color:#fff; font-weight:700}
						
                        </style>
                        
                        
                        
                        <div class="col-md-6 clinics">
                        
                        	<div class="flex">
                                <a href="http://www.clinicasantamaria.cl/" target="_blank"><img class="alignleft size-full wp-image-281" src="http://www.packdelavida.cl/wp-content/uploads/2014/11/Clinica-Santa-Maria.jpg" alt="Clinica-Santa-Maria" width="120" height="120"></a><h3>Clínica Santa María</h3> 
<p>Av. Santa María 0500, Providencia, Santiago de Chile.<br>Mesa Central: (`+562) 2 913 33 96</p>
                            </div>
                            <div class="clear"></div>
                            <div class="flex">
                                <a href="http://www.clinicasantamaria.cl/" target="_blank"><img class="alignleft size-full wp-image-281" src="http://www.packdelavida.cl/wp-content/uploads/2014/11/santamarialadehesa.png" alt="Clinica-Santa-Maria" width="120" height="120"></a><h3>Centro Médico Clínica Santa María La Dehesa</h3>
<p>Avda. La Dehesa 1445, La Dehesa, Santiago de Chile.<br>Mesa Central: (+562) 2 913 33 96</p>
                            </div>
                            <div class="clear"></div>
                            <div class=" flex">
                                <a href="http://www.davila.cl/pack-de-la-vida" target="_blank"><img class="alignleft size-full wp-image-283" src="http://www.packdelavida.cl/wp-content/uploads/2014/11/Clinica-Davila.jpg" alt="Clinica-Davila" width="120" height="120"></a><h3>Clínica Dávila</h3>
<p>Avenida Recoleta 464, Santiago<br>Mesa Central<strong>:</strong> (+562) 2 730 80 00</p>
                            </div>
                            <div class="clear"></div>
                            <div class=" flex">
                                <a href="http://www.vidaintegra.cl/pack-de-la-vida.asp"><img class="alignleft wp-image-284 size-full" src="http://www.packdelavida.cl/wp-content/uploads/2014/11/Vida-Integra.jpg" alt="Vida-Integra" width="120" height="120"></a><h3>Vida Integra</h3>
<p>Fono: 600 600 8432 / (Celulares) 02 2 233 37 00</p>
                            </div>
                            
                            <div class="clear"></div>
                            
                            <div class="flex">
                                <a href="http://www.clinicavespucio.cl/pack.php" target="_blank"><img class="alignleft wp-image-285 size-full" src="http://www.packdelavida.cl/wp-content/uploads/2014/11/Clinica-Vespucio.jpg" alt="Clinica-Vespucio" width="120" height="120"></a><h3>Clínica Vespucio</h3>
<p>Av. Serafín Zamora 190, La Florida<br>Mesa Central:  (+562) 2 820 69 13</p>
                            </div>
                            <div class="clear"></div>
                            <div class=" flex">
                                <a href="http://ccdm.cl/PDV/" target="_blank"><img class="alignleft wp-image-286 size-full" src="http://www.packdelavida.cl/wp-content/uploads/2014/11/Clinica-Ciudad-Mar.jpg" alt="Clinica-Ciudad-Mar" width="120" height="120"></a><h3>Clínica Ciudad del Mar</h3>
<p>13 Norte 635, Viña del Mar<br>Fono: 5-778 88 76</p>
                            </div>
                            <div class="clear"></div>
                            <div class=" flex">
                                <a href="http://www.clinicabiobio.cl/" target="_blank"><img class="alignleft size-full wp-image-288" src="http://www.packdelavida.cl/wp-content/uploads/2014/11/ClinicaBioBio.jpg" alt="ClinicaBioBio" width="120" height="120"></a><h3>Clínica Bio Bío</h3>
<p>Avenida Jorge Alessandri 3515, Talcahuano<br>Mesa Central: 41 – 273 42 00</p>
                            </div>
                                                
                        </div>
                        
                        	
                        <div class="col-md-6">
                        	<?php echo do_shortcode('[contact-form-7 id="51" title="Inscripción Pack de la Vida"]')?>
                        </div>
                            
                            
                        <div class="clear separator"></div>
                </div>
            </section>
            <?php }?>
            
            
            
            
            
              <script>
        jQuery(document).ready(function(){
            $('a[href^="#"]').on('click',function (e) {
                e.preventDefault();

                var target = this.hash;
                $target = $(target);

                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top
                }, 800, 'swing', function () {
                    window.location.hash = target;
                });
            });
        });
        </script>
        
<?php get_footer()?>