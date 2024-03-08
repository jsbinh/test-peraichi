<?php
namespace App\Service;

/**
 * Palindrome service.
 */
class PalindromeService {

    /**
     * Check is palindrome string.
     * @param $input_str
     * @return bool
     */
    public static function isPalindrome($input_str): bool
    {
        // Remove spaces and convert to lowercase for case-insensitive comparison
        $clean_str = strtolower(str_replace(' ', '', $input_str));

        // Check if the original and reversed strings are the same
        return $clean_str == strrev($clean_str);
    }
}
