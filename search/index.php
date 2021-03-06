<?php
$pageTitle = __('Search') . ' ' . __('(%s total)', $total_results);
echo head(array('title' => $pageTitle, 'bodyclass' => 'search'));
$searchRecordTypes = get_search_record_types();
?>
<h1><?php echo $pageTitle; ?></h1>
<?php echo search_filters(); ?>
<?php if ($total_results): ?>
<?php echo pagination_links(); ?>
<hr />
<table id="search-results">
    <thead>
        <tr>
            <th><?php echo __('Image');?></th>
            <th><?php echo __('Title');?></th>
        </tr>
    </thead>
    <tbody>
        <?php $filter = new Zend_Filter_Word_CamelCaseToDash; ?>
        <?php foreach (loop('search_texts') as $searchText): ?>
        <?php $record = get_record_by_id($searchText['record_type'], $searchText['record_id']); ?>
        <?php $recordType = $searchText['record_type']; ?>
        <?php set_current_record($recordType, $record); ?>
        <tr class="<?php echo strtolower($filter->filter($recordType)); ?>">
            <td>
                                <div class="item-img">
        <?php //echo link_to_item(item_image('square_thumbnail')); ?>
    </div>
            </td>
            <?php

if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING']))
{
        $searchlink = record_url($record, 'show').'?' . $_SERVER['QUERY_STRING'];

?>



        <td><a href="<?php echo $searchlink; ?>"><?php echo $searchText['title'] ? $searchText['title'] : '[Unknown]'; ?></a> <br />
    <?php echo metadata('item', array('Dublin Core','Identifier')); ?>
            
            </td>

        
            
            
<?php
}
else
{

?>

        <td><a href="<?php echo record_url($record, 'show'); ?>"><?php echo $searchText['title'] ? $searchText['title'] : '[Unknown]'; ?></a></td>
<?php

}

?>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php echo pagination_links(); ?>
<?php else: ?>
<div id="no-results">
    <p><?php echo __('Your query returned no results.');?></p>
</div>
<?php endif; ?>
<?php echo foot(); ?>
