<?php
$pageTitle = __('All images');
echo head(array('title'=>$pageTitle,'bodyclass' => 'items browse'));
?>

<h1 style="padding-top:2rem;"><?php echo $pageTitle;?> <?php echo __('(%s total)', $total_results); ?></h1>


<nav class="items-nav navigation secondary-nav">
    <?php echo public_nav_items(); ?>
</nav>

<?php echo item_search_filters(); ?>



<?php if ($total_results > 0): ?>

<?php
$sortLinks[__('Title')] = 'Dublin Core,Title';
$sortLinks[__('Date Added')] = 'added';
?>
<div id="sort-links" style="margin-top:3.5rem;">
    <span class="sort-label"><?php echo __('Sort by: '); ?></span><?php echo browse_sort_links($sortLinks); ?>
</div>

<?php endif; ?>

<?php foreach (loop('items') as $item): ?>
<div class="item hentry large-3 columns" style="padding: 1rem 0; background:#F0F0F0; border: 3px solid white;">
    
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
    // trim the title to 50 chars
    $searchlink = record_url('item').'?' . $_SERVER['QUERY_STRING'];
    $imgtitle = substr(metadata('item', array('Dublin Core','Title')), 0, 50);
    $imgtitle = substr($imgtitle, 0, strrpos($imgtitle, ' ')) . " ...";
    echo '<h6><a href="'.$searchlink.'">'. $imgtitle.'</a></h6>';
}

else
{
    echo '<h6>'.link_to_item(metadata('item', array('Dublin Core','Title')), array('class'=>'permalink')).'</h6>';
}
?>
    </div>
    <?php fire_plugin_hook('public_items_browse_each', array('view' => $this, 'item' =>$item)); ?>

    </div><!-- end class="item-meta" -->
</div><!-- end class="item hentry" -->
<?php endforeach; ?>
<div>
<?php echo pagination_links(); ?>
</div>
<?php if ($total_results > 12): ?>
<div style="margin:2rem;">> </div>
<?php endif; ?>
<?php fire_plugin_hook('public_items_browse', array('items'=>$items, 'view' => $this)); ?>
<br/>
<br/>
<?php echo foot(); ?>
