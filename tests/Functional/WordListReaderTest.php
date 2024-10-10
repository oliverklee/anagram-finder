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

    #[\Override]
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
}
