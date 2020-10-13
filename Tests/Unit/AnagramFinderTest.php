<?php

namespace OliverKlee\CodeKata\Tests\Unit;

use OliverKlee\CodeKata\AnagramFinder;
use PHPUnit\Framework\TestCase;

/**
 * Testcase.
 */
class AnagramFinderTest extends TestCase
{
    /**
     * @var AnagramFinder
     */
    private $subject = null;

    protected function setUp(): void
    {
        $this->subject = new AnagramFinder();
    }

    /**
     * @test
     */
    public function findAnagramsForEmptyArrayReturnsEmptyArray(): void
    {
        self::assertSame(
            [],
            $this->subject->findAnagrams([])
        );
    }

    /**
     * @test
     */
    public function findAnagramsForArrayWithOneWordsReturnsEmptyArray(): void
    {
        self::assertSame(
            [],
            $this->subject->findAnagrams(['iphone'])
        );
    }

    /**
     * @test
     */
    public function findAnagramsForArrayWithTwoNonAgramsReturnsEmptyArray(): void
    {
        self::assertSame(
            [],
            $this->subject->findAnagrams(['ios', 'android'])
        );
    }

    /**
     * @test
     */
    public function findAnagramsForTwoAnagramWordsReturnsArrayWithBothWords(): void
    {
        $anagrams = ['one', 'neo'];

        self::assertSame(
            [$anagrams],
            $this->subject->findAnagrams($anagrams)
        );
    }
}
