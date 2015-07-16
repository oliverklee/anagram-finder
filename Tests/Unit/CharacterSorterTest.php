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
	public function sortForEmptyStringReturnsEmptyString() {
		self::assertSame(
			'',
			$this->subject->sort('')
		);
	}

	/**
	 * @test
	 */
	public function sortForOneCharacterReturnsThatCharacter() {
		self::assertSame(
			'h',
			$this->subject->sort('h')
		);
	}

	/**
	 * @test
	 */
	public function sortForPresortedCharactersReturnsSortedCharacters() {
		self::assertSame(
			'ab',
			$this->subject->sort('ab')
		);
	}

	/**
	 * @test
	 */
	public function sortForTwoUnsortedCharactersReturnsTwoSortedCharacters() {
		self::assertSame(
			'ab',
			$this->subject->sort('ba')
		);
	}

	/**
	 * @test
	 */
	public function sortWithWhitespaceInsideDiscardsTheWhitespace() {
		self::assertSame(
			'ab',
			$this->subject->sort('b a')
		);
	}

	/**
	 * @test
	 */
	public function sortForTwiceTheSameCharacterShouldReturnTheCharacterTwice() {
		self::assertSame(
			'aa',
			$this->subject->sort('aa')
		);
	}

	/**
	 * @test
	 */
	public function sortForCharsWithApostofeShouldRemoveApostfophe() {
		self::assertSame(
			'aa',
			$this->subject->sort('a\'a')
		);
	}
}