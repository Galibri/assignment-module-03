<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function removeEvenNumbers($numbers) {
    // Filter function to remove the even numbers
    $resultingArray = array_filter($numbers, function ($number) {
        return $number % 2 != 0;
    });

    // Return the resulting array
    return $resultingArray;
}

// Call the function with the array of numbers
print_r(removeEvenNumbers($numbers));