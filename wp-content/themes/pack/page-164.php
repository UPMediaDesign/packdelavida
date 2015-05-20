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
        
        <?php /*?>
        <?php if(is_page(164)){?>
            	<section style="background-color:#c2c2c2">
                <div class="clear separator"></div>
                	<div class="container">
                	  <div class="row">
                      	<div class="clinicas">
                        	<div class="col-md-8 col-md-offset-2">
                                    
								  <?php $clinicas = get_field('clinicas_asociadas' , 'options')?>
                                  <?php foreach( $clinicas as $clinica):?>
                                      <div class="col-xs-4 col-md-3 clinic">
                                          <a href="<?php echo $clinica['link_clinica']?>" target="_blank" title="Adquirir Pack de la vida en <?php echo $clinica['nombre_de_la_clinica']?>"><img src="<?php echo $clinica['logo_clinica']?>" width="100%" alt="" /></a>
                                      </div>
                                  <?php endforeach;?>
                             </div>
                           </div>
                      </div>
                	</div>
                    <div class="clear separator"></div>
                </section>
            <?php }?><?php */?>
            
            
            
            
            
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