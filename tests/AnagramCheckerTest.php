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
        }

    }

?>
