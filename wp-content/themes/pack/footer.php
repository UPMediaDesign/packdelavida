		<?php if(is_page() && !is_page(164)){?>
        
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

<!-- Test IMC Script -->
  <script>
<?php if(is_home()){?>

function calculaIMC(){
  $('.resultado').removeClass('mostrar');
  
  var peso, altura, imc, leyenda;
  peso=document.getElementById("peso").value;
  altura=document.getElementById("altura").value/100;
  imc=peso/(altura*altura);
  
  
  
  document.getElementById("imc").innerHTML=imc.toFixed(2);
  if(imc<=18.49){
    $('#resultado-bajopeso').addClass('mostrar');
    $('.imc').addClass('mostrar');
    var peso = (altura * altura*18.49-peso).toFixed(1);
    $('.peso').html( peso );
    
    //leyenda="Estas Bajo Peso " + (altura*altura*20.5-peso).toFixed(1) + " kilos"+". Cuídate e ingresa a: <br><a class='pack' target='blank_' href='http://www.packdelavida.cl/landing-imc/bajopeso.html'>Sugerencias ante Bajo Peso</a>";
  }
else if(imc>=24.99 && imc<=29.99)
{
  $('#resultado-sobrepeso').addClass('mostrar');
  $('.imc').addClass('mostrar');
  var peso = (peso - altura * altura * 24.99).toFixed(1);
  $('.peso').html( peso );
//leyenda="Tienes sobrepeso "+(peso-altura*altura*25.5).toFixed(1) +" kilos"+". Cuídate e ingresa a: <br><a class='pack' target='blank_' href='http://www.packdelavida.cl/landing-imc/sobrepeso.html'>Sugerencias ante Sobrepeso</a>";
}
else if(imc>=30.00)
{
  $('#resultado-obesidad').addClass('mostrar');
  $('.imc').addClass('mostrar');
  var peso = (peso - altura * altura * 30.00).toFixed(2);
  $('.peso').html( peso );
//leyenda="Te encuentras obeso "+(peso-altura*altura*30.0).toFixed(1) +" kilos"+". Cuídate e ingresa a: <br><a class='pack' target='blank_' href='http://www.packdelavida.cl/landing-imc/obesidad.html'>Sugerencias ante Obesidad</a>";
}
else
 {
  $('#resultado-normal').addClass('mostrar');
  $('.imc').addClass('mostrar');
  $('.peso').html( peso );
 //leyenda="Peso Normal, debes mantenerte."+". Cuídate e ingresa a: <br><a class='pack' target='blank_' href='http://www.packdelavida.cl/landing-imc/normopeso.html'>Sugerencias ante Peso Normal</a>";
 }
document.getElementById("leyenda").innerHTML=leyenda;
 }
 //ya hice el test del IMC y mi resultado fue: imc
function share(){
  peso=document.getElementById("peso").value;
  altura=document.getElementById("altura").value/100;
  
  var imc = (peso/(altura*altura)).toFixed(1);
  
  var picture = 'http://upmedia.cl/IMC/images/share-ganar-IMC.png' ;
  FB.ui({
     method: 'feed',
     link: 'https://www.facebook.com/FundacionBanmedica/app_923615340994415',
     picture : picture,
     name : 'Mi índice de masa corporal es '+imc+'. Haz la prueba tu también',
     caption : 'Pack de la Vida',
     display: 'popup',
     actions : {"name" : "Calcula tu IMC", "link": 'http://www.packdelavida.cl'} ,
    
     description: 'Pierdele el miedo a medir tu salud, calcula tu IMC e informate de la importancia de llevar una dieta saludable.', 
     }, function(response){
       if (response && !response.error_code) {

      } else {
        
      }
    });
};
 
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
<?php }?>
</script>

<!-- Fin script Test IMC -->

<?php wp_footer();?>

<?php if(is_page(417)){?>  
    <script type="text/javascript">
	setTimeout(function(){var a=document.createElement("script");
	var b=document.getElementsByTagName("script")[0];
	a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0014/4114.js?"+Math.floor(new Date().getTime()/3600000);
	a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
	</script>
<?php }?>

</html>