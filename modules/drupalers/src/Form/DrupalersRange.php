<?php
/**
 * @file
 * Contains \Drupal\hello_world\Controller\HelloController.
 */
namespace Drupal\drupalers\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class DrupalersRange extends FormBase {

  public function getFormId() {
    // Unique ID of the form.
    return 'druaplers_range';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    // Create a $form API array.
    $form['init_id'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Starting Id'),
      '#required' => TRUE,
    );
    $form['finish_id'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Finish Id'),
      '#required' => TRUE,
    );
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Import'),
      '#button_type' => 'primary',
    );
    return $form;
  }

  public function validateForm(array &$form, FormStateInterface $form_state) {
    $init_id = $form_state->getValue('init_id');
    $final_id = $form_state->getValue('finish_id');
    $init_positive = FALSE;
    $final_positive = FALSE;
    if (!empty($init_id) && (!is_numeric($init_id) || intval($init_id) != $init_id || $init_id <= 0)) {
      $form_state->setError($form['init_id'],'Init id should be an integer');
    }
    else if (empty($init_id)){
       $form_state->setError($form['init_id'],'Init id should not be empty');
    }
    else {
      $init_positive = TRUE;
    }
    if (!empty($final_id) && (!is_numeric($final_id) || intval($final_id) != $final_id || $final_id <= 0)) {
      $form_state->setError($form['final_id'],'Finish id should be an integer');
    }
    else {
      $final_positive = TRUE;
    }
    if ($final_positive && $init_positive) {
      if ($final_id < $init_id) {
        $form_state->setError($form,'Finish id should be greater than init id');
      }
    }
    // Validate submitted form data.
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $init_id = $form_state->getValue('init_id');
    $final_id = $form_state->getValue('finish_id');
    $batch = array(
      'title' => t('Importing'),
      'operations' => array(
        array('import_drupalers', array($init_id, $final_id)),
      ),
      'finished' => 'drupalers_finished_callback',
      'file' => drupal_get_path('module', 'drupalers') . '/src/Form/DrupalersImport.php',

    );
    batch_set($batch);
  }



  }
