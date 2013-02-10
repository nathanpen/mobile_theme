<?php get_header(); ?>
<body>
<section id="home" data-role="page">
<div data-role="content">
<h1>CLEAN &<br />
	FUTURISTIC</h1>
<h2 class="home_heading_sub">This is a descriptor for the heading</h2>
<img src="<?php bloginfo('template_url'); ?>/images/image1.jpg" class="home_main_img">

<ul class="home_menu">
<li><a href="#page2" data-transition="slide">who<br />am i</a></li>
<li><a href="">blog<br />stuff</a></li>
<li><a href="">vid<br />eo</a></li>
<li><a href="">call<br />me</a></li>
<li><a href="">feat<br />ures</a></li>
<li><a href="">con<br />tact</a></li>
<ul>
</div>
<div data-role="content">

<footer data-role="footer" data-position="fixed">
<div data-role="controlgroup" data-type="horizontal" class="bottom_nav">
<a href="#home" data-role="button" data-transition="slideup">to top</a>
<a href="index.html" data-role="button">contact</a>
<a href="index.html" data-role="button">sitemap</a>
</div>
</div>
</footer>


</section><!--home page-->



<sction id="page2" data-role="page">
<div data-role="content">
<h1>CLEAN &<br />
	FUTURISTIC</h1>
<h2>About Me</h2>
<footer data-role="footer" data-position="fixed">
<div data-role="controlgroup" data-type="horizontal" class="bottom_nav">
<a href="#home" data-role="button" data-transition="slideup">to top</a>
<a href="index.html" data-role="button">contact</a>
<a href="index.html" data-role="button">sitemap</a>
</div>
</div>
</footer>
</section>

</body>
<div>




<?php get_footer(); ?>


