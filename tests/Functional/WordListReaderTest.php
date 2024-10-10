<?php

declare(strict_types=1);

namespace OliverKlee\Anagrams\Tests\Functional;

use OliverKlee\Anagrams\WordListReader;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(WordListReader::class)]
final class WordListReaderTest extends TestCase
{
    private WordListReader $subject;

    protected function setUp(): void
    {
        $this->subject = new WordListReader();
    }

    #[Test]
    public function readForEmptyFileReturnsEmptyArray(): void
    {
        self::assertSame(
            [],
            $this->subject->read(__DIR__ . '/Fixtures/empty.txt')
        );
    }

    #[Test]
    public function readForNonexistentFileThrowsException(): void
    {
        $this->expectException(\RuntimeException::class);

        $this->subject->read(__DIR__ . '/Fixtures/nothing-here.txt');
    }

    #[Test]
    public function readForOnlyOneWordInFileReturnsArraWithJustOneWord(): void
    {
        self::assertSame(
            [
                'one',
            ],
            $this->subject->read(__DIR__ . '/Fixtures/oneWord.txt')
        );
    }

    #[Test]
    public function readForTwoWordsInFileReturnsTheTwoWords(): void
    {
        self::assertSame(
            [
                'one',
                'two',
            ],
            $this->subject->read(__DIR__ . '/Fixtures/twoWords.txt')
        );
    }

    #[Test]
    public function readForEmptyLineAtTheEndIsRemoved(): void
    {
        self::assertSame(
            [
                'one',
            ],
            $this->subject->read(__DIR__ . '/Fixtures/oneWordWithEmptyLineAtTheEnd.txt')
        );
    }

    #[Test]
    public function readForEmptyLineInsideIsRemoved(): void
    {
        self::assertSame(
            [
                'one',
                'two',
            ],
            $this->subject->read(__DIR__ . '/Fixtures/oneWordWithEmptyLineInside.txt')
        );
    }

    #[Test]
    public function readIgnoresWordsWithApostrophe(): void
    {
        self::assertSame(
            [],
            $this->subject->read(__DIR__ . '/Fixtures/oneWordWithApostrophe.txt')
        );
    }
}
