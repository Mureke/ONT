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
    <div id="infoblock">
    <div id="generalInfo">
    <h2>Projektin yleistiedot</h2>
    <?php print("Projektin tyyppi: ".$node->field_tyyppi['und'][0]['taxonomy_term']->name); ?><br>
    <?php print("Projektin tila: ".$node->field_tila['und'][0]['taxonomy_term']->name); ?><br>

    <?php 
    $pisteet = field_get_items('node', $node, 'field_opintopisteet');
    if ($pisteet) {
      print("Suoritetut opintopisteet: ".$node->field_opintopisteet['und'][0]['value']); 
    }
    else {
      print("Suoritetut opintopisteet: -");
    }
    ?><br>
    
    <?php print("Alku pvm: ".$node->field_ajankohta['und'][0]['value']); ?><br>
    <?php print("Loppu pvm: ".$node->field_ajankohta['und'][0]['value2']); ?><br>
    </div>

    <!-- RENDERÖIDÄN FIELD COLLECTIONIT -->
    <div id="personelInfo">
   <h2> Yhteyshenkilöt </h2>
   <?php 
      $yhteyshenkilot = field_get_items('node', $node, 'field_yhteyshenkilot');
    if ($yhteyshenkilot) {
   foreach($henkilot as $item): ?>
    <?php print($item->field_nimi['und'][0]['value']) ?><br>
    <?php print($item->field_sahkoposti['und'][0]['value']) ?><br>
    <?php print($item->field_puhelinnumero['und'][0]['value']) ?><br>
    <?php print($item->field_profile_organization['und'][0]['taxonomy_term']->name) ?><br>
   <?php endforeach; }
   else {
    print("Projektissa ei ole yhteyshenkilöitä");
   } ?>

  <h2> Mukana olevat henkilöt</h2> 
  <?php
    $mukana_olevat = field_get_items('node', $node, 'field_mukana_olevat');
    if ($mukana_olevat) { 
    foreach($mukana as $item2): ?>
    <?php print($item2->field_mukana_olevat_nimi['und'][0]['value']) ?><br>
  <?php endforeach; } 
  else {
    print("Projektissa ei ole mukana muita henkilöitä"); 
  } ?>
</div>

</div>  
<!-- GG EZ -->


    <h2>Projektin kuvaus</h2>
    <?php print($node->body['und'][0]['value']); ?><br>
    <!-- Check if the result field contains data -->
    <h2>Projektin tulos</h2>
    <?php 
    $tulos = field_get_items('node', $node, 'field_tulos');
    if ($tulos) {
      print($node->field_tulos['und'][0]['value']);
    }
    else {
      print("Projekti on vielä suunnitteilla tai kesken");  
    } 
    ?><br>

  </div>
  <div class="clearfix">
    <?php if (!empty($content['links'])): ?>
      <div class="links"><?php print render($content['links']); ?></div>
    <?php endif; ?>

    <?php print render($content['comments']); ?>
  </div>

</div>