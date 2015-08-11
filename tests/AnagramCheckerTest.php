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


// are there at least 2 elements in the return array: ["foo", ... ]

        function test_AnagramChecker_containsTwoIndexes()
        {

            //Arrange
            $test_AnagramChecker = new AnagramChecker;
            $input1 = "foo";
            $input2 = "bar is a paragraph of text oof";

            //Act
            $result = $test_AnagramChecker->checkAnagram($input1, $input2);

            //Assert
            $this->assertTrue(count($result) === 2);
        }//end test


// will return all postive matches input1: "rat" input2: "I make art about tar and my name is tra" output: ["rat", ["art","tar", "tra"]]

        function test_AnagramChecker_postiveMatches()
        {

            //Arrange
            $test_AnagramChecker = new AnagramChecker;
            $input1 = "rat";
            $input2 = "I make art about tar and may name is tra";

            //Act
            $result = $test_AnagramChecker->checkAnagram($input1, $input2);

            //Assert
            $this->assertEquals(["rat", ["art","tar", "tra"]], $result);
        }//end test

    }

?>
