# The test

The applications with [CakePHP](https://cakephp.org) 4.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2.  Run command:

```bash
composer create-project --prefer-dist cakephp/app:~4.0
```


## Problem 1: Palindrome

1. 1-a. Write a method that determines whether or not the given string is a palindrome. Method should take a string as an argument, and should return a boolean value.
- I write code flow MVC with route: `/palindrome/check-palindrome`

2. 1-b. Write unit tests that examines the functionality of the implementation.
- I write unit test by PalindromeServiceTest in path `tests\TestCase\Service\PalindromeServiceTest.php`

3. 1-c. Calculate the time cost of your implementation using the O-notation.
- In the implemented algorithm:
  - Removing spaces and converting all characters to lowercase. This operation has a time complexity of O(n), where n is the length of the original input string.
  - Comparing the cleaned string with its reverse (using strrev) also has a time complexity of O(n).
- Therefore, the overall time complexity of the isPalindrome function is O(n), where n is the length of the input string.

## Problem 2: Matrix rotation

1. 2-a. Write unit tests that examines the functionality of a method that takes an n-by-n matrix, and rotates it 90-degrees counter-clockwise.
- Unit test file is `tests\TestCase\Utility\MatrixHelperTest`

2. 2-b. Write the implementation that satisfies the test cases.

## Problem 3: MVC

Use `/smartphones/add` route.
