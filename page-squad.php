<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		
			 <h1><?php if (is_page(251)){?>

Thank You
            	<?php } ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<div class="clearfix">
<div class="container">
<div class="row-centered" id="gallery1">
  <div class="col-sm-6 col-xs-12">
     <img class="img-responsive" src="http://localhost/wordpress/wp-content/uploads/2017/05/Portfolio01.png" " alt="port">
      <div class="caption">
	  <h6>5 Mar 2016</h6>
        <h3><strong>Lorem Ipsum to hold public screenings in ABC and XYZ</strong></h3>
        <p class="gallery1">Public screenings of the semi final matches have been planned for the benefit of fans and supporters.. FC Goa</p>
	</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
 <img class="img-responsive" src="http://localhost/wordpress/wp-content/uploads/2017/05/Portfolio01.png"  alt="port">
      <div class="caption">
	  <h6>5 Mar 2016</h6>
      <h3><strong>Lorem Ipsum to hold public screenings in ABC and XYZ</strong></h3>
     <p  class="gallery1">Public screenings of the semi final matches have been planned for the benefit of fans and supporters.. FC Goa</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
<img class="img-responsive" src="http://localhost/wordpress/wp-content/uploads/2017/05/Portfolio01.png"  alt="port">
 <div class="caption">
 <h6>5 Mar 2016</h6>
        <h3><strong>Lorem Ipsum to hold public screenings in ABC and XYZ</strong></h3>
        <p class="gallery1">Public screenings of the semi final matches have been planned for the benefit of fans and supporters.. FC Goa</p>
</div>
</div>
</div>
</div>
</div>

				<?php the_content(); ?>

			

				

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'pratham' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>

