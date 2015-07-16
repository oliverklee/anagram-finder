<?php
namespace OliverKlee\CodeKata\Tests\Functional;

use OliverKlee\CodeKata\WordListReader;

/**
 * Testcase.
 */
class WordListReaderTest extends \PHPUnit_Framework_TestCase {
	/**
	 * @var WordListReader
	 */
	private $subject = NULL;

	protected function setUp() {
		$this->subject = new WordListReader();
	}
}