<?php
/**
 * @file taxreceipt-taxpayer-story.tpl.php
 * 
 * Variables:
 *  - $taxpayer_story, array including:
 *     $taxpayer_story['title'] = '$80,000 income — married with two children';
 *     $taxpayer_story['description'] = 'This assumes this family contributes 5 percent ';
 *     $taxpayer_story['income'] = '$80,000';
 *     $taxpayer_story['social security tax'] = '4.2%';
 *     $taxpayer_story['medicare tax'] = '1.45%';
 *     $taxpayer_story['income tax'] = '5.7375%';
 *     $taxpayer_story['data-socsec'] = '1000';
 *     $taxpayer_story['data-medicare'] = '2000';
 *     $taxpayer_story['data-income'] = '3000';
 */
?>

<div class="range-container">
  <a href="javascript:;" id="taxr-range-link-<?php print $taxpayer_story['machine_name']; ?>" data-socsec="<?php print $taxpayer_story['data-socsec']; ?>" data-medicare="<?php print $taxpayer_story['data-medicare'];  ?>" data-income="<?php print $taxpayer_story['data-income'];  ?>">
    <?php print $taxpayer_story['title']; ?>
  </a>
  <br />
  <p id="taxr-range-text"><?php print $taxpayer_story['description']; ?></p>
</div>
