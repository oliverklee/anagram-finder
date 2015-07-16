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

	/**
	 * @test
	 */
	public function findAnagramsForEmptyArrayReturnsEmptyArray() {
		self::assertSame(
			array(),
			$this->subject->findAnagrams(array())
		);
	}

	/**
	 * @test
	 */
	public function findAnagramsForArrayWithOneWordsReturnsEmptyArray() {
		self::assertSame(
			array(),
			$this->subject->findAnagrams(array('iphone'))
		);
	}

	/**
	 * @test
	 */
	public function findAnagramsForArrayWithTwoNonAgramsReturnsEmptyArray() {
		self::assertSame(
			array(),
			$this->subject->findAnagrams(array('ios', 'android'))
		);
	}

	/**
	 * @test
	 */
	public function findAnagramsForTwoAnagramWordsReturnsArrayWithBothWords() {
		self::assertSame(
			array(array('one', 'neo')),
			$this->subject->findAnagrams(array('one', 'neo'))
		);
	}
}