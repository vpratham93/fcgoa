<?php get_header(); ?>
	

<div class="container">

        <div class="row">
            <div>
                
                <h3>
                  
                </h3>
                <main>
                        <?php  
                            if (have_post()) :
                                while (have_post()) :
                                    the_post();
                                        the_content();
                                endwhile;
                            endif;
        
                        ?>
                
                </main>
            </div>
            
        </div>
        <!-- /.row -->

    </div>



<?php get_footer(); ?>
