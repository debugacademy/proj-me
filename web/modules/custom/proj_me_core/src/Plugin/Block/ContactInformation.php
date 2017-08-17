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
    $build['contact_information_block']['#markup'] = '<div class="contact-box"> 
    	<p>Email | <span class="contact-info"> mysheikh08@gmail.com</span></p>
    	<p>Skype | <span class="contact-info"> m.sheikh2</span></p>
    	<p>Phone | <span class="contact-info"> (571) 294-4768</span></p>
    	<p>Linkedin | <span class="contact-info"> Resume</span></p>
    </div>';

    return $build;
  }

}
