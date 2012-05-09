<?php
/**
 * @file taxreceipt.admin.inc
 */

/**
 * @ingroup forms
 * @see system_settings_form()
 */
function taxreceipt_admin_settings() {
  $form = array();

  $default_tax_categories = taxreceipt_default_tax_categories();
  $form['taxreceipt_tax_categories'] = array(
    '#type' => 'textarea',
    '#title' => 'test',
    '#description' => 'test',
    '#default_value' => variable_get('taxreceipt_tax_categories', $default_tax_categories),
  );

  return system_settings_form($form);
}
