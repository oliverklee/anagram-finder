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
}
