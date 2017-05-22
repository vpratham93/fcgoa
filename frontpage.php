<?php get_header(); ?>
	<div class="container">    
<?php /* main body vontent having images post titles and description */ ?>
            
    <div class="col-xs-12">
    <?php  
                if (have_posts()) :
                    while (have_posts()) :  
                        the_post();?>
                            
                            <artical>
                                <span  class="col-xs-12 col-md-4">
                                <a href="#">
                                    <img class="Rectangle-7-copy-4 img-responsive" src="<?php bloginfo('template_url') ?>" alt="">
                                </a>
                                    <?php the_time('d F Y'); ?>
                                    <h3 style="margin-top: 1%;">
                                        <a href="<php? the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                
                                    <p style="margin-bottom: 3%;"><?php the_content(); ?></p>
                            </span>
                                    <?php
                                
                                    endwhile;
                                    endif; 
                                ?>
                                    
                            </artical>
        <br><br>

                        </div>
                
</div>
		  




<?php get_footer(); ?>
