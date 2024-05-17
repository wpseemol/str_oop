<?php


function string_to_vowels_count(array $str_arr)
{
    // vowels array
    define("ALL_VOWELS", ["a", "e", "i", "o", "u"]);

    $arr_elements = count($str_arr);

    for ($i = 0; $i < $arr_elements; $i++) {
        $org_string = $str_arr[$i];
        //echo strtolower($str_arr[$i]);
        //echo "<br />";

        $str_vowel = vowels_count($org_string, ALL_VOWELS);

        $revers_str = word_revers($org_string);


        printf(
            "Original String: %s, Vowel Count: %d, Reversed String: %s \n",
            $org_string,
            $str_vowel,
            $revers_str
        );
    };
};


function vowels_count(string $str, array $all_vowels): int
{
    $str_length = strlen($str);
    $str_lower = strtolower($str);

    $vowels_count = 0;
    for ($i = 0; $i < $str_length; $i++) {
        if (in_array($str_lower[$i], $all_vowels)) {
            $vowels_count += 1;
        }
    }
    return $vowels_count;
}

// string revers function
function word_revers(string $str): string
{
    $str_length = strlen($str);
    $revers_str = "";

    for ($i = $str_length - 1; $i >= 0; $i--) {
        $revers_str .= $str[$i];
    }

    return $revers_str;
}



$string = ["hello", "word", "PHP", "Programming"];

string_to_vowels_count($string);
