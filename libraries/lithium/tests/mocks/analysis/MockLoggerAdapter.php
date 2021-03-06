<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2016, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace lithium\tests\mocks\analysis;

class MockLoggerAdapter extends \lithium\core\Object {

	public function write($name, $value) {
		return function($params) {
			return true;
		};
	}
}

?>