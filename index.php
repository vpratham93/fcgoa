<?php get_header();  ?>
<div class="container">

        <div class="row">
            <div>
                
                        <?php  
                            if (have_post()) :
                                while (have_post()) :
                                    the_post();?>
                                     <h2><?php the_title(); ?></h2>

                                     <?php the_content();?>
                               <?php endwhile;

                                    else :

                                    	echo '<p>No Content Found</p>';

                                    endif; 
                                ?>
        
                
            </div>
            
        </div>
        <!-- /.row -->

    </div>
<?php
get_footer();  ?>
