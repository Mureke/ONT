<?php
/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function ONT_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['mtt_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('ONT theme Settings'),
    '#collapsible' => FALSE,
	'#collapsed' => FALSE,
  );

  $form['mtt_settings']['breadcrumb'] = array(
    '#type' => 'fieldset',
    '#title' => t('Breadcrumb'),
    '#collapsible' => TRUE,
	'#collapsed' => FALSE,
  );
  
  $form['mtt_settings']['breadcrumb']['breadcrumb_display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show breadcrumb'),
  	'#description'   => t('Use the checkbox to enable or disable breadcrumb.'),
	'#default_value' => theme_get_setting('breadcrumb_display','ONT'),
  );
  
  $form['mtt_settings']['breadcrumb']['breadcrumb_separator'] = array(
    '#type' => 'textfield',
    '#title' => t('Breadcrumb separator'),
	'#default_value' => theme_get_setting('breadcrumb_separator','ONT'),
    '#size'          => 5,
    '#maxlength'     => 10,
  );
  
  $form['mtt_settings']['breadcrumb']['breadcrumb_home'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Show home page link in breadcrumb'),
  	'#description'   => t('Use the checkbox to enable or disable the home page link in breadcrumb.'),
    '#default_value' => theme_get_setting('breadcrumb_home'),
  );
  
  $form['mtt_settings']['support'] = array(
    '#type' => 'fieldset',
    '#title' => t('Accessibility and support settings'),
    '#collapsible' => TRUE,
	'#collapsed' => FALSE,
  );
  
  $form['mtt_settings']['support']['responsive'] = array(
    '#type' => 'fieldset',
    '#title' => t('Responsive'),
    '#collapsible' => TRUE,
	'#collapsed' => FALSE,
  );
  
  $form['mtt_settings']['support']['responsive']['responsive_meta'] = array(
    '#type' => 'checkbox',
    '#title' => t('Add meta tags to support responsive design on mobile devices.'),
	'#default_value' => theme_get_setting('responsive_meta','ONT'),
  );
  
  $form['mtt_settings']['support']['responsive']['responsive_respond'] = array(
    '#type' => 'checkbox',
    '#title' => t('Add Respond.js JavaScript to add basic CSS3 media query support to IE 6-8.'),
	'#default_value' => theme_get_setting('responsive_respond','ONT'),
    '#description'   => t('IE 6-8 require a JavaScript polyfill solution to add basic support of CSS3 media queries. Note that you should enable <strong>Aggregate and compress CSS files</strong> through <em>/admin/config/development/performance</em>.'),
  );
    
  $form['mtt_settings']['credits'] = array(
    '#type' => 'fieldset',
    '#title' => t('Credits'),
    '#collapsible' => TRUE,
	'#collapsed' => FALSE,
  );
  
  $form['mtt_settings']['credits']['credits_display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show credits'),
  	'#description'   => t('Use the checkbox to enable or disable credits.'),
	'#default_value' => theme_get_setting('credits_display','ONT'),
  );
  
}