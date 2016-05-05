<?php get_header(); ?>
        
        <div style="height:200px"></div>
       
       <?php query_posts('page_id=417')?>
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


        <section class="container contactt white" style=" text-align:center">
            <div class="row">
                <h2>Listado de consultas Aló Doctor</h2>
                <div class="line-green"></div>
                <a href="<?php echo get_page_link(446)?>" class="btn btn-success">Descargar listado</a>
                <div class="clear separator" style="height:100px;"></div>
            </div>
        </section>
        <section class="container white" style="">
        	<div class="row">
            
            <div class="col-md-12 ">

                    <div class="separator clear"></div>
                    <?php
                        //Gather comments for a specific page/post 
                        $comments = get_comments(array(
                            'post_id' => $post->ID,
                            //'status' => 'approve', //Change this to the type of comments to be displayed
                            //'orderby' => 'ID',
                            'order' => 'ASC',
							'numberposts' => 99999
                        ));
                    ?>
                   
                   <table  class="table table-striped">
                   		
                        <tr>
                        	<th>#</th>
                        	<th>Nombre</th>
                            <th>Email</th>
                            <th>Consulta</th>
                        </tr>
                   		
                   	<?php $comentariocount = 0?>
                    <?php foreach($comments as $comentario):?>
                    
                        <tr>
                        	<?php if( $comentario->comment_parent == 0){?>
                            	<?php $comentariocount++;?>
                            	<td><?php echo $comentariocount?></td>
                                <td><?php echo $comentario->comment_author?></td>
                                <td><a href="mailto:<?php echo $comentario->comment_author_email?>"><?php echo $comentario->comment_author_email?></a></td>
                                <td><?php echo $comentario->comment_content?></td>
                        	<?php }?>
                        
                        </tr>
                    <?php endforeach;?>
                    </table>
                    
                    <div class="separator clear"></div> 
                
            </div>    
            
        	</div>
        </section>
        
        
        <?php endwhile; else: ?>
        Sorry, no posts matched your criteria.
        <?php endif; ?>

<?php get_footer(); ?>