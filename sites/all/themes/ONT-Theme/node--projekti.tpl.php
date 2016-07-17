<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="submitted"><?php print $submitted ?></div>
  <?php endif; ?>

  <?php
  //FIELD COLLECTIONIT ARRAYSEEN
    $fc_fields = field_get_items('node', $node, 'field_yhteyshenkilot');
        $ids = array();

      foreach ($fc_fields as $fc_field) {
        $ids[] = $fc_field['value'];
      }

      $henkilot = field_collection_item_load_multiple($ids);

  ?>

    <?php
    $fc_fields2 = field_get_items('node', $node, 'field_mukana_olevat');
        $ids = array();

      foreach ($fc_fields2 as $fc_field2) {
        $ids[] = $fc_field2['value'];
      }

      $mukana = field_collection_item_load_multiple($ids);

  ?>

  <div class="content clearfix"<?php print $content_attributes; ?>>
  <!-- SISÄLTÖ FIELDI KERRALLAAN  -->
    <?php print("Kuvaus: ". $node->body['und'][0]['value']); ?><br>
    <?php print("Alku pvm: ".$node->field_ajankohta['und'][0]['value']); ?><br>
    <?php print("Loppu pvm: ".$node->field_ajankohta['und'][0]['value2']); ?><br>
    <?php print("Opintopisteet: ".$node->field_opintopisteet['und'][0]['value']); ?><br>
    <?php print("Tulos: ".$node->field_tulos['und'][0]['value']); ?><br>
    <?php print("Projektin tila: ".$node->field_tila['und'][0]['taxonomy_term']->name); ?><br>
    <?php print("Projektin tyyppi: ".$node->field_tyyppi['und'][0]['taxonomy_term']->name); ?><br>
  
  <!-- RENDERÖIDÄN FIELD COLLECTIONIT -->
   <h2> Yhteyshenkilöt </h2>
   <?php foreach($henkilot as $item): ?>
    <?php print($item->field_nimi['und'][0]['value']) ?><br>
    <?php print($item->field_sahkoposti['und'][0]['value']) ?><br>
    <?php print($item->field_puhelinnumero['und'][0]['value']) ?><br>
    <?php print($item->field_profile_organization['und'][0]['taxonomy_term']->name) ?><br><br>
   <?php endforeach; ?>
 

  <h2> Mukana ollevat: </h2>
  <?php foreach($mukana as $item2): ?>
    <?php print($item2->field_mukana_olevat_nimi['und'][0]['value']) ?><br><br>
  <?php endforeach; ?>
  
<!-- GG EZ -->

  </div>
  <div class="clearfix">
    <?php if (!empty($content['links'])): ?>
      <div class="links"><?php print render($content['links']); ?></div>
    <?php endif; ?>

    <?php print render($content['comments']); ?>
  </div>

</div>