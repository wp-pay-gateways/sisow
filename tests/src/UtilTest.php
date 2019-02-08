<?php

namespace Pronamic\WordPress\Pay\Gateways\Sisow;

use WP_UnitTestCase;

/**
 * Title: Sisow util test
 * Description:
 * Copyright: 2005-2019 Pronamic
 * Company: Pronamic
 *
 * @author  Remco Tolsma
 * @version 2.0.0
 * @since   1.0.0
 */
class UtilTest extends WP_UnitTestCase {
	public function test_charachters() {
		$allowed_chars   = 'ABCabc123= %*+-./&@"\':;?()$';
		$forbidden_chars = '#!€^_{}';

		$test = $allowed_chars . $forbidden_chars;

		$result   = Util::filter( $test );
		$expected = $allowed_chars;

		$this->assertEquals( $expected, $result );
	}
}