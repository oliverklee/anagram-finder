<?php

declare(strict_types=1);

namespace OliverKlee\Anagrams;

/**
 * This class can sort characters.
 */
class CharacterSorter
{
    public function sort(string $unsortedString): string
    {
        $explodedString = str_split($unsortedString);
        sort($explodedString);

        return trim(implode('', $explodedString), '\' ');
    }
}
