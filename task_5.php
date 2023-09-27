<?php
function generatePassword($length) {
    // Character sets for different types of characters
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    // Combined character set
    $charset = $lowercase . $uppercase . $numbers . $specialChars;

    // Initialize the password as an empty string
    $password = '';

    $charSetLength = strlen($charset) - 1;

    // Generate random characters for the password
    for ($i = 0; $i < $length; $i++) {
        // Choose a random character from the combined character set
        $randomChar = $charset[rand(0, $charSetLength )];

        // Append the random character to the password
        $password .= $randomChar;
    }

    return $password;
}

// Generate a password with a length of 12 characters
$generatedPassword = generatePassword(12);

// Print the generated password
echo $generatedPassword;