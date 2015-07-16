<?php
namespace OliverKlee\CodeKata\Tests\Unit;

use OliverKlee\CodeKata\CharacterSorter;

/**
 * Testcase.
 */
class CharacterSorterTest extends \PHPUnit_Framework_TestCase {
	/**
	 * @var CharacterSorter
	 */
	private $subject = NULL;

	protected function setUp() {
		$this->subject = new CharacterSorter();
	}

	/**
	 * @test
	 */
	public function thereAreNoTests() {
		self::markTestIncomplete('To be done.');
	}
}