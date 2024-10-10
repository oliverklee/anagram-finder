<?php

declare(strict_types=1);

namespace OliverKlee\Anagrams;

/**
 * This class can find anagrams from lists of words.
 */
class AnagramFinder
{
    /**
     * @param array<non-empty-string> $words
     *
     * @return list<non-empty-list<non-empty-string>>
     */
    public function findAnagrams(array $words): array
    {
        $sorter = new CharacterSorter();

        $potentialAnagrams = [];

        foreach ($words as $word) {
            $sortedCharacters = $sorter->sort($word);
            if (!isset($potentialAnagrams[$sortedCharacters])) {
                $potentialAnagrams[$sortedCharacters] = [];
            }
            $potentialAnagrams[$sortedCharacters][] = $word;
        }

        $anagrams = array_filter($potentialAnagrams, static fn(array $words): bool => count($words) > 1);

        return array_values($anagrams);
    }
}
