<?php
/**
 * Test Suite Test Plugin Cache Engine class.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) Tests <http://book.cakephp.org/view/1196/Testing>
 * Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 *  Licensed under The Open Group Test Suite License
 *  Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://book.cakephp.org/view/1196/Testing CakePHP(tm) Tests
 * @package       cake
 * @subpackage    cake.tests.cases.libs
 * @since         CakePHP(tm) v 1.3
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
class TestPluginCacheEngine extends CacheEngine {

	public function write($key, $value, $duration) { }

	public function read($key) { }

	public function increment($key, $offset = 1) { }

	public function decrement($key, $offset = 1) { }

	public function delete($key) { }

	public function clear($check) { }
	
}