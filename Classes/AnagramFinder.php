<?php

namespace OliverKlee\CodeKata;

/**
 * This class can find anagrams from lists of words.
 */
class AnagramFinder
{
    /**
     * @param string[] $words
     *
     * @return string[]
     */
    public function findAnagrams(array $words)
    {
        $sorter = new CharacterSorter();

        /** @var string[][] $potentialAnagrams */
        $potentialAnagrams = array();

        foreach ($words as $word) {
            $sortedCharacters = $sorter->sort($word);
            if (!isset($potentialAnagrams[$sortedCharacters])) {
                $potentialAnagrams[$sortedCharacters] = array();
            }
            $potentialAnagrams[$sortedCharacters][] = $word;
        }

        $anagrams = array_filter($potentialAnagrams, function (array $words) {
            return count($words) > 1;
        });

        return array_values($anagrams);
    }
}
