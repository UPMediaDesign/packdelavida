<?php 
	header("Content-type: application/vnd.ms-excel" ) ; 
	header("Content-Disposition: attachment; filename=export_preguntas.xls" ) ; 
    
	query_posts('page_id=417');
	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php
        //Gather comments for a specific page/post 
        $comments = get_comments(array(
            'post_id' => $post->ID,
            //'status' => 'approve', //Change this to the type of comments to be displayed
            //'orderby' => 'ID',
            'order' => 'ASC',
            'numberposts' => 9999999
        ));
    ?>
                   
                   <table>
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
                          
        <?php endwhile; else: ?>
        Sorry, no posts matched your criteria.
        <?php endif; ?>