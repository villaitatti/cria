<?php echo head(array('title' => metadata('exhibit', 'title'), 'bodyclass'=>'exhibits summary')); ?>

<h1><?php echo metadata('exhibit', 'title'); ?></h1>
<?php echo exhibit_builder_page_nav(); ?>

<div id="primary">
<?php if ($exhibitDescription = metadata('exhibit', 'description', array('no_escape' => true))): ?>
<div class="exhibit-description">
    <?php echo $exhibitDescription; ?>
</div>
<?php endif; ?>

<?php if (($exhibitCredits = metadata('exhibit', 'credits'))): ?>
<div class="exhibit-credits">
    <h3><?php echo __('Credits'); ?></h3>
    <p><?php echo $exhibitCredits; ?></p>
</div>
<?php endif; ?>
</div>

<?php
//echo $_SERVER['REQUEST_URI'];
if (strpos($_SERVER['REQUEST_URI'],'exhibits/show/the-rescue') != false) {
?>
    
<h1><b>A CITY WOUNDED</b></h1>
<div style="max-width: 85.375rem; width: 100%;">
 <div style="float: left; width: 30%;">
     <h2><b><a href="the-rescue/destruction">Destruction</a></b></h2>
     <h6 style="text-transform:uppercase;"><b>14 Photographs</b></h3>
 </div>
 <div style="float: left; width: 30%;">
     <h2><b><a href="the-rescue/people">People</a></b></h2>
     <h6 style="text-transform:uppercase;"><b>12 Photographs</b></h3>
 </div>
 <div style="float: left; width: 30%;">
     <h2><b><a href="the-rescue/cultural-heritage">Cultural Heritage</a></b></h2>
     <h6 style="text-transform:uppercase;"><b>12 Photographs</b></h3>
 </div>
 <br style="clear: left;" />
</div>
<div><h1><b>CRIA'S PROJECTS</b></h1></div>
<div style="max-width: 85.375rem; width: 100%;">
 <div style="float: left; width: 24%;">
     <h2><b><a href="the-rescue/monuments---museums">Monuments &amp; Museums</a></b></h2>
     <h6 style="text-transform:uppercase;"><b>13 Photographs</b></h3></div>
<div style="float: left; width: 24%;">
     <h2><b><a href="the-rescue/paintings">Painting</a></b></h2>
     <h6 style="text-transform:uppercase;"><b>12 Photographs</b></h3>
</div>
 <div style="float: left; width: 24%;">
     <h2><b><a href="the-rescue/wood---sculpture">Wood &amp; Sculpture</a></b></h2>
     <h6 style="text-transform:uppercase;"><b>14 Photographs</b></h3>
</div>
 <div style="float: left; width: 24%;">
     <h2><b><a href="the-rescue/paper">Paper</a></b></h2>
     <h6 style="text-transform:uppercase;"><b>6 Photographs</b></h3></div>
 <br style="clear: left;" />
</div>

<?php
                                                                          }
/*
$pageTree = exhibit_builder_page_tree();
if ($pageTree):
?>
<nav id="exhibit-pages">
    <?php echo $pageTree; ?>
</nav>
<?php endif; */?>
<?php echo foot(); ?>
