<?php
$pageTitle = __('All images');
echo head(array('title'=>$pageTitle,'bodyclass' => 'items browse'));
?>

<h1 style="padding-top:2rem;"><?php echo $pageTitle;?> <?php echo __('(%s total)', $total_results); ?></h1>


<nav class="items-nav navigation secondary-nav">
    <?php echo public_nav_items(); ?>
</nav>

<?php echo item_search_filters(); ?>





<?php foreach (loop('items') as $item): ?>
<div class="item hentry large-4 columns" style="padding: 1rem 0rem; background:#e6e6e3; border: 3px solid #F0F0F0;">
    
    <div class="item-meta">
    <?php if (metadata('item', 'has thumbnail')): ?>
    <div class="item-img">
        <?php echo link_to_item(item_image('square_thumbnail')); ?>
    </div>
    <?php endif; ?>
    <div style="height:3.375rem; padding:1rem; text-aligh:center">
        <?php
if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING']))
{

    $searchlink = record_url('item').'?' . $_SERVER['QUERY_STRING'];
    
        // trim the title to 50 chars
    
    $imgtitle = substr(metadata('item', array('Dublin Core','Title')), 0, 60);
    if (strlen($imgtitle) > 59)
    {
      $imgtitle = $imgtitle . " ...";  
        
    }
    
    echo '<h6 style="text-align:center" ><a href="'.$searchlink.'">'. $imgtitle.'</a></h6>';
}

else
{
    echo '<h6 style="text-align:center">'.link_to_item(metadata('item', array('Dublin Core','Title')), array('class'=>'permalink')).'</h6>';
}
?>
    </div>
    <?php fire_plugin_hook('public_items_browse_each', array('view' => $this, 'item' =>$item)); ?>

    </div><!-- end class="item-meta" -->
</div><!-- end class="item hentry" -->
<?php endforeach; ?>

<div >
<hr />
<?php echo pagination_links(); ?>
</div>
<?php if ($total_results > 12): ?>
<div style="margin:2rem;">> </div>
<?php endif; ?>
<?php fire_plugin_hook('public_items_browse', array('items'=>$items, 'view' => $this)); ?>
<br/>
<br/>
<?php echo foot(); ?>
