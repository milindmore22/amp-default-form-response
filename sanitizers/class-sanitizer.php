<?php
/**
 * Sanitizer
 *
 * @package Google\AMP_Default_Form_Response
 */

namespace Google\AMP_Default_Form_Response;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use AMP_Base_Sanitizer;
use DOMElement;
use DOMXPath;

/**
 * Class Sanitizer
 */
class Sanitizer extends AMP_Base_Sanitizer {

	/**
	 * Sanitize.
	 */
	public function sanitize() {
		$xpath = new DOMXPath( $this->dom );

		// Get all forms.
		$forms = $xpath->query( '//form' );

		// Loop through each form.
		foreach ( $forms as $form ) {
			$this->update_form_response_message_elements( $form );
		}

	}

	/**
	 * Update Form Response Message Elements.
	 *
	 * @param DOMElement $form The form node to check.
	 */
	public function update_form_response_message_elements( $form ) {

		$elements = array(
			'submit-error'   => null,
			'submit-success' => null,
			'submitting'     => null,
		);

		foreach ( $elements as $attribute => $element ) {
			if ( $element ) {
				continue;
			}

			$div      = $this->dom->createElement( 'div' );
			$template = $this->dom->createElement( 'template' );
			$div->setAttribute( 'class', 'amp-wp-default-form-message' );

			// Create a p element.
			$p = $this->dom->createElement( 'p' );

			if ( 'submitting' === $attribute ) {
				// Add the text node to the p element of submitting message.
				$p->appendChild( $this->dom->createTextNode( __( 'Submitting...' ) ) );

			} else {
				if ( 'submit-success' === $attribute ) {
					// Add the text node to the p element of success message.
					$p->appendChild( $this->dom->createTextNode( __( 'Form Submitted Successfully!' ) ) );

				} elseif ( 'submit-error' === $attribute ) {
					// Add the text node to the p element of error message.
					$p->appendChild( $this->dom->createTextNode( __( 'Form Submission Failed!' ) ) );
				}
			}

			// Set the attribute to the div element.
			$div->setAttribute( $attribute, '' );

			// Append the p element to the template.
			$template->appendChild( $p );

			$template->setAttribute( 'type', 'amp-mustache' );
			$div->appendChild( $template );
			$form->appendChild( $div );
		}
	}

}
