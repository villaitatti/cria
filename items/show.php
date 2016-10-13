<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'items show')); ?>
<div style="margin-top:50px;">
    <!-- DIV with picture -->
    <div style="float:left;position:relative;">
        <?php echo get_specific_plugin_hook_output('Iiif', 'public_items_show', array('view' => $this, 'item' => $item)); ?>
        <!-- PREVIOUS AND NEXT ITEM -->
        <div class="div-prev-next-items">
            <ul class="item-pagination navigation">
                <li id="previous-item" class="previous, previous-item" style="position:absolute;"><?php echo link_to_previous_item_show(); ?></li>
                <li id="next-item" class="next, next-item" style="position:absolute;"><?php echo link_to_next_item_show(); ?></li>
            </ul>
        </div>
    </div>
    <!-- Div with title, collection etc -->
    <div style="float:left; max-width:45%; margin-left:30px;">
        <h4><?php echo metadata('item', array('Dublin Core', 'Title')); ?></h4>
        <?php if (metadata('item', 'Collection Name')): ?>
        <h5><?php echo link_to_collection_for_item(); ?></h5>
        <?php endif; ?>

    </div>    
</div>
<div style="clear:both"></div>




<ul style="margin-bottom:30px;" class="accordion" data-accordion="myAccordionGroup">
  <li class="accordion-navigation">
    <a href="#panel1a"><b style="color: #de171c">ITEM DATA</b></a>
    <div id="panel1a" class="content">
        
       <div id="primary">
    
    <?php echo all_element_texts('item'); ?>
    
    <?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>

</div><!-- end primary --> 
        
        
        <aside id="sidebar">

    <!-- The following returns all of the files associated with an item. -->
    <?php if ((get_theme_option('Item FileGallery') == 1) && metadata('item', 'has files')): ?>
    <div id="itemfiles" class="element">
        <h2><?php echo __('Files'); ?></h2>
        <?php echo item_image_gallery(); ?>
    </div>
    <?php endif; ?>

    <!-- LINK TO COLLECTION If the item belongs to a collection, the following creates a link to that collection. -->
    <?php if (metadata('item', 'Collection Name')): ?>
    <div id="collection" class="element">
        <h2><?php echo __('Collection'); ?></h2>
        <div class="element-text"><p><?php echo link_to_collection_for_item(); ?></p></div>
    </div>
    <?php endif; ?>

    <!-- TAGS: The following prints a list of all tags associated with the item -->
    <?php if (metadata('item', 'has tags')): ?>
    <div id="item-tags" class="element">
        <h2><?php echo __('Tags'); ?></h2>
        <div class="element-text"><?php echo tag_string('item'); ?></div>
    </div>
    <?php endif;?>

    <!-- CITATION: The following prints a citation for this item. -->
    <div id="item-citation" class="element">
        <h2><?php echo __('Citation'); ?></h2>
        <div class="element-text"><?php echo metadata('item', 'citation', array('no_escape' => true)); ?></div>
    </div>

</aside>
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
