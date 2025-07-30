<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $str) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $vowelCount = 0;

    // Convert to lowercase for easy comparison
    $lowerStr = strtolower($str);

    // Count vowels
    for ($i = 0; $i < strlen($lowerStr); $i++) {
        if (in_array($lowerStr[$i], $vowels)) {
            $vowelCount++;
        }
    }

    // Reverse the string
    $reversed = strrev($str);

    echo "Original String: $str, Vowel Count: $vowelCount, Reversed String: $reversed\n";
}

?>