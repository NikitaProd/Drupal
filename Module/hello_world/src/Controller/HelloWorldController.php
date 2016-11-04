<?php
/**
 * @file
 * Contains \Drupal\hello_world\Controller\HelloWorldController.
 */

namespace Drupal\hello_world\Controller;
use Drupal\Core\Controller\ControllerBase;

/**
 * Controller routines for hello_world module routes.
 */
class HelloWorldController extends ControllerBase {

	/**
  * Return the 'Hello World' page.
  *
  * @return string
  *   A render array containing our 'Hello World' page content.
  */
  public function helloWorld() {
    $output = array();
    
    $output['hello_world'] = array(
      '#markup' => $this->t('Hello World Test 1 !'),

    );
    return $output;
  }
}