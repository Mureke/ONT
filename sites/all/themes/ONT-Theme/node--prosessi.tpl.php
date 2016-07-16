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
   <div class="custom-accordion">
    <?php foreach($items as $item): ?>
      <div class="accordion-section">
        <div class="accordion-header" id='<?php echo "phase_" . $counter; ?>'> 
          <span class="counter"><?php print($counter . "."); ?></span>
          <?php print($item->field_vaiheen_nimi['und'][0]['value']) ?> 
          <i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i>
        </div>
        <div class="accordion-content">
          <p>
            <?php print($item->field_tehtavat['und'][0]['value']) ?>
          </p>
        </div>
      </div>
   <?php $counter++; ?>
    <?php endforeach; ?>
</div>
  </div>


</div>