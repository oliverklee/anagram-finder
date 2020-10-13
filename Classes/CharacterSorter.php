<?php
declare(strict_types=1);

namespace OliverKlee\CodeKata;

/**
 * This class can sort characters.
 */
class CharacterSorter
{
    /**
     * @param string $unsortedString
     *
     * @return string
     */
    public function sort(string $unsortedString): string
    {
        $explodedString = str_split($unsortedString);
        sort($explodedString);

        return trim(implode($explodedString), '\' ');
    }
}
