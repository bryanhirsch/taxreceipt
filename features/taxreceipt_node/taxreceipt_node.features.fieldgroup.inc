<?php

/**
 * Implementation of hook_fieldgroup_default_groups().
 */
function taxreceipt_node_fieldgroup_default_groups() {
  $groups = array();

  // Exported group: group_income_tax
  $groups['taxreceipt-group_income_tax'] = array(
    'group_type' => 'standard',
    'type_name' => 'taxreceipt',
    'group_name' => 'group_income_tax',
    'label' => 'Income Tax',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset_collapsible',
        'description' => '',
      ),
      'display' => array(
        'description' => '',
        'teaser' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'full' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        '4' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'label' => 'above',
      ),
    ),
    'weight' => '-3',
    'fields' => array(
      '0' => 'field_taxreceipt_line_item',
    ),
  );

  // Exported group: group_taxpayer_stories
  $groups['taxreceipt-group_taxpayer_stories'] = array(
    'group_type' => 'standard',
    'type_name' => 'taxreceipt',
    'group_name' => 'group_taxpayer_stories',
    'label' => 'Taxpayer stories',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset_collapsible',
        'description' => '',
      ),
      'display' => array(
        'description' => '',
        'teaser' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'full' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        '4' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'label' => 'above',
      ),
    ),
    'weight' => '-4',
    'fields' => array(
      '0' => 'field_taxreceipt_taxpayer_story',
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Income Tax');
  t('Taxpayer stories');

  return $groups;
}
