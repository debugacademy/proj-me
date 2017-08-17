<?php

namespace Drupal\proj_me_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'CallToAction' block.
 *
 * @Block(
 *  id = "call_to_action_block",
 *  admin_label = @Translation("Call To Action Block"),
 * )
 */
class CallToAction extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
     $build['call_to_action_block']['#markup'] = '<p> Interested in working together? <span class = "lets-build"> Let\'s build something awesome </span> </p>';

    return $build;
  }

}
