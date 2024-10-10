<?php

declare(strict_types=1);

namespace OliverKlee\Anagrams;

/**
 * This class can read a list of words from disk.
 */
class WordListReader
{
    /**
     * @return list<string>
     */
    public function read(string $fileName): array
    {
        if (!file_exists($fileName)) {
            throw new \RuntimeException('File doesn\'t exists');
        }

        $content = file_get_contents($fileName);
        if ($content === '') {
            return [];
        }
        $rawWords = explode("\n", $content);

        $filteredWords = array_filter($rawWords, static fn(string $word): bool => trim($word) !== '' && !str_contains($word, '\''));

        return array_values($filteredWords);
    }
}
