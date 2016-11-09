<?php

namespace Drupal\myform\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class MyForm extends FormBase {

  public function getFormId() {
    // Unique ID of the form.
    return 'form_test';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    // Create a $form API array.
    $form['phone_number'] = array(
      '#type' => 'tel',
      '#title' => $this->t('Your phone number'),
    );
    $form['save'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Save'),
    );
    return $form;
  }

  public function validateForm(array &$form, FormStateInterface $form_state) {
    // Validate submitted form data.
    
   if (strlen($form_state->getValue('phone_number')) < 7) {
        $form_state->setErrorByName('phone_number', $this->t('Mobile number is too short.'));
      }
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Handle submitted form data.
    foreach ($form_state->getValues() as $key => $value) {
      drupal_set_message($key . ': ' . $value);
      
    }
  }
}
