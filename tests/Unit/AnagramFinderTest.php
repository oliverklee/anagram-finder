<?php

declare(strict_types=1);

namespace OliverKlee\Anagrams\Tests\Unit;

use OliverKlee\Anagrams\AnagramFinder;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(AnagramFinder::class)]
final class AnagramFinderTest extends TestCase
{
    private AnagramFinder $subject;

    #[\Override]
    protected function setUp(): void
    {
        $this->subject = new AnagramFinder();
    }

    #[Test]
    public function findAnagramsForEmptyArrayReturnsEmptyArray(): void
    {
        self::assertSame(
            [],
            $this->subject->findAnagrams([])
        );
    }
}
