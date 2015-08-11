<?php

    require_once "src/AnagramChecker.php";

    class AnagramCheckerTest extends PHPUnit_Framework_TestCase
    {

// input two strings and return one string input: "foo", "bar" output: "some string"

        function test_AnagramChecker_StringCheck()
        {

            //Arrange
            $test_AnagramChecker = new AnagramChecker;
            $input1 = "foo";
            $input2 = "bar";

            //Act
            $result = $test_AnagramChecker->checkAnagram($input1, $input2);

            //Assert
            $this->assertTrue(is_string($result));
        }//end test

// input two strings and return one string input which contains input1 within output: "foo", "bar is a paragraph of foo text oof" output: "some string which contains foo" result TRUE

        function test_AnagramChecker_containsInput1()
        {

            //Arrange
            $test_AnagramChecker = new AnagramChecker;
            $input1 = "foo";
            $input2 = "bar is a paragraph of text oof";

            //Act
            $result = $test_AnagramChecker->checkAnagram($input1, $input2);

            //Assert
            $this->assertContains($input1,$result, $message = "I am broken");
        }//end test

    }

?>

//strpos($result,$input1) !== false){return true;}
