<?php

namespace OliverKlee\CodeKata\Tests\Functional;

use OliverKlee\CodeKata\WordListReader;
use PHPUnit\Framework\TestCase;

/**
 * Testcase.
 */
class WordListReaderTest extends TestCase
{
    /**
     * @var WordListReader
     */
    private $subject = null;

    protected function setUp(): void
    {
        $this->subject = new WordListReader();
    }

    /**
     * @test
     */
    public function readForEmptyFileReturnsEmptyArray(): void
    {
        self::assertSame(
            [],
            $this->subject->read(__DIR__ . '/Fixtures/empty.txt')
        );
    }

    /**
     * @test
     */
    public function readForNonexistentFileThrowsException(): void
    {
        $this->expectException(\RuntimeException::class);

        $this->subject->read(__DIR__ . '/Fixtures/nothing-here.txt');
    }

    /**
     * @test
     */
    public function readForOnlyOneWordInFileReturnsArraWithJustOneWord(): void
    {
        self::assertSame(
            [
                'one',
            ],
            $this->subject->read(__DIR__ . '/Fixtures/oneWord.txt')
        );
    }

    /**
     * @test
     */
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

    /**
     * @test
     */
    public function readForEmptyLineAtTheEndIsRemoved(): void
    {
        self::assertSame(
            [
                'one',
            ],
            $this->subject->read(__DIR__ . '/Fixtures/oneWordWithEmptyLineAtTheEnd.txt')
        );
    }

    /**
     * @test
     */
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

    /**
     * @test
     */
    public function readIgnoresWordsWithApostrophe(): void
    {
        self::assertSame(
            [
            ],
            $this->subject->read(__DIR__ . '/Fixtures/oneWordWithApostrophe.txt')
        );
    }
}
