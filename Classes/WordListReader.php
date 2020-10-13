<?php
declare(strict_types=1);

namespace OliverKlee\CodeKata;

use RuntimeException;

/**
 * This class can read a list of words from disk.
 */
class WordListReader
{
    /**
     * @param string $fileName
     *
     * @return string[]
     */
    public function read(string $fileName): array
    {
        if (!file_exists($fileName)) {
            throw new RuntimeException('File doesn\'t exists');
        }

        $content = file_get_contents($fileName);
        if ($content === '') {
            return [];
        }
        $rawWords = explode("\n", $content);

        $filteredWords = array_filter($rawWords, static function (string $word): bool {
            return trim($word) !== '' && strpos($word, '\'') === false;
        });

        return array_values($filteredWords);
    }
}
