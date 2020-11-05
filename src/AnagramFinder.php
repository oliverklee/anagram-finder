<?php
declare(strict_types=1);

namespace OliverKlee\CodeKata;

/**
 * This class can find anagrams from lists of words.
 */
class AnagramFinder
{
    /**
     * @param string[] $words
     *
     * @return string[][]
     */
    public function findAnagrams(array $words): array
    {
        $sorter = new CharacterSorter();

        /** @var string[][] $potentialAnagrams */
        $potentialAnagrams = [];

        foreach ($words as $word) {
            $sortedCharacters = $sorter->sort($word);
            if (!isset($potentialAnagrams[$sortedCharacters])) {
                $potentialAnagrams[$sortedCharacters] = [];
            }
            $potentialAnagrams[$sortedCharacters][] = $word;
        }

        $anagrams = array_filter($potentialAnagrams, static function (array $words): bool {
            return count($words) > 1;
        });

        return array_values($anagrams);
    }
}
