<?php echo head(array('title' => metadata('exhibit', 'title'), 'bodyclass'=>'exhibits summary')); ?>
<?php echo simple_pages_display_breadcrumbs(); ?>
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
if (strpos($_SERVER['REQUEST_URI'],'exhibits/show/the-rescue') == true) {
?>


<?php
include "rescue.php";                                                                          }
/*
$pageTree = exhibit_builder_page_tree();
if ($pageTree):
?>
<nav id="exhibit-pages">
    <?php echo $pageTree; ?>
</nav>
<?php endif; */?>

<?php
//echo $_SERVER['REQUEST_URI'];
if (strpos($_SERVER['REQUEST_URI'],'exhibits/show/the-committee') == true) {
?>

<?php
    include "committee.php";
                                                                          }
/*
$pageTree = exhibit_builder_page_tree();
if ($pageTree):
?>
<nav id="exhibit-pages">
    <?php echo $pageTree; ?>
</nav>
<?php endif; */?>








<!-- All images section -->
<div style="padding-top:1.54rem;margin-right: 0.9375rem;border-top:2px solid #f0f0f0;"><h1><b>All images</b></h1></div>
<div class="exhibit-row-container">
 <div class="exhibit-single-image-4-pics-container small-3 large-3 columns" style="padding-right:0;">
     <div class="large-6 columns" style="padding-left:0;"><a class="th" href="/items/browse"><img src="/themes/cria/images/gallery_thumbs/04.08.00325.jpg"></a>
     </div>
     <div class="large-6 columns" style="padding-left:0;"><a class="th" href="/items/browse"><img src="/themes/cria/images/gallery_thumbs/07.18.00457.jpg"></a>
     </div>
 </div>
<div class="exhibit-single-image-4-pics-container small-3 large-3 columns" style="padding-right:0;">
     <div class="large-6 columns" style="padding-left:0;"><a class="th" href="/items/browse"><img src="/themes/cria/images/gallery_thumbs/07.17.00445.jpg"></a>
     </div>
     <div class="large-6 columns" style="padding-left:0;"><a class="th" href="/items/browse"><img src="/themes/cria/images/gallery_thumbs/07.15.00405.jpg"></a>
     </div>
 </div>
    <div class="exhibit-single-image-4-pics-container small-3 large-3 columns" style="padding-right:0;">
     <div class="large-6 columns" style="padding-left:0;"><a class="th" href="/items/browse"><img src="/themes/cria/images/gallery_thumbs/07.20.00473.jpg"></a>
     </div>
     <div class="large-6 columns" style="padding-left:0;"><a class="th" href="/items/browse"><img src="/themes/cria/images/gallery_thumbs/07.18.00456.jpg"></a>
     </div>
 </div>
    <div class="exhibit-single-image-4-pics-container small-3 large-3 columns" style="padding-right:0;">
     <div class="large-6 columns" style="padding-left:0;"><a class="th" href="/items/browse"><img src="/themes/cria/images/gallery_thumbs/04.08.00330.jpg"></a>
     </div>
     <div class="large-6 columns" style="padding-left:0;"><a class="th" href="/items/browse"><img src="/themes/cria/images/gallery_thumbs/08.06.00056.jpg"></a>
     </div>
 </div>
 <br style="clear: left;" />
<br/>
 <a href="/items/browse" class="button">VIEW</a>
</div>
<br/>



<?php echo foot(); ?>
