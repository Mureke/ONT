<!-- TEMPLATE FOR OPINTOJAKSOPROJEKTI -->

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="content clearfix"<?php print $content_attributes; ?>>
    <div class="processimage">
      <img usemap="#process_map" style="margin-left: -15%; max-width: 136%;" src="/sites/all/themes/ONT-Theme/images/opintojakso.png">
    </div>
      <!-- print node with the right process information -->
     <?php //use variable to avoid strict warning
      $nid = 21;
      $nodeview = node_view(node_load($nid));
      print drupal_render($nodeview);
      ?>
  </div>

  <div class="clearfix">
    <?php if (!empty($content['links'])): ?>
      <div class="links"><?php print render($content['links']); ?></div>
    <?php endif; ?>

    <?php print render($content['comments']); ?>
  </div>

</div>

<map name="process_map" id="map">
    <area alt="" title="" href="#phase_1" shape="poly" coords="150,267,378,268,373,351,151,352" />
    <area alt="" title="" href="#phase_1" shape="poly" coords="354,385,394,407,398,452,440,430,440,390,399,363" />
    <area alt="" title="" href="#phase_2" shape="poly" coords="177,180,471,182,472,243,179,243" />
    <area alt="" title="" href="#phase_2" shape="poly" coords="447,334,489,362,489,403,531,377,530,336,489,310" />
    <area alt="" title="" href="#phase_3" shape="poly" coords="512,243,716,245,713,181,512,181" />
    <area alt="" title="" href="#phase_3" shape="poly" coords="615,310,576,335,576,376,612,401,616,361,661,335" />
    <area alt="" title="" href="#phase_4" shape="poly" coords="750,180,750,243,961,248,958,184" />
    <area alt="" title="" href="#phase_4" shape="poly" coords="705,360,663,386,664,430,703,453,707,412,744,387" />
    <area alt="" title="" href="#phase_5" shape="poly" coords="823,267,1056,268,1059,330,828,331" />
    <area alt="" title="" href="#phase_5" shape="poly" coords="797,414,754,438,754,478,797,504,832,439,836,431" />
    <area alt="" title="" href="#phase_6" shape="poly" coords="915,376,1145,377,1147,440,915,441" />
    <area alt="" title="" href="#phase_6" shape="poly" coords="886,465,847,489,842,533,875,551,889,540,893,517,929,493" />
    <area alt="" title="" href="#phase_7" shape="poly" coords="957,636,1210,635,1213,702,953,701,949,671" />
    <area alt="" title="" href="#phase_7" shape="poly" coords="847,567,888,592,891,633,938,609,931,567,893,544" />
    <area alt="" title="" href="#phase_8" shape="poly" coords="779,726,1139,731,1138,810,781,808" />
    <area alt="" title="" href="#phase_8" shape="poly" coords="758,619,797,642,801,689,842,663,844,620,802,595" />
</map>

<style>
/*The lazy way of hiding the site title..... Sorry. */
  h1{
    display:none;
  }
</style>