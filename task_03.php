<?php

$grades = array(85, 92, 78, 88, 95);

function sortGradesDescending($grades) {
    // Sort the grades array in descending order
    rsort($grades);

    // Return the sorted grades as an array
    return $grades;
}

// Call the function with the grades array
print_r(sortGradesDescending($grades));