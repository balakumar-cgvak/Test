<?php
// $Id: page.tpl.php,v 1.18.2.1 2009/04/30 00:13:31 goba Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
    <title><?php print $head_title ?></title>
    <meta http-equiv="Content-Style-Type" content="text/css" />
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
    <?php print $scripts; ?>
    <?php print $head ?>
    <style type="text/css" media="screen">
		object {outline:none;} 
	</style>
    <?php print $styles; ?>
<script type="text/javascript" language="javascript" >
	document.createElement('header');
	document.createElement('nav');
	document.createElement('slider');
	document.createElement('aside');
	document.createElement('figure');
	document.createElement('article');
	document.createElement('section');
	document.createElement('footer');
</script>
<script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'themes/alaska/js/vendor/zepto' : 'themes/alaska/js/vendor/jquery') +
  '.js><\/script>')
  </script> 
<script src="themes/alaska/js/foundation.min.js"></script>
<script>
    $(document).foundation();
  </script> 
<script type="text/javascript">
  
 $(".footer-1").click(function () {        
 		$(".slide-1").slideToggle("slow");
  });  
</script> 
<script type="text/javascript">
 $(".phone").click(function () {    
    $("#shopping").slideToggle("slow");
  });
</script> 
<script src="themes/alaska/js/jquery.js"></script> 
<script type="text/javascript">
	jQuery(document).ready(function(){
  jQuery('.f-menu').on('click', '.toggletrigger', function(e) { e.stopPropagation(); jQuery(this).next('.togglecontainer').slideToggle();})  
  jQuery('.f-menu').on('click', '.toggletrigger1', function(e){ e.stopPropagation();   jQuery(this).next('.togglecontainer1').slideToggle();})    
  
  jQuery('.f-menu').bind('click',function(e){   
   // event.preventDefault();   
       jQuery('.togglecontainer').slideToggle();  
       jQuery('.togglecontainer1').slideToggle();  
  });  
  
  });
</script>
	
</head>	

<body>
<header>
  <div class="header">
    <div class="row">
      <div class="large-12 less-space columns">
        <div class="nav">
		<?php if (is_array($primary_links)) : ?>
			<ul id="menu clearfix">
			<?php foreach ($primary_links as $link): ?>
				<li class=""><?php
				$href = $link['href'] == "<front>" ? base_path() : base_path() . drupal_get_path_alias($link['href']);
				print "<a href='" . $href . "'>" . $link['title'] . "</a>";
				?></li>
			<?php endforeach; ?>
			</ul>
		<?php endif; ?>
          <div class="clear"></div>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="header-mini">
  <p align="center"> <a href="index.html"><img style="vertical-align:middle" src="themes/alaska/img/logo-inner.png"/></a> </p>
  <div class="phone"> <a href="javascript:void"> <img src="themes/alaska/img/phone.png"> </a> </div>
  <ul id="shopping" style="display:none;">
    <li> <a class="sub-menu-call" href="tel:9073738684"> CALL <strong> 907.373.8684 </strong></a> </li>
  </ul>
  <div class="minimenu">
	<?php if (is_array($primary_links)) : ?>
	<ul id="menu clearfix">
	<?php foreach ($primary_links as $link): ?>
	<li class=""><?php
		$href = $link['href'] == "<front>" ? base_path() : base_path() . drupal_get_path_alias($link['href']);
		print "<a href='" . $href . "'>" . $link['title'] . "</a>";
		?></li>
	<?php endforeach; ?>
	</ul>
	<?php endif; ?>
  </div>
</div>
<slider>
  <div class="row">
    <div class="large-12 less-space columns slide-bg"> <?php print $banner; ?> <a href="#">
      <div class="logo-bg"> 
		 <?php if (!empty($logo)): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" >
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
		  <?php endif; ?>
	  </div>
      </a> </div>
  </div>
</slider>
<section>
  <div class="row">
    <div class="large-4 columns left-bar-shadow">
      <div class="news-section" style="min-height:450px;">
		<?php print $left; ?>
      </div>
    </div>
    <div class="news-section-1 small-bg-fix content-right">
      <div class="large-7 columns side-right-fix">
	  <?php if(!drupal_is_front_page()) { ?>
	  <h1><?php print $title; ?></h1>
	  <?php } ?>
	  <?php print $content; ?>
	  </div>
    </div>
  </div>

</section>
<footer>
  <div class="row">
    <div class="footer-links">
      <div class="large-4 columns">
        <div class="copy-right">
          <?php print $footer_message ?>
        </div>
      </div>
      <div class="large-8 columns">
		<?php if (is_array($menu_footerlinks)) : ?>
			<ul class="footer-links-list">
			<?php foreach ($menu_footerlinks as $link): ?>
				<li class=""><?php
				$href = $link['href'] == "<front>" ? base_path() : base_path() . drupal_get_path_alias($link['href']);
				print "<a href='" . $href . "'>" . $link['title'] . "</a>";
				?></li>
			<?php endforeach; ?>
			</ul>
		<?php endif; ?>
        <a href="javascript:" class="f-menu toggletrigger1"><img src="themes/alaska/img/footer-menu-bar.png" alt="menu" /></a>
        <div class="menu-content1 togglecontainer1" style="display:none;">
       	<?php if (is_array($menu_footerlinks)) : ?>
			<ul>
			<?php foreach ($menu_footerlinks as $link): ?>
				<li class=""><?php
				$href = $link['href'] == "<front>" ? base_path() : base_path() . drupal_get_path_alias($link['href']);
				print "<a href='" . $href . "'>" . $link['title'] . "</a>";
				?></li>
			<?php endforeach; ?>
			</ul>
		<?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</footer>

</body>
</html>