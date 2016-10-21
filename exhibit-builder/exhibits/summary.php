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

<div>
<br/>
<h1><b>A city wounded</b></h1>
 <!-- First row container -->
<div class="exhibit-row-container">
    <!-- Single page container Page: Destruction -->
 <div class="exhibit-single-page-container small-2 large-4 columns">
     <!-- Bigger image -->
     <div class="exhibit-bigger-image-div"><a href="the-rescue/destruction"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!07.12.00348/pct:3,2,90,83/280,280/0/native.jpg"></a></div>
     <!-- Two smaller images -->
     <div style="float:left;">
        <div style="margin-bottom: 4px;">
     <a href="the-rescue/destruction"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!07.11.00331/pct:0,20,100,80/138,138/0/native.jpg"></a>
        </div>
        <div> 
     <a href="the-rescue/destruction"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!07.11.00341/pct:0,0,100,100/138,138/0/native.jpg"></a>
        </div>
     </div>
     <div style="clear:both;"></div>
     <h2><b><a href="the-rescue/destruction">Destruction</a></b></h2>
 </div>
<!-- Single page container Page: People -->
 <div class="exhibit-single-page-container small-4 large-4 columns">
     <!-- Bigger image -->
     <div class="exhibit-bigger-image-div"><a href="the-rescue/people"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!07.09.00293/pct:13,35,60,50/280,280/0/native.jpg"></a></div>
     <!-- Two smaller images -->
     <div style="float:left;">
        <div style="margin-bottom: 4px;">
     <a href="the-rescue/people"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!04.08.00325/pct:0,12,100,75/!138,138/0/native.jpg"></a>
        </div>
        <div> 
     <a href="the-rescue/people"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!04.08.00329/pct:10,2,80,95/138,138/0/native.jpg"></a>
        </div>
     </div>
     <div style="clear:both;"></div>
     <h2><b><a href="the-rescue/people">People</a></b></h2>
 </div>
<!-- Single page container Page: Cultural Heritage -->
 <div class="exhibit-single-page-container small-6 large-4 columns" style="margin-right:0;">
     <!-- Bigger image -->
     <div class="exhibit-bigger-image-div"><a href="the-rescue/cultural-heritage"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!09.26.00322/pct:0,50,60,50/280,280/0/native.jpg"></a></div>
     <!-- Two smaller images -->
     <div style="float:left;">
        <div style="margin-bottom: 4px;">
     <a href="the-rescue/cultural-heritage"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!08.06.00055/pct:22,12,60,78/138,138/0/native.jpg"></a>
        </div>
        <div> 
     <a href="the-rescue/cultural-heritage"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!08.33.00309/pct:37,5,60,78/138,138/0/native.jpg"></a>
        </div>
     </div>
     <div style="clear:both;"></div>
     <h2><b><a href="the-rescue/cultural-heritage">Cultural Heritage</a></b></h2>
 </div>
 <br style="clear: left;" />
</div>
</div>
<br/>
<div><h1><b>CRIA's projects</b></h1></div>
<div class="exhibit-row-container">
 <div class="exhibit-single-image-4-pics-container large-3 columns">
     <a href="the-rescue/wood---sculpture"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!08.14.00160/pct:20,22,70,62/319,319/0/native.jpg"></a>
     <h2><b><a href="the-rescue/wood---sculpture">Wood &amp; Sculpture</a></b></h2>
</div>
<div class="exhibit-single-image-4-pics-container large-3 columns">
    <a href="the-rescue/paintings"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!07.13.00372/pct:0,00,70,95/319,319/0/native.jpg"></a>
     <h2><b><a href="the-rescue/painting">Painting</a></b></h2>
</div>
 <div class="exhibit-single-image-4-pics-container large-3 columns">
     <a href="the-rescue/monuments---museums"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!08.11.00123/pct:0,00,70,95/319,319/0/native.jpg"></a>
     <h2><b><a href="the-rescue/monuments---museums">Monuments &amp; Museums</a></b></h2>
</div>
 <div class="exhibit-single-image-4-pics-container large-3 columns">
     <a href="the-rescue/paper"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!08.18.00187/pct:15,5,75,90/319,319/0/native.jpg"></a>
     <h2><b><a href="the-rescue/paper">Paper</a></b></h2>
 </div>
 <br style="clear: left;" />
</div>
<br/>
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

<?php
//echo $_SERVER['REQUEST_URI'];
if (strpos($_SERVER['REQUEST_URI'],'exhibits/show/the-committee') == true) {
?>
<br/>
<br/>
<div class="exhibit-row-container">
<div class="exhibit-single-page-container small-2 large-4 columns">
     <!-- Bigger image -->
     <div class="exhibit-bigger-image-div"><a href="the-committee/call-to-action"><img src="/themes/cria/images/tedkennedy-snapshot.png"></a></div>
     <!-- Two smaller images -->
     <div style="float:left;">
        <div style="margin-bottom: 4px;">
     <a href="the-committee/call-to-action"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!telegram-378/pct:10,3,82,93/138,138/0/native.jpg"></a>
        </div>
        <div> 
     <a href="the-committee/call-to-action"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!telegram-391/pct:10,3,82,93/138,138/0/native.jpg"></a>
        </div>
     </div>
     <div style="clear:both;"></div>
     <h2><b><a href="the-committee/call-to-action">Call to Action</a></b></h2>
 </div>
<!-- Single page container Page: People -->
 <div class="exhibit-single-page-container small-2 large-4 columns">
<!-- Bigger image -->
     <div class="exhibit-bigger-image-div"><a href="the-committee/cast-of-characters"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!03.04.00349/pct:3,10,64,78/280,280/0/native.jpg"></a></div>
     <!-- Two smaller images -->
     <div style="float:left;">
        <div style="margin-bottom: 4px;">
     <a href="the-committee/cast-of-characters"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!07.19.00469/pct:25,10,64,84/138,138/0/native.jpg"></a>
        </div>
        <div> 
     <a href="the-committee/cast-of-characters"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!07.18.00461/pct:4,10,93,66/138,138/0/native.jpg"></a>
        </div>
     </div>
     <div style="clear:both;"></div>
     <h2><b><a href="the-committee/cast-of-characters">Cast of Characters</a></b></h2>
 </div>
    
 <div class="exhibit-single-page-container small-2 large-4 columns">
<!-- Bigger image -->
     <div class="exhibit-bigger-image-div"><a href="the-committee/cria-in-numbers"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!07.12.00348/pct:3,2,90,83/280,280/0/native.jpg"></a></div>
     <!-- Two smaller images -->
     <div style="float:left;">
        <div style="margin-bottom: 4px;">
     <a href="the-committee/cria-in-numbers"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!07.11.00331/pct:0,20,100,80/138,138/0/native.jpg"></a>
        </div>
        <div> 
     <a href="the-committee/cria-in-numbers"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!07.11.00341/pct:0,0,100,100/138,138/0/native.jpg"></a>
        </div>
     </div>
     <div style="clear:both;"></div>
     <h2><b><a href="the-committee/cria-in-numbers">CRIA in Numbers</a></b></h2>
 </div>
 <br style="clear: left;" />
</div>
<div>
<br/>
<br/>
 <!-- Second row container -->
<div class="exhibit-row-container">
<div class="large-2 columns">&nbsp;</div>
<!-- Single page container Page: People -->
 <div class="exhibit-single-page-container small-2 large-4 columns">
<!-- Bigger image -->
     <div class="exhibit-bigger-image-div"><a href="the-committee/role-of-i-tatti"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!07.15.00401/pct:7,5,62,85/280,280/0/native.jpg"></a></div>
     <!-- Two smaller images -->
     <div style="float:left;">
        <div style="margin-bottom: 4px;">
     <a href="the-committee/role-of-i-tatti"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!07.19.00469/pct:25,10,64,84/138,138/0/native.jpg"></a>
        </div>
        <div> 
     <a href="the-committee/role-of-i-tatti"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!07.18.00461/pct:4,10,93,66/138,138/0/native.jpg"></a>
        </div>
     </div>
     <div style="clear:both;"></div>
     <h2><b><a href="the-committee/role-of-i-tatti">Role of I Tatti</a></b></h2>
 </div>
<!-- Single page container Page: Cultural Heritage -->
<div class="exhibit-single-page-container small-2 large-4 columns">
<!-- Bigger image -->
     <div class="exhibit-bigger-image-div"><a href="the-committee/the-archive"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!07.15.00401/pct:7,5,62,85/280,280/0/native.jpg"></a></div>
     <!-- Two smaller images -->
     <div style="float:left;">
        <div style="margin-bottom: 4px;">
     <a href="the-committee/the-archive"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!07.19.00469/pct:25,10,64,84/138,138/0/native.jpg"></a>
        </div>
        <div> 
     <a href="the-committee/the-archive"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!07.18.00461/pct:4,10,93,66/138,138/0/native.jpg"></a>
        </div>
     </div>
     <div style="clear:both;"></div>
     <h2><b><a href="the-committee/the-archive">The Archive</a></b></h2>
 </div>   
 <div class="large-2 columns">&nbsp;</div>
 <br style="clear: left;" />
</div>
</div>
<br/>

<br/>
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








<!-- All images section -->
<div style="padding-top:1.54rem;margin-right: 0.9375rem;border-top:2px solid #f0f0f0;"><h1><b>All images</b></h1></div>
<div class="exhibit-row-container">
 <div class="exhibit-single-image-4-pics-container large-3 columns" style="padding-right:0;">
     <div class="large-6 columns" style="padding-left:0;"><a class="th" href="the-rescue/monuments---museums"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!04.08.00325/pct:0,12,100,75/!152,152/0/native.jpg"></a>
     </div>
     <div class="large-6 columns" style="padding-left:0;"><a class="th" href="the-rescue/monuments---museums"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!07.18.00457/pct:18,4,65,93/152,152/0/native.jpg"></a>
     </div>
 </div>
<div class="exhibit-single-image-4-pics-container large-3 columns" style="padding-right:0;">
     <div class="large-6 columns" style="padding-left:0;"><a class="th" href="the-rescue/monuments---museums"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!07.17.00445/pct:0,4,65,93/152,152/0/native.jpg"></a>
     </div>
     <div class="large-6 columns" style="padding-left:0;"><a class="th" href="the-rescue/monuments---museums"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!07.15.00405/pct:16,4,65,93/152,152/0/native.jpg"></a>
     </div>
 </div>
    <div class="exhibit-single-image-4-pics-container large-3 columns" style="padding-right:0;">
     <div class="large-6 columns" style="padding-left:0;"><a class="th" href="the-rescue/monuments---museums"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!07.20.00473/pct:13,4,70,93/152,152/0/native.jpg"></a>
     </div>
     <div class="large-6 columns" style="padding-left:0;"><a class="th" href="the-rescue/monuments---museums"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!07.18.00456/pct:13,3,65,93/152,152/0/native.jpg"></a>
     </div>
 </div>
    <div class="exhibit-single-image-4-pics-container large-3 columns" style="padding-right:0;">
     <div class="large-6 columns" style="padding-left:0;"><a class="th" href="the-rescue/monuments---museums"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!04.08.00330/pct:10,2,64,85/152,152/0/native.jpg"></a>
     </div>
     <div class="large-6 columns" style="padding-left:0;"><a class="th" href="the-rescue/monuments---museums"><img src="http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!08.06.00056/pct:20,3,65,93/1520,1520/0/native.jpg"></a>
     </div>
 </div>
 <br style="clear: left;" />
<br/>
    <?php
$whitelist = array(
    '127.0.0.1',
    '::1'
);
if(in_array($_SERVER['REMOTE_ADDR'], $whitelist))
{
     $browse_item_link = "/prod/items/browse";
}
else {
    $browse_item_link = "/items/browse";
}
?>
 <a href="<?php echo $browse_item_link; ?>" class="button">VIEW</a>
</div>
<br/>



<?php echo foot(); ?>
