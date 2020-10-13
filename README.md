# Anagram finder

[![BuildStatus](https://github.com/oliverklee/anagram-finder/workflows/CI/badge.svg?branch=main)](https://github.com/oliverklee/anagram-finder/actions)
[![Build Status](https://travis-ci.org/oliverklee/anagram-finder.svg?branch=master)](https://travis-ci.org/oliverklee/anagram-finder)
[![Latest Stable Version](https://poser.pugx.org/oliverklee/anagram-finder/v/stable.svg)](https://packagist.org/packages/oliverklee/anagram-finder)
[![Total Downloads](https://poser.pugx.org/oliverklee/anagram-finder/downloads.svg)](https://packagist.org/packages/oliverklee/anagram-finder)
[![Latest Unstable Version](https://poser.pugx.org/oliverklee/anagram-finder/v/unstable.svg)](https://packagist.org/packages/oliverklee/anagram-finder)
[![License](https://poser.pugx.org/oliverklee/anagram-finder/license.svg)](https://packagist.org/packages/oliverklee/anagram-finder)

This tool is the result of an exercise (code kata, coding dojo) for test-driven
development (TDD) for PHP using PHPUnit at Oliver Klee's workshops.

An anagram is pair of two words that consist of exactly the same letters, but
in different order.

Example: anthologise, theologians

## Installation

Run `composer install` to install the required Composer packages.

## How to run it

```bash
Scripts/FindAnagrams.php
```

## The exercises

1. Create a class that reads a list of words from a file and returns it as an array.
2. Create a class that takes a word and sorts the characters.
3. Create a class that finds and returns the anagram from an array of words.

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

* [Selenium demo](https://github.com/oliverklee/selenium-demo)
  for using Selenium with PHPUnit
* [Coffee example](https://github.com/oliverklee/coffee)
  is my starting point for demonstrating TDD
* [Tea example](https://github.com/oliverklee/ext_tea)
  for unit tests for extbase extensions for TYPO3 CMS
* [TDD Seed](https://github.com/oliverklee/tdd-seed)
  for starting PHPUnit projects with Composer (without TYPO3 CMS)
