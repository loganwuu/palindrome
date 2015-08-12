<?php 
	require_once "src/Palindrome.php";
	
	class PalindromeTest extends PHPUnit_Framework_TestCase
	{
		function test_palindrome()
		{
			$test = new Palindrome;
			$word = "lol";
			
			$result = $test->isPalindrome($word);
			
			$this->assertEquals(true, $result);
		}
		
		function test_palindrome_int()
		{	
			$test = new Palindrome;
			$word = 101;
			
			$result  = $test->isPalindrome($word);
			
			$this->assertEquals(true, $result);
		}
		
		function test_palindrome_caps()
		{
			$test = new Palindrome;
			$word = "Lol";
			
			$result = $test->isPalindrome($word);
			
			$this->assertEquals(true, $result);
		}
		
		function test_palindrome_string()
		{
			$test = new Palindrome;
			$word = "Hello olleH";
			
			$result = $test->isPalindrome($word);
			
			$this->assertEquals(true, $result);
		}
	}
?>