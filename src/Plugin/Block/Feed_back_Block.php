<?php
/**
  *@file
  * Contains \Drupal\feed_back_form\Plugin\Block\Feed_back_Block
  */
namespace Drupal\feed_back_form\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;
/**
  * Provides a 'Feedback' Block.
  * @Block(
  *   id = "feedback_block',
  *   admin_label = @Translation("Feedback Block"),
  *   category = @Translation("Custom Feedback Block")
  *   )
  */
  
  class Feed_back_Block extends BlockBase {
  /**
   * {@inheritdoc}
   */
    public function build() {
      $form = \Drupal::formBuilder()->getForm('Drupal\feed_back_form\Form\Feed_back_Form');
      return $form;    
     }
  }