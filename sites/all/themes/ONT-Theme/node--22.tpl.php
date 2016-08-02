<!-- TEMPLATE FOR HARJOITTELU -->

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="content clearfix"<?php print $content_attributes; ?>>
    <div class="processimage">
      <img usemap="process_map" style="margin-left: -15%; max-width: 136%;" src="/sites/all/themes/ONT-Theme/images/harjoittelu.png">
    </div>
      <!-- print node with the right process information -->
     <?php //use variable to avoid strict warning
      $nid = 23;
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
    <area alt="" title="" href="#phase_1" shape="poly" coords="117,184,263,187,267,251,120,254" />
    <area alt="" title="" href="#phase_1" shape="poly" coords="195,368,155,395,147,443,196,474,199,428,239,399" />
    <area alt="" title="" href="#phase_2" shape="poly" coords="66,687,271,681,279,744,68,749" />
    <area alt="" title="" href="#phase_2" shape="poly" coords="297,427,252,456,249,507,293,532,303,488,344,459" />
    <area alt="" title="" href="#phase_3" shape="poly" coords="343,682,536,685,539,770,347,768" />
    <area alt="" title="" href="#phase_3" shape="poly" coords="399,483,354,519,353,568,394,586,427,592,451,587,468,582,483,576,493,569,496,515,451,487" />
    <area alt="" title="" href="#phase_4" shape="poly" coords="282,264,446,264,443,409,286,404" />
    <area alt="" title="" href="#phase_4" shape="poly" coords="508,458,551,486,554,534,585,510,590,489,589,456,589,433,572,415,553,406,551,401,511,425" />
    <area alt="" title="" href="#phase_5" shape="poly" coords="473,250,661,255,661,188,473,182" />
    <area alt="" title="" href="#phase_5" shape="poly" coords="506,345,549,374,550,399,577,411,603,393,598,349,596,340,558,316" />
    <area alt="" title="" href="#phase_6" shape="poly" coords="686,183,903,190,904,252,690,252" />
    <area alt="" title="" href="#phase_6" shape="poly" coords="697,315,653,344,649,398,699,422,704,373,747,344" />
    <area alt="" title="" href="#phase_7" shape="poly" coords="795,267,1013,267,1015,340,792,337" />
    <area alt="" title="" href="#phase_7" shape="poly" coords="755,453,804,482,806,432,851,406,804,377,760,402" />
    <area alt="" title="" href="#phase_8" shape="poly" coords="930,423,1189,421,1183,353,933,349" />
    <area alt="" title="" href="#phase_8" shape="poly" coords="859,459,901,432,953,460,911,490,907,518,889,530,856,512" />
    <area alt="" title="" href="#phase_9" shape="poly" coords="965,613,1130,607,1126,674,969,671" />
    <area alt="" title="" href="#phase_9" shape="poly" coords="862,551,908,577,908,627,960,600,952,550,905,522" />
    <area alt="" title="" href="#phase_10" shape="poly" coords="766,698,1101,700,1101,777,770,786" />
    <area alt="" title="" href="#phase_10" shape="poly" coords="622,583,667,608,685,644,741,618,726,570,677,544" />
</map>

<style>
/*The lazy way of hiding the site title..... Sorry. */
  h1{
    display:none;
  }
</style>