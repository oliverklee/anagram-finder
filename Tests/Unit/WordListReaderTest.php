<?php
namespace OliverKlee\CodeKata\Tests\Unit;

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

	/**
	 * @test
	 */
	public function thereAreNoTests() {
		self::markTestIncomplete('To be done.');
	}
}