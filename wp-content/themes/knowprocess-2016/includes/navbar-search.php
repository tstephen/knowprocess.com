<?php
/*
Navbar search form
==================

If you don't want a search form in your navbar, then delete the link to this PHP page from within the navbar in header.php.

Then you can insert the Search Widget into the sidebar.
*/
?>

<!--<form class="navbar-form navbar-right" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="form-group">
		<input class="form-control" type="text" value="<?php echo get_search_query(); ?>" placeholder="Search..." name="s" id="s">
	</div>
	<button type="submit" id="searchsubmit" value="<?php esc_attr_x('Search', 'bst') ?>" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
</form>-->
<div class="toggles">
	<div id="menu-toggle" class="toggle active" title="Menu"><span class="screen-reader-text">Menu</span></div>
	<div id="search-toggle" class="toggle" title="Search"><span class="screen-reader-text">Search</span></div>
</div>

<div id="menu-toggle-nav" class="panel" style="clear:both;display: block;">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

			<div class="menu"><ul><li class="current_page_item"><a href="http://new.knowprocess.com/">Home</a></li><li class="page_item page-item-5"><a href="http://new.knowprocess.com/about/">About</a></li><li class="page_item page-item-2"><a href="http://new.knowprocess.com/sample-page/">Home</a></li><li class="page_item page-item-157"><a href="http://new.knowprocess.com/login/">Login</a></li><li class="page_item page-item-150"><a href="http://new.knowprocess.com/profile/">Profile</a></li><li class="page_item page-item-152"><a href="http://new.knowprocess.com/register/">Register</a></li><li class="page_item page-item-165"><a href="http://new.knowprocess.com/test-stock-item/">Test Product Catalog</a></li></ul></div>
		</nav><!-- #site-navigation -->
	</div>

<div id="search-toggle-nav" class="panel" style="">
		<div class="search-wrapper">
			<form role="search" method="get" class="search-form" action="http://new.knowprocess.com/">
	<label>
		<span class="screen-reader-text">Search for:</span>
		<input type="search" class="search-field" placeholder="Search …" value="" name="s">
	</label>
	<input type="submit" class="search-submit" value="Search">
</form>
		</div>
	</div>
