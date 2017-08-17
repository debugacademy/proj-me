<?php

namespace Drupal\proj_me_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'DebugAcademy' block.
 *
 * @Block(
 *  id = "debug_academy_block",
 *  admin_label = @Translation("Debug Academy Block"),
 * )
 */
class DebugAcademy extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['debug_academy_block']['#markup'] = '<p> Template programmed by students of the career-changing  <span class = "debug-academy"> Debug Academy. </span> </p>';



    return $build;
  }

}
