<!DOCTYPE html>
<html lang="<?php
echo get_html_lang();
?>">
<head>
	<meta charset="utf-8">
  <?php
if ($description = option('description')):
?>
  <meta name="description" content="<?php
    echo $description;
?>" />
  <?php
endif;
?>
  
  <title><?php
echo option('site_title');
echo isset($title) ? ' | ' . strip_formatting($title) : '';
?></title>

  <?php
echo auto_discovery_link_tags();
?>
  

  <!-- Plugin Stuff -->

  <?php
fire_plugin_hook('public_head', array(
    'view' => $this
));
?>

  <!-- Stylesheets -->

  <?php
queue_css_url('https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:300,300i,700,700');

queue_css_file('foundation');
queue_css_file('app');
echo head_css();
?>

  <!-- JavaScripts -->
  <?php
queue_js_file(array('app','vendor/jquery','vendor/custom.modernizr'));
?>

  <?php
echo head_js();
?>


</head>

<?php
echo body_tag(array(
    'id' => @$bodyid,
    'class' => @$bodyclass
));
?>
    <?php
fire_plugin_hook('public_body', array(
    'view' => $this
));
?>
	

<header>
		  <?php
fire_plugin_hook('public_header');
?>
		</header>
		
  <!-- wrapper for header image starts, closed in footer, but can be closed in page as well and reopened -->
	<div class="headWrapper">

		
		
		
		
		  <!-- start main menu -->
		<div id= mainMenu>
			
		
			<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="#"><?php
echo link_to_home_page(theme_logo());
?>
		  </a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li class="has-dropdown">
        <a href="#">the rescue</a>
        <ul class="dropdown">
          <li><a href="#">First link in dropdown</a></li>
          <li><a href="#">Second link in dropdown</a></li>
        </ul>
      </li>
    </ul>

    <!-- Left Nav Section -->
    <ul class="left">
      <li class="has-dropdown">
        <a href="#">the committee</a>
        <ul class="dropdown">
          <li><a href="#">First link in dropdown</a></li>
          <li><a href="#">Second link in dropdown</a></li>
        </ul>
      </li>
    </ul>

  </section>
</nav>
			
			
			
 </div> 
	
	
	
		  <!-- open up these divs to center the content from all pages, and set max width -->
	<div class="row">
		<div class="large-12 columns">