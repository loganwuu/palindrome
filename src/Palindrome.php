<?php 
	
	class Palindrome
	{
		function isPalindrome($word)
		{
			$letters = str_split(strtolower($word));
			$possiblePalindrome = array();
			$i = count($letters) - 1;
			while($i >= 0) {
				array_push($possiblePalindrome, $letters[$i]);
				$i -= 1;
			}
			if($possiblePalindrome == $letters) {
				return true;
			} else {
				return false;
			}
		}
	}
?>