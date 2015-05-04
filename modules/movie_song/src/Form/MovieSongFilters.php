<?php
/**
 * @file
 * Contains \Drupal\hello_world\Controller\HelloController.
 */
namespace Drupal\movie_song\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;


class MovieSongFilters extends FormBase {

  public function getFormId() {
    // Unique ID of the form.
    return 'list_user_form';
  }


  public function buildForm(array $form, FormStateInterface $form_state) {
    $input = $form_state->getUserInput();
    //dpm($form);
    //dpm($form_state);
    $form['#attributes'] = array('id' => array('list-user-form-ajax'));
    $first_name = empty($input['first_name']) ? NULL : $input['first_name'];
    $last_name = empty($input['last_name']) ? NULL : $input['last_name'];
    $header = array(array('data' => 'First Name', 'field' => 'fn.field_name_value', 'sort' => 'ASC'), array('data'=>'Last Name', 'field' => 'ln.field_last_name_value', 'sort' => 'ASC'));
    $users = $this->getusers($first_name, $last_name, $header);
    // Create a $form API array.
    $form['first_name'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('First Name'),
      '#default_value' => $first_name,
    );
    $form['last_name'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Last Name'),
      '#default_value' => $last_name,

    );
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Filter'),
      '#button_type' => 'primary',
      '#weight' => 99,
      '#ajax' => array(
        'wrapper' => 'list-user-form-ajax',
        //'callback' => 'Drupal\config_translation\FormElement\DateFormat::ajaxSample',
        //'event' => 'keyup',
        'progress' => array(
          'type' => 'throbber',
          'message' => NULL,
        ),),
    );
    $form['users_list'] = array(
      '#type' => 'table',
      '#header' => $header,
      '#rows' => $users,
      '#empty' => t('There are no items yet'),
      '#weight' => 100,
      );
    $form['pager'] = array(
      '#type' => 'pager',
      '#weight' => 101,
      );
    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    //WHy rebuild true, and how it works on form state where its not passed as reference
    $form_state->setRebuild(TRUE);
    return $form;
  }

  private function getusers($first_name, $last_name, $header) {
    $rows = array();
    //need to add tablesort and pager later.
    //query to get first name, last name and then join it with user table to get
    $query = db_select( 'user__field_name', 'fn' )->extend('Drupal\Core\Database\Query\PagerSelectExtender');
    $query->extend('Drupal\Core\Database\Query\TableSortExtender');
    $query->fields( 'fn', array('field_name_value'));
    $query->join('user__field_last_name','ln', '(ln.entity_id = fn.entity_id)');
    $query->fields( 'ln', array('field_last_name_value'));
    $query->limit(5);
    $query->orderByHeader($header);
    if (!empty($first_name)) {
      $query->condition('field_name_value', '%' . db_like($first_name) . '%', 'LIKE');
    }
    if (!empty($last_name)) {
      $query->condition('field_last_name_value', '%' . db_like($last_name) . '%', 'LIKE');
    }
    $result = $query->execute();
    $i = 0;
    foreach ($result as $row) {
      $rows[$i][] = $row->field_name_value;
      $rows[$i][] = $row->field_last_name_value;
      $i++;
    }
    return $rows;
  }
}
