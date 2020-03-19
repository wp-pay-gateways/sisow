<?php
/**
 * Invoice request
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2020 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Pay\Payments
 */

namespace Pronamic\WordPress\Pay\Gateways\Sisow;

/**
 * Title: Sisow invoice request
 * Description:
 * Copyright: 2005-2020 Pronamic
 * Company: Pronamic
 *
 * @author  Reüel van der Steege
 * @version 2.0.1
 * @since   2.0.1
 */
class InvoiceRequest extends Request {
	/**
	 * Get signature data.
	 *
	 * @return array
	 */
	public function get_signature_data() {
		return array(
			$this->get_parameter( 'trxid' ),

			/*
			 * Indien er geen gebruik wordt gemaakt van de shopid dan kunt u deze weglaten uit de berekening.
			 */
			$this->get_parameter( 'shopid' ),

			$this->get_parameter( 'merchantid' ),
		);
	}
}
