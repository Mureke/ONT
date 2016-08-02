<!-- TEMPLATE FOR OPINNÄYTETYÖ -->

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="content clearfix"<?php print $content_attributes; ?>>
    <div class="processimage">
      <img usemap="#process_map" style="margin-left: -15%; max-width: 136%;" src="/sites/all/themes/ONT-Theme/images/opinnaytetyo.png">
    </div>
      <!-- print node with the right process information -->
     <?php //use variable to avoid strict warning
      $nid = 19;
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
    <area alt="" title="" href="#phase_1"  shape="poly" coords="336,171,710,173,701,254,346,253" />
    <area alt="" title="" href="#phase_1"  shape="poly" coords="605,279,718,283,718,380,646,382" />
    <area alt="" title="" href="#phase_2"  shape="poly" coords="141,276,143,326,479,330,479,284" />
    <area alt="" title="" href="#phase_2"  shape="poly" coords="529,330,610,339,608,427,544,437,512,368" />
    <area alt="" title="" href="#phase_3"  shape="poly" coords="139,349,352,353,347,422,142,423" />
    <area alt="" title="" href="#phase_3"  shape="poly" coords="397,391,398,480,516,476,497,407" />
    <area alt="" title="" href="#phase_4"  shape="poly" coords="149,597,355,594,359,636,146,637" />
    <area alt="" title="" href="#phase_4"  shape="poly" coords="411,489,524,491,507,550,414,553" />
    <area alt="" title="" href="#phase_5"  shape="poly" coords="553,531,629,542,578,625,502,614" />
    <area alt="" title="" href="#phase_5"  shape="poly" coords="247,680,571,683,557,721,555,734,250,736" />
    <area alt="" title="" href="#phase_6"  shape="poly" coords="659,573,709,543,758,573,760,621,708,651" />
    <area alt="" title="" href="#phase_6"  shape="poly" coords="597,762,846,762,844,797,600,795" />
    <area alt="" title="" href="#phase_7"  shape="poly" coords="798,701,1072,701,1072,738,800,736" />
    <area alt="" title="" href="#phase_7"  shape="poly" coords="763,515,811,483,863,510,865,558,814,590" />
</map>

<style>
/*The lazy way of hiding the site title..... Sorry. */
  h1{
    display:none;
  }
</style>