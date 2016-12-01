<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

<a class="skip-link sr-only" href="#content">Skip to content</a>
<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="row navbar-header" style="width:100%">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
<div class="col-md-1">
      <img src="<?php echo get_template_directory_uri(); ?>/images/profile-tim-200x200.jpg" style=" height: 80px; float: left; ">
    </div>
      
  <div class="col-md-8">
      <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
      <div style="clear:both"><span class="navbar-tagline"><?php bloginfo('description'); ?></span></div>
    </div>

    <div class="collapse navbar-collapse" id="navbar">
      <div class="toggles">
        <div id="menu-toggle" class="toggle active" data-toggle="dropdown" data-target="menu-toggle-nav" title="Menu" aria-label="Menu">
          <span class="glyphicon glyphicon-menu-hamburger" data-target="menu-toggle-nav" aria-hidden="true"></span>
        </div>
	<div id="search-toggle" class="toggle" data-toggle="dropdown" data-target="search-toggle-nav" title="Search" aria-label="Search">
          <span class="glyphicon glyphicon-search" data-target="search-toggle-nav" aria-hidden="true"></span>
        </div>
      </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->

  <div id="menu-toggle-nav">
  <div class="container" style="clear:both;">
      <?php
            wp_nav_menu( array(
                'theme_location'    => 'navbar-left',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
  </div>
  </div><!-- /.container -->

  <div id="search-toggle-nav" class="clearfix">
  <div class="container">
    <form class="navbar-form" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <div class="col-md-8 input-group-lg">
        <input class="form-control" type="text" value="<?php echo get_search_query(); ?>" placeholder="Search..." name="s" id="s">
      </div>
      <button type="submit" id="searchsubmit" value="<?php esc_attr_x('Search', 'bst') ?>" class="col-md-4 btn btn-lg"><i class="glyphicon glyphicon-search"></i> Search</button>
    </form>
  </div>
  </div><!-- /.container -->

</div>
</nav>
  
<!--
Site Title
==========
If you are displaying your site title in the "brand" link in the Bootstrap navbar, 
then you probably don't require a site title. Alternatively you can use the example below. 
See also the accompanying CSS example in css/bst.css .

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 id="site-title">
      	<a class="text-muted" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
      </h1>
    </div>
  </div>
</div>
-->
