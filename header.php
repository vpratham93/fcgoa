	<?php /* this is header file */ ?>
<!DOCTYPE html>

<html lang="en">
<head>

        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
 <link rel="stylesheet" type="text/css" href="style.css">
 <link rel="stylesheet" type="text/css" href="style2.css">
<link href="https://fonts.googleapis.com/css?family=Squada+One" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     
<?php wp_head(); ?>


    </head>
    <body <?php body_class(); ?>>

        
        <div class="wrapper">

        
            <header class="header clear" role="banner">
<div id="first" class="navbar1">
<div class="container">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar1">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> 
      <div class="collapse navbar-collapse" id="myNavbar1">
      <ul class="nav navbar-nav navbar-right">
              
<?php wp_nav_menu( $args = array(
    
                                
                                'theme_location' => 'primary',
                                
                                ) ); ?>

      </ul>
    </div>
</div>
</div>

<div id="second1" class="navbar2">
<div class="container">
<div id="second4" class="navbar2">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar2">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> 
      <div class="collapse navbar-collapse" id="myNavbar2">
      <ul class="nav navbar-nav navbar-right">   

<?php wp_nav_menu( $arg = array(
    
'theme_location' => 'top-menu',
                                
                                ) ); ?>

    </div>
</div>
</div>
</div>
<div class="row" id="news">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="container-fluid">
<center><h2 class="news-heading">- NEWS -</h2></center>
</div>
</div>
</div>
<div class="container">
<h3 class="heading">LATEST NEWS</h3>
<hr>
<div class="row-centered">
<div class="col-md-12 col-xs-12 col-sm-12">
<form class="form-inline">
<div class="form-group">
<label for="email">Search news for:</label>
<input type="text" class="form-control" placeholder="Players,match etc.">
</div>
<div class="form-group">
  <button class="btn btn-defualt dropdown-toggle" type="button" data-toggle="dropdown">2016
  <span class="caret"></span></button>
  <button class="btn" id="btn">Go</button>
</div>
</form>
</div>
</div>


</header>
