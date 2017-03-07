<?php
require_once dirname(__FILE__) . '../Wrapper.php';
 
class WrapperTest extends PHPUnit_Framework_TestCase {
		
		/* function testCanCreateAWrapper() {
			$wrapper = new Wrapper();
		}
		
		public function testDoesNotWrapAShorterThanMaxCharsWord() 
		 {
		 $wrapper = New Wrapper();
		 assertEquals('word', $wrapper->wrap('word', 5));
		 } */
		 
		 private $wrapper;
 
		function setUp() {
			$this->wrapper = new Wrapper();
		}
	 
		/* function testItShouldWrapAnEmptyString() {
			$this->assertEquals('', $this->wrapper->wrap(''));
		} */
	 
		function testItDoesNotWrapAShortEnoughWord() {
			$textToBeParsed = 'word';
			$maxLineLength = 5;
			$this->assertEquals($textToBeParsed, $this->wrapper->wrap($textToBeParsed, $maxLineLength));
		}
		

		function testItWrapsAWordLongerThanLineLength() {
			$textToBeParsed = 'alongword';
			$maxLineLength = 5;
			$this->assertEquals("along\nword", $this->wrapper->wrap($textToBeParsed, $maxLineLength));
		}
		

		function testItWraps2WordsAtBoundry() {
			$textToBeParsed = 'word word';
			$maxLineLength = 4;
			$this->assertEquals("word\nword", $this->wrapper->wrap($textToBeParsed, $maxLineLength));
		}

		
		
	}


?>
