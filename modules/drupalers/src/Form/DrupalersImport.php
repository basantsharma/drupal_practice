<?php
function import_drupalers($init_id, $final_id, &$context) {
  if (empty($context['sandbox'])) {
    $context['sandbox']['progress'] = 0;
    $context['sandbox']['current_id'] = $init_id;
    $context['sandbox']['max'] = $final_id - $init_id;
  }
  $exist = drupalers_exist_data($context['sandbox']['current_id']);
  if (!$exist) {
    $data = get_drupalers_node_data($context['sandbox']['current_id']);
    if ($data) {
      create_node_drupalers($data);
    }
  }
  update_max_min_uid($context['sandbox']['current_id']);
  $context['sandbox']['current_id']++;
  $context['sandbox']['progress']++;
  if ($context['sandbox']['progress'] != $context['sandbox']['max']) {
    $context['finished'] = $context['sandbox']['progress'] / $context['sandbox']['max'];
  }
}


function drupalers_finished_callback($success, $results, $operations) {
  // The 'success' parameter means no fatal PHP errors were detected. All
  // other error management should be handled using 'results'.
  if ($success) {
    $message = \Drupal::translation()->formatPlural(count($results), 'One post processed.', '@count posts processed.');
  }
  else {
    $message = t('Finished with an error.');
  }
  drupal_set_message($message);
}

function drupalers_exist_data($uid) {
  $query = \Drupal::entityQuery('node')
    ->condition('title', $uid)
    ->count()
    ->execute();
  if ($query == 0) {
    return FALSE;
  }
  return TRUE;
}

function get_drupalers_node_data($uid) {
  $value = 'https://www.drupal.org/user/' . $uid;
  $file = $value;
  $doc = new DOMDocument();
  $doc->loadHTMLFile($file);
  $xpath = new DOMXpath($doc);
  $data = array();
  //country name
  $elements = $xpath->query('//*[@id="user_user_full_group_profile_contact"]//div[contains(@class,"field-name-field-country")]/div/div'); // insert Xpath reference.
  if (!is_null($elements)) {
    foreach ($elements as $element) {
      $nodes = $element->childNodes;
      foreach ($nodes as $node) {
        $data['country'] = $node->nodeValue;
      }
    }
  }

  //language
  $elements = $xpath->query('//*[@id="user_user_full_group_profile_contact"]//div[contains(@class,"field-name-field-languages")]/div/div'); // insert Xpath reference.
  if (!is_null($elements)) {
    foreach ($elements as $element) {
      $nodes = $element->childNodes;
      foreach ($nodes as $node) {
        if (empty($data['language'])) {
          $data['language'] =  $node->nodeValue;
        }
        else {
          $data['language'] .= ',' . $node->nodeValue;
        }
      }
    }
  }

  //experience
  $elements = $xpath->query('//*[@id="user_user_full_group_profile_main"]/dl/dd[1]'); // insert Xpath reference.
  if (!is_null($elements)) {
    foreach ($elements as $element) {
      $nodes = $element->childNodes;
      foreach ($nodes as $node) {
       $data['experience'] = $node->nodeValue;
      }

    }
  }

  //gender

  $elements = $xpath->query('//*[@id="user_user_full_group_profile_personal"]//div[contains(@class,"field-name-field-gender")]/div[contains(@class,"field-item")]'); // insert Xpath reference.
  if (!is_null($elements)) {
    foreach ($elements as $element) {
      $nodes = $element->childNodes;
      foreach ($nodes as $node) {
        $data['gender'] = $node->nodeValue;
      }
    }
  }

  //commits
  $elements = $xpath->query('//*[@id="user_user_full_group_profile_main"]//ul[contains(@class,"versioncontrol-project-user-commits")]//li[contains(@class,"last")]'); // insert Xpath reference.
  if (!is_null($elements)) {
    foreach ($elements as $element) {
      $nodes = $element->childNodes;
      foreach ($nodes as $node) {
        $data['commits'] = $node->nodeValue;
      }
    }
  }

  //name
  $elements = $xpath->query('//*[@id="page-title"]'); // insert Xpath reference.
  if (!is_null($elements)) {
    foreach ($elements as $element) {
      $nodes = $element->childNodes;
      foreach ($nodes as $node) {
        $data['name'] = $node->nodeValue;
      }
    }
  }
  if (count($data) > 0) {
    $data['url'] = $value;
    $data['uid'] = $uid;
    //todo code to update and delete
    return $data;
  }
  return FALSE;
}


function create_node_drupalers($data) {
  $create = FALSE;
  $node = array();
  $node['type'] = 'drupalers';
  $node['field_url']['uri'] = $data['url'];
  $node['field_url']['title'] = '';
  $node['field_url']['options'] = array();
  if (!empty($data['name'])) {
    $node['title'] = $data['uid'];
  }
  if (!empty($data['country'])) {
    $node['field_country'] = $data['country'];
    /*if (strtolower($data['country']) == 'india') {
      $create = TRUE;
    }*/
  }
  if (!empty($data['name'])) {
    $node['field_name'] = $data['name'];
  }
  if (!empty($data['language'])) {
    $node['field_language'] = $data['language'];
    if (strpos($data['language'],'Hindi') !== FALSE) {
      $create = TRUE;
    }
  }
  if (!empty($data['gender'])) {
    $node['field_sex'] = $data['gender'];
  }
  if (!empty($data['commits'])) {
    $commit_arr = explode(' ', $data['commits']);
    $data['commits'] = $commit_arr[1];
    $node['field_commits'] = $data['commits'];
  }
  if (!empty($data['experience'])) {
    $exp_arr = explode(' ', $data['experience']);
    $data['experience'] = $exp_arr[0] * 12 + $exp_arr[2];
    $node['field_experience'] = $data['experience'];
  }
  if ($create) {
    $node = entity_create('node', $node);
    $node->save();
  }
}


function update_max_min_uid($uid) {
  $config = \Drupal::service('config.factory')->getEditable('pcp.configuration');
  $min_uid = $config->get('min_drupal_uid');
  $max_uid = $config->get('max_drupal_uid');
  if ($uid > $max_uid) {
    $config->set('max_drupal_uid', $uid)
      ->save();
  }
  if ($uid < $min_uid) {
    $config->set('min_drupal_uid', $uid)
      ->save();
  }
}
