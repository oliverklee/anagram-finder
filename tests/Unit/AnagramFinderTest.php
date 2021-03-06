<?php
declare(strict_types=1);

namespace OliverKlee\CodeKata\Tests\Unit;

use OliverKlee\CodeKata\AnagramFinder;
use PHPUnit\Framework\TestCase;

/**
 * @covers \OliverKlee\CodeKata\AnagramFinder
 */
final class AnagramFinderTest extends TestCase
{
    private AnagramFinder $subject;

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
    public function findAnagramsForArrayWithTwoNonAnagramsReturnsEmptyArray(): void
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
