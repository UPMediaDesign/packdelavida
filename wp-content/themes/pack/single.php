<?php get_header()?>
		<?php $topimagen = get_field('top_imagen' , 'category_3')?>
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
		
        
        
        
		
       
            
        	<section id="seccion-<?php echo $scounter?>" class="page-content single">
            	<div class="container white">
                	<div class="row about">
                    
                    	<div class="col-md-12">
                            <h2 id="que-son-las-varices"><?php echo $post->post_title?></h2>
                            <div class="line-green"></div>
                        </div>  
                        <div class="clear"></div>
                            <div class="col-md-8 col-md-offset-2">
                                <?php echo apply_filters('the_content' , $post->post_content)?>
                            </div>
                        </div>
                        <div class="clear"></div>
                </div>
            </section>
        	
            
           
            
        
        
<?php get_footer()?>