<?php
namespace OliverKlee\CodeKata\Tests\Unit;

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
}