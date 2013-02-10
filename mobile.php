<?php
/*
Template Name: Mobile
*/
?>
<html>
<head>
	<title>Wordpress Mobile Projectt</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head>
<body>

<div data-role="page">
<header data-role="header">
<h1>Mobile Blog</h1>
</header>
<nav  data-role="navbar">
<ul>
	<li><a href="#" data-role="Button" >One</a></li>
	<li><a href="#secondpage" data-role="Button">Two</a></li>
	<li><a href="#" data-role="Button">Three</a></li>
	<li><a href="#" data-role="Button">Four</a></li>
</ul>
</nav>

<div id="postslist" data-role="content">

</div>

<footer data-role="footer">
<p>This is the footer</p>
</footer>
</div>


<div id="blogpost" data-role="page">
	<div data-role="header" 
		 data-position="fixed" 
		 data-theme="a" 
		 data-icon="back">
	<h1>Post</h1>	
	</div><!--header-->
	<div data-role="content">
	<div id="mypost"></div>
	</div><!--content-->
</div><!--page-->	


</body>


<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jsonfeed.js"></script>
<script src="<?php echo site_url();?>/?json=get_recent_posts&callback=listposts" type="text/javascript"></script>

<script src="<?php echo site_url();?>/?json=get_page_index&callback=dosomething" type="text/javascript"></script>

</html>
