<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>		
	<title>XO-NAOMI</title>
	<meta property="og:title" content="XO-NAOMI" /> 
	<meta property="og:url" content="http://www.XO-NAOMI.com" />
	<meta property="og:image" content="http://www.xo-naomi.com/wp-content/themes/XO/img/BaGua.jpg"/>
	<meta property="og:site_name" content="XO-NAOMI" />
	
	<link rel="stylesheet" media="all" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link rel="icon" type="image/gif" href="<?php bloginfo('template_url'); ?>/img/XOicon.gif" />
	
	<script type="text/javascript" charset="utf-8" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_url'); ?>/js/js.js"></script>
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25316791-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

	</script>
</head>
<body>
<div id="bd">
	<div id="hd">
		<h1>XO-NAOMI</h1>
		<ul>
			<li <?php if (is_home()) {echo 'class="current-cat"';} ?>><a href="<?php echo get_option('home'); ?>">Weblog</a></li>
			<?php //wp_list_categories('title_li=&exclude=1'); ?>
			<?php
				$categories = wp_list_categories('title_li=&exclude=1&order=desc&echo=0');
				$categories = preg_replace('/title=\"(.*?)\"/','',$categories);
				echo $categories;
			?>
			
			<?php //wp_list_pages('title_li='); ?>
			<?php
				$pages = wp_list_pages('title_li=&echo=0');
				$pages = preg_replace('/title=\"(.*?)\"/','',$pages);
				echo $pages;
			?>
		</ul>
	</div>
	<div id="content">