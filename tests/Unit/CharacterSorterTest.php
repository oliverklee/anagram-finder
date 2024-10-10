<?php

declare(strict_types=1);

namespace OliverKlee\Anagrams\Tests\Unit;

use OliverKlee\Anagrams\CharacterSorter;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(CharacterSorter::class)]
final class CharacterSorterTest extends TestCase
{
    private CharacterSorter $subject;

    #[\Override]
    protected function setUp(): void
    {
        $this->subject = new CharacterSorter();
    }

    #[Test]
    public function sortForEmptyStringReturnsEmptyString(): void
    {
        self::assertSame(
            '',
            $this->subject->sort('')
        );
    }

    #[Test]
    public function sortForOneCharacterReturnsThatCharacter(): void
    {
        self::assertSame(
            'h',
            $this->subject->sort('h')
        );
    }

    #[Test]
    public function sortForPresortedCharactersReturnsSortedCharacters(): void
    {
        self::assertSame(
            'ab',
            $this->subject->sort('ab')
        );
    }

    #[Test]
    public function sortForTwoUnsortedCharactersReturnsTwoSortedCharacters(): void
    {
        self::assertSame(
            'ab',
            $this->subject->sort('ba')
        );
    }

    #[Test]
    public function sortWithWhitespaceInsideDiscardsTheWhitespace(): void
    {
        self::assertSame(
            'ab',
            $this->subject->sort('b a')
        );
    }

    #[Test]
    public function sortForTwiceTheSameCharacterShouldReturnTheCharacterTwice(): void
    {
        self::assertSame(
            'aa',
            $this->subject->sort('aa')
        );
    }

    #[Test]
    public function sortForCharsWithApostropheRemovesApostrophe(): void
    {
        self::assertSame(
            'aa',
            $this->subject->sort('a\'a')
        );
    }
}
