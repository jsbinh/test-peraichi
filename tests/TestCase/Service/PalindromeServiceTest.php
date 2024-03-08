<?php
namespace App\Test\TestCase\Service;

use App\Service\PalindromeService;
use Cake\TestSuite\TestCase;

class PalindromeServiceTest extends TestCase {

    public function testIsPalindromeWithPalindromeString() {
        $inputString = "Able was I ere I saw Elba";
        $result = PalindromeService::isPalindrome($inputString);
        $this->assertTrue($result);
    }

    public function testIsPalindromeWithNonPalindromeString() {
        $inputString = "Check Palindrome String!";
        $result = PalindromeService::isPalindrome($inputString);
        $this->assertFalse($result);
    }

    public function testIsPalindromeWithEmptyString() {
        $inputString = "";
        $result = PalindromeService::isPalindrome($inputString);
        $this->assertTrue($result); // An empty string is considered a palindrome
    }
}
