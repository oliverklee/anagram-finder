# Anagram finder

This tool is the result of an exercise (code kata, coding dojo) for test-driven
development (TDD) for PHP using PHPUnit at Oliver Klee's workshops.

An anagram is pair of two words that consist of exactly the same letters, but
in different order.

Example: anthologise, theologians

The dictionaries have been copied from the
[most-common-words-by-language](https://github.com/oprogramador/most-common-words-by-language)
project.

## Installation

Run `composer install` to install the required Composer packages.

## How to run it

```bash
bin/find-anagrams
```

You can also specify a dictionary to use from `resources/dictionaries/`:

```bash
bin/find-anagrams german.txt
```

## The exercises

The big picture is this: "Find and output all anagrams from a text file with a list of words."

1. Create a class that reads a list of words from a file and returns it as an array.
2. Create a class that takes a word and sorts the characters.
3. Create a class that finds and returns the anagram from an array of words.
4. Deal with duplicates and empty lines in the file gracefully.
5. Find the anagrams in a case-insensitive way.
6. Sort the anagrams alphabetically during output.

## About me (Oliver Klee)

I am the maintainer of the
[PHPUnit TYPO3 extension](http://typo3.org/extensions/repository/view/phpunit),
which is available in the TYPO3 extension repository (TER).

You can book me for
[workshops](https://www.oliverklee.de/workshops/workshops.html)
at your company.

I also frequently give workshops at the TYPO3 Developer Days.

## More Documentation

* [Handout to my workshops on test-driven development (TDD)](https://github.com/oliverklee/tdd-reader)

## Other example projects

* [Coffee example](https://github.com/oliverklee/coffee)
  is my starting point for demonstrating TDD
* [Tea example](https://github.com/oliverklee/tea-for-workshops)
  for testing Extbase TYPO3 extensions
