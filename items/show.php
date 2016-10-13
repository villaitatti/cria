<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'items show')); ?>
<div style="margin-top:50px;">
    <!-- DIV with picture -->
    <div style="float:left;position:relative;">
        <?php echo get_specific_plugin_hook_output('Iiif', 'public_items_show', array('view' => $this, 'item' => $item)); ?>
        <!-- PREVIOUS AND NEXT ITEM -->
        <div class="div-prev-next-items">
            <ul class="item-pagination navigation">
                <li id="previous-item" class="previous, previous-item" ><?php echo link_to_previous_item_show(); ?></li>
                <li id="next-item" class="next, next-item" ><?php echo link_to_next_item_show(); ?></li>
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
            <h6 class="accordion-item-titles">Title</h6>
            <p><?php echo metadata('item', array('Dublin Core', 'Title')); ?></p>
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
