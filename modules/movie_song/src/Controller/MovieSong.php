<?php
/**
 * @file
 * Contains \Drupal\hello_world\Controller\HelloController.
 */
namespace Drupal\movie_song\Controller;



class MovieSong {
  public function content() {
    //get the form
    $form = \Drupal::formBuilder()->getForm('Drupal\movie_song\Form\MovieSongFilters');
    return $form;
     /*$form_render = \Drupal::service('renderer')->render($form);
    dpm($form_render);
    return array(
        '#type' => 'markup',
        '#markup' => $form_render,
    );*/
  }
}
