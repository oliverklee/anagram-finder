#!/usr/bin/env php
<?php
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

$wordListReader = new \OliverKlee\Anagrams\WordListReader();
$words = $wordListReader->read(__DIR__ . '/../Resources/Private/Dictionaries/brit-a-z.txt');

$anagramFinder = new \OliverKlee\Anagrams\AnagramFinder();
$anagrams = $anagramFinder->findAnagrams($words);

foreach ($anagrams as $anagram) {
    echo implode(', ', $anagram) . "\n";
}
