<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'items show')); ?>
<div style="margin-top:50px;">
    <!-- DIV with picture -->
    <div style="float:left;position:relative;">

              <?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>
 
        
        <?php echo get_specific_plugin_hook_output('iiif', 'public_items_show', array('view' => $this, 'item' => $item)); ?>
        
        
        <!-- PREVIOUS AND NEXT ITEM -->
        <div class="div-prev-next-items">
            <ul class="item-pagination navigation">
                <?php custom_paging(); ?>
            </ul>
        </div>

        
    </div>

    <!-- Div with title, collection etc -->
    <div style="float:left; max-width:45%; margin-left:30px;padding-top:10%;position:relative;">
        <h2 style="font-weight:bold;"><?php echo metadata('item', array('Dublin Core', 'Title')); ?></h2>
        <?php if (metadata('item', 'Collection Name')): ?>
        <h4><?php echo link_to_collection_for_item(); ?></h4>
        <?php endif; ?>
        <div class="back-item-button-div">
        <a onClick="history.go(-1);return true;" class="back-item-button">X</a>
        </div>
    </div>    
</div>
<div style="clear:both"></div>




<ul style="margin-bottom:30px; margin-top:30px;" class="accordion" data-accordion="myAccordionGroup">
  <li class="accordion-navigation">
    <a href="#panel1a"><b style="color: #de171c">ITEM DATA</b></a>
    <div id="panel1a" class="content">
        <div>
            <?php $title = metadata('item', array('Dublin Core', 'Title')); ?>
    <?php if ($title): ?>
            <h6 class="accordion-item-titles">Title</h6>
            <p><?php echo $title; ?></p>
    <?php endif; ?>
    <?php $box_number = metadata('item', array('Item Type Metadata', 'Box Number')); ?>
    <?php if ($box_number): ?>
            <h6 class="accordion-item-titles">Box Number</h6>
            <p><?php echo $box_number; ?></p>
    <?php endif; ?>
    <?php $folder_number = metadata('item', array('Item Type Metadata', 'Folder Number')); ?>
    <?php if ($folder_number): ?>
            <h6 class="accordion-item-titles">Folder Number</h6>
            <p><?php echo $folder_number; ?></p>
    <?php endif; ?>
    <?php $image_number = metadata('item', array('Item Type Metadata', 'Image Number')); ?>
    <?php if ($image_number): ?>
            <h6 class="accordion-item-titles">Image Number</h6>
            <p><?php echo $image_number; ?></p>
    <?php endif; ?>
    <?php $folder_title = metadata('item', array('Item Type Metadata', 'Folder Title')); ?>
    <?php if ($folder_title): ?>
            <h6 class="accordion-item-titles">Folder Title</h6>
            <p><?php echo $folder_title; ?></p>
    <?php endif; ?>
    <?php $photographer = metadata('item', array('Item Type Metadata', 'Photographer')); ?>
    <?php if ($photographer): ?>
            <h6 class="accordion-item-titles">Photographer</h6>
            <p><?php echo $photographer; ?></p>
    <?php endif; ?>
    <?php $location = metadata('item', array('Item Type Metadata', 'Location')); ?>
    <?php if ($location): ?>
            <h6 class="accordion-item-titles">Location</h6>
            <p><?php echo $location; ?></p>
    <?php endif; ?>
    <?php $artist = metadata('item', array('Item Type Metadata', 'Artist')); ?>
    <?php if ($artist): ?>
            <h6 class="accordion-item-titles">Artist</h6>
            <p><?php echo $artist; ?></p>
    <?php endif; ?>
    <?php $restorer = metadata('item', array('Item Type Metadata', 'Restorer')); ?>
    <?php if ($restorer): ?>
            <h6 class="accordion-item-titles">Restorer</h6>
            <p><?php echo $restorer; ?></p>
    <?php endif; ?>
    <?php $physical_dimensions = metadata('item', array('Item Type Metadata', 'Physical Dimensions')); ?>
    <?php if ($physical_dimensions): ?>
            <h6 class="accordion-item-titles">Physical Dimension</h6>
            <p><?php echo $physical_dimensions; ?></p>
    <?php endif; ?>
        </div>
        
    </div>
  </li>
</ul>
<!-- Initialize the accordion -->
<script>
  $('#myAccordionGroup').on('toggled', function (event, accordion) {
    console.log(accordion);
  });
</script>

<?php echo foot(); ?>
