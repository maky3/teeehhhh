<?php

function reverseWord($word) {
    return strrev($word);
}

function revertCharacters($str) {
    if (empty($str) || ctype_space($str)) {
        return $str;
    }

    $words = explode(' ', $str);
    $reversedWords = array_map('reverseWord', $words);
    return implode(' ', $reversedWords);
}