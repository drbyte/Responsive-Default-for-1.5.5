<?php
/**
 * Common Template - tpl_columnar_display.php
 *
 * This file is used for generating tabular output where needed, based on the supplied array of table-cell contents.
 *
 * @package templateSystem
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: drbyte Modified in v1.5.5 $
 * @version ZCA/GIT: $Id: rbarbour New for v1.5.5 $
 */

$zco_notifier->notify('NOTIFY_TPL_COLUMNAR_DISPLAY_START', $current_page_base, $list_box_contents, $title);

?>
<?php
  if ($title) {
  ?>
<?php echo $title; ?>
<?php
 }
 ?>

<!--ZCAdditions.com, ZCA Responsive Components (BOF-add 1 of 3)-->
<?php echo '<div class="blocks">'; ?>
<!--ZCAdditions.com, ZCA Responsive Components (EOF-add 1 of 3)-->

<?php
if (is_array($list_box_contents) > 0 ) {
 for($row=0;$row<sizeof($list_box_contents);$row++) {
    $params = "";
    //if (isset($list_box_contents[$row]['params'])) $params .= ' ' . $list_box_contents[$row]['params'];
?>

<?php
    for($col=0;$col<sizeof($list_box_contents[$row]);$col++) {
      $r_params = "";
      if (isset($list_box_contents[$row][$col]['params'])) $r_params .= ' ' . (string)$list_box_contents[$row][$col]['params'];
     if (isset($list_box_contents[$row][$col]['text'])) {
?>
    <?php echo '<div' . $r_params . '>' . $list_box_contents[$row][$col]['text'] .  '</div>' . "\n"; ?>
<?php
      }
    }
  }
}
?>

<!--ZCAdditions.com, ZCA Responsive Components (BOF-add 2 of 3)-->
</div>

<script type="text/javascript"><!--//

			(function($) {
				$(document).ready(function() {

$('.blocks>[class*="columns"]').matchHeight();

		});
			}) (jQuery);

//--></script>
<!--ZCAdditions.com, ZCA Responsive Components (EOF-add 2 of 3)-->

<br class="clearBoth" />

<?php

$zco_notifier->notify('NOTIFY_TPL_COLUMNAR_DISPLAY_END', $current_page_base, $list_box_contents, $title);
