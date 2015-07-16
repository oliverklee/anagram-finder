<?php
namespace OliverKlee\CodeKata\Tests\Functional;

use OliverKlee\CodeKata\AnagramFinder;

/**
 * Testcase.
 */
class AnagramFinderTest extends \PHPUnit_Framework_TestCase {
	/**
	 * @var AnagramFinder
	 */
	private $subject = NULL;

	protected function setUp() {
		$this->subject = new AnagramFinder();
	}

	/**
	 * @test
	 */
	public function thereAreNoTests() {
		self::markTestIncomplete('To be done.');
	}
}