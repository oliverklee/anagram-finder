<?php

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
    public function sort($unsortedString)
    {
        $explodedString = str_split($unsortedString);
        sort($explodedString);

        return trim(implode($explodedString), '\' ');
    }
}
