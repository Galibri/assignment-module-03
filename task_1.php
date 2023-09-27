<?php

// Initial string
$text = "The quick brown fox jumps over the lazy dog.";

function modifyText($text) {
    // Convert the string to all lowercase
    $lowercaseText = strtolower($text);

    // Replace "brown" with "red" in the string
    $modifiedText = str_replace("brown", "red", $lowercaseText);

    // Return the modified text
    return $modifiedText;
}

// Call the function with the provided string
echo modifyText($text);