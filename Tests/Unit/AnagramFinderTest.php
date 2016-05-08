<?php

namespace OliverKlee\CodeKata\Tests\Unit;

use OliverKlee\CodeKata\AnagramFinder;

/**
 * Testcase.
 */
class AnagramFinderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AnagramFinder
     */
    private $subject = null;

    protected function setUp()
    {
        $this->subject = new AnagramFinder();
    }

    /**
     * @test
     */
    public function findAnagramsForEmptyArrayReturnsEmptyArray()
    {
        self::assertSame(
            [],
            $this->subject->findAnagrams([])
        );
    }

    /**
     * @test
     */
    public function findAnagramsForArrayWithOneWordsReturnsEmptyArray()
    {
        self::assertSame(
            [],
            $this->subject->findAnagrams(['iphone'])
        );
    }

    /**
     * @test
     */
    public function findAnagramsForArrayWithTwoNonAgramsReturnsEmptyArray()
    {
        self::assertSame(
            [],
            $this->subject->findAnagrams(['ios', 'android'])
        );
    }

    /**
     * @test
     */
    public function findAnagramsForTwoAnagramWordsReturnsArrayWithBothWords()
    {
        $anagrams = ['one', 'neo'];

        self::assertSame(
            [$anagrams],
            $this->subject->findAnagrams($anagrams)
        );
    }
}
