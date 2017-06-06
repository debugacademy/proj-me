<?php

namespace Drupal\proj_me_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'ContactInformation' block.
 *
 * @Block(
 *  id = "contact_information_block",
 *  admin_label = @Translation("Contact Information Block"),
 * )
 */
class ContactInformation extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['contact_information_block']['#markup'] = 'Implement ContactInformation.';

    return $build;
  }

}
