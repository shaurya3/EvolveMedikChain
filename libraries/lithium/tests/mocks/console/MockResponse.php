<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2016, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace lithium\tests\mocks\console;

use lithium\util\Text;

class MockResponse extends \lithium\console\Response {

	public $testAction;

	public $testParam;

	public function __construct(array $config = array()) {
		parent::__construct($config);
		$this->output = null;
		$this->error = null;
	}

	public function output($output) {
		return $this->output .= Text::insert($output, $this->styles(false));
	}

	public function error($error) {
		return $this->error .= Text::insert($error, $this->styles(false));
	}

	public function __destruct() {
		$this->output = null;
		$this->error = null;
	}
}

?>