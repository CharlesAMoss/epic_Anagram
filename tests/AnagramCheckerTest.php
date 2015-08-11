<?php

    require_once "src/AnagramChecker.php";

    class AnagramCheckerTest extends PHPUnit_Framework_TestCase
    {

// input two strings and return one string input: "foo", "bar" output: []

        function test_AnagramChecker_returnCheck()
        {

            //Arrange
            $test_AnagramChecker = new AnagramChecker;
            $input1 = "foo";
            $input2 = "bar";

            //Act
            $result = $test_AnagramChecker->checkAnagram($input1, $input2);

            //Assert
            $this->assertTrue(is_array($result));
        }//end test

// does index 0 of the returned array match the first inputed string: "foo", "bar is a paragraph of foo text oof" output: ["foo", ... ]

        function test_AnagramChecker_containsInput1()
        {

            //Arrange
            $test_AnagramChecker = new AnagramChecker;
            $input1 = "foo";
            $input2 = "bar is a paragraph of text oof";

            //Act
            $result = $test_AnagramChecker->checkAnagram($input1, $input2);

            //Assert
            $this->assertTrue($result[0] === $input1);
        }//end test


//

    }

?>
