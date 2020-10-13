<?php

namespace OliverKlee\CodeKata\Tests\Unit;

use OliverKlee\CodeKata\CharacterSorter;
use PHPUnit\Framework\TestCase;

/**
 * Testcase.
 */
class CharacterSorterTest extends TestCase
{
    /**
     * @var CharacterSorter
     */
    private $subject = null;

    protected function setUp()
    {
        $this->subject = new CharacterSorter();
    }

    /**
     * @test
     */
    public function sortForEmptyStringReturnsEmptyString()
    {
        self::assertSame(
            '',
            $this->subject->sort('')
        );
    }

    /**
     * @test
     */
    public function sortForOneCharacterReturnsThatCharacter()
    {
        self::assertSame(
            'h',
            $this->subject->sort('h')
        );
    }

    /**
     * @test
     */
    public function sortForPresortedCharactersReturnsSortedCharacters()
    {
        self::assertSame(
            'ab',
            $this->subject->sort('ab')
        );
    }

    /**
     * @test
     */
    public function sortForTwoUnsortedCharactersReturnsTwoSortedCharacters()
    {
        self::assertSame(
            'ab',
            $this->subject->sort('ba')
        );
    }

    /**
     * @test
     */
    public function sortWithWhitespaceInsideDiscardsTheWhitespace()
    {
        self::assertSame(
            'ab',
            $this->subject->sort('b a')
        );
    }

    /**
     * @test
     */
    public function sortForTwiceTheSameCharacterShouldReturnTheCharacterTwice()
    {
        self::assertSame(
            'aa',
            $this->subject->sort('aa')
        );
    }

    /**
     * @test
     */
    public function sortForCharsWithApostofeShouldRemoveApostfophe()
    {
        self::assertSame(
            'aa',
            $this->subject->sort('a\'a')
        );
    }
}
