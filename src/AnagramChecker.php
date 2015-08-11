<?php
class AnagramChecker
{

  function checkAnagram($inputStringOne, $inputStringTwo)
  {

        $anagram_array = array();
        $match_array = array();



        $exploded_one = str_split($inputStringOne);// ["t","a","r"]
        sort($exploded_one); //["a","r","t"]
        $imploded_one = implode("','",$exploded_one);//"foo"
        $explodedTwo = explode(" ",$inputStringTwo);

        foreach ($explodedTwo as $possible_match)
            {


                $match_as_array = str_split($possible_match);
                sort($match_as_array);
                $this_possible_match = implode("','",$match_as_array);

                if (($this_possible_match == $imploded_one) && ($inputStringOne != $possible_match))

                {
                    array_push($match_array,$possible_match);

                }

            }
            if (empty($match_array))
            {
                array_push($match_array,"No Matches");
            }


            array_push($anagram_array, $inputStringOne);
            array_push($anagram_array, $match_array);

      //var_dump($anagram_array);
      return $anagram_array;

  }


}


 ?>
