<?php
/**
 * column_left module
 *
 * @package templateStructure
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: column_left.php 4274 2006-08-26 03:16:53Z drbyte $
 * @version ZCA/GIT: $Id: rbarbour New for v1.5.5 $
 */

if (!defined('IS_ADMIN_FLAG')) {
  die('Illegal Access');
}

$column_box_default='tpl_box_default_left.php';

// Check if there are boxes for the column
$column_left_display= $db->Execute("select layout_box_name, layout_box_status_desktop, layout_box_status_tablet, show_box_min_width from " . TABLE_LAYOUT_BOXES . " where layout_box_location = 0 and layout_box_status= '1' and layout_template ='" . $template_dir . "'" . ' order by layout_box_sort_order');

// safety row stop
$box_cnt=0;

while (!$column_left_display->EOF and $box_cnt < 100) {

  $box_cnt++;

  if ( file_exists(DIR_WS_MODULES . 'sideboxes/' . $column_left_display->fields['layout_box_name']) or file_exists(DIR_WS_MODULES . 'sideboxes/' . $template_dir . '/' . $column_left_display->fields['layout_box_name']) ) {

if ( file_exists(DIR_WS_MODULES . 'sideboxes/' . $template_dir . '/' . $column_left_display->fields['layout_box_name']) ) {
  $box_id = zen_get_box_id($column_left_display->fields['layout_box_name']);

if ( $detect->isMobile() && !$detect->isTablet() || $_SESSION['layoutType'] == 'mobile' ) {

if ( $column_left_display->fields['show_box_min_width'] == '0' ) {
    $flag_disable_box = true;
  } else {
    $flag_disable_box = false;
 }

} else if ( $detect->isTablet() || $_SESSION['layoutType'] == 'tablet'){

if ( $column_left_display->fields['layout_box_status_tablet'] == '0' ) {
    $flag_disable_box = true;
  } else {
    $flag_disable_box = false;
 }

} else {

if ( $column_left_display->fields['layout_box_status_desktop'] == '0' ) {
$desktopClass = 'desktopHide';
  } else {
$desktopClass = '';

 }

if ( $column_left_display->fields['layout_box_status_tablet'] == '0' ) {
$tabletClass = 'tabletHide';
  } else {
$tabletClass = '';

 }

if ( $column_left_display->fields['show_box_min_width'] == '0' ) {
$mobileClass = 'mobileHide';
  } else {
$mobileClass = '';

 }

$flag_disable_box = false;

}

if ($flag_disable_box == false) {

  require(DIR_WS_MODULES . 'sideboxes/' . $template_dir . '/' . $column_left_display->fields['layout_box_name']);

  }

} else {

  $box_id = zen_get_box_id($column_left_display->fields['layout_box_name']);

if ( $detect->isMobile() && !$detect->isTablet() || $_SESSION['layoutType'] == 'mobile' ) {

if ( $column_left_display->fields['show_box_min_width'] == '0' ) {
    $flag_disable_box = true;
  } else {
    $flag_disable_box = false;
 }

} else if ( $detect->isTablet() || $_SESSION['layoutType'] == 'tablet'){

if ( $column_left_display->fields['layout_box_status_tablet'] == '0' ) {
    $flag_disable_box = true;
  } else {
    $flag_disable_box = false;
 }

} else {

if ( $column_left_display->fields['layout_box_status_desktop'] == '0' ) {
$desktopClass = 'desktopHide';
  } else {
$desktopClass = '';

 }

if ( $column_left_display->fields['layout_box_status_tablet'] == '0' ) {
$tabletClass = 'tabletHide';
  } else {
$tabletClass = '';

 }

if ( $column_left_display->fields['show_box_min_width'] == '0' ) {
$mobileClass = 'mobileHide';
  } else {
$mobileClass = '';

 }

$flag_disable_box = false;

}

if ($flag_disable_box == false) {

  require(DIR_WS_MODULES . 'sideboxes/' . $column_left_display->fields['layout_box_name']);

  }

}
  } // file_exists

  $column_left_display->MoveNext();

} // while column_left

$box_id = '';

?>
