<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  
  <?php
    //Get field collection ids and save values to $items array;
     $fc_fields = field_get_items('node', $node, 'field_vaihe');
     $ids = array();

      foreach ($fc_fields as $fc_field) {
        $ids[] = $fc_field['value'];
      }

      $items = field_collection_item_load_multiple($ids);
      $counter = 1;
   ?>
  
  <div class="content clearfix"<?php print $content_attributes; ?>>
  <?php foreach($items as $item): ?>

    <?php print($counter); ?>
    <?php print($item->field_vaiheen_nimi['und'][0]['value']) ?><br>

    <?php print($item->field_tehtavat['und'][0]['value']) ?><br><br>
 <?php $counter++; ?>
  <?php endforeach; ?>

  </div>


</div>