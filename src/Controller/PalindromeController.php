<?php
declare(strict_types=1);

namespace App\Controller;

use App\Service\PalindromeService;
use Cake\Controller\Controller;

/**
 * PalindromeController
 */
class PalindromeController extends Controller {

    /**
     * Check Palindrome string.
     * @return void
     */
    public function checkPalindrome(): void
    {
        $input_string = $this->getRequest()->getData('input_string');
        $result = PalindromeService::isPalindrome($input_string);

        $this->set(compact('input_string', 'result'));
    }
}
