		<?php if(is_page() && !is_page(164)){?>
        <div class="clear separator"></div>
        <section>
        	
        <!-- Sugerencias para varices  -->
        <div class="suscribe">
                <div class="row">
                    <div class="col-md-12 obten">
                        <h3>Hazte tu Pack de la Vida</h3>
                        <a title="Obten tu Pack de la vida" rel="" href="<?php echo get_page_link(164)?>" >Ingresa Aquí</a>
                    </div>
                </div>
            </div>
        <!-- Fin -->
        
        </section>
        <?php }?>
      
       <!-- Inicio Footer -->
        <footer class="pinkfoot">
            <div class="container">
                <div class="row">
                	<div class="col-md-3">
                    	 <?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'footernav' , 'theme_location' => 'secondary' ) ); ?>
                    </div>
                	
                

                    <div class="col-md-3 credits">
                        <span>Una iniciativa de:</span>
                        <a href="http://www.fundacionbanmedica.cl" title="Fundación Banmédica" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_directory'); ?>/images/logo-white.png"></a>
                        <p>Por un Chile más saludable y feliz.</p>
                    </div>

                    <div class="col-md-6 credits">
                    	
                    	<span>Clínicas asociadas:</span>
                        <div class="clear"></div>
                       <?php  /* <h5>Newsletter</h5>  */?> 
                       <?php //echo do_shortcode('[contact-form-7 id="50" title="Suscripción newsletter"]')?>
                        
                        	<div class="clinicas">
                                    
								  <?php $clinicas = get_field('clinicas_asociadas' , 'options')?>
                                  <?php foreach( $clinicas as $clinica):?>
                                      <div class="col-xs-4 col-md-3 clicnics">
                                          <a href="<?php echo $clinica['link_clinica']?>" target="_blank" title="Adquirir Pack de la vida en <?php echo $clinica['nombre_de_la_clinica']?>"><img src="<?php echo $clinica['logo_clinica']?>" width="100%" alt="" /></a>
                                      </div>
                                  <?php endforeach;?>
                             </div>
                                
                    </div>  
                </div>
            </div>

            <div class="container bordered-foot">
                <div class="row ">
                    <div class="col-md-12 copyrighted">
                        <span class="">Todos los derechos reservados</span>
                    </div>
                </div>
            </div>

        </footer>
        <!-- Fin del footer -->

    </body>
    
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51568418-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>
    
    
    

</html>