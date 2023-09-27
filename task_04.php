<?php

$studentGrades = array(
    'Student1' => array('Math' => 85, 'English' => 92, 'Science' => 78),
    'Student2' => array('Math' => 88, 'English' => 95, 'Science' => 90),
    'Student3' => array('Math' => 75, 'English' => 80, 'Science' => 85),
);

function calculateAverageGradesWithLetters($studentGrades) {
    $gradeScale = array(
        'A+' => array('min' => 90, 'max' => 100),
        'A' => array('min' => 85, 'max' => 89.99),
        'B' => array('min' => 80, 'max' => 84.99),
        'C' => array('min' => 70, 'max' => 79.99),
        'D' => array('min' => 60, 'max' => 69.99),
        'F' => array('min' => 0, 'max' => 59.99)
    );

    foreach ($studentGrades as $student => $grades) {
        // Calculate the average grade for each student
        $averageGrade = array_sum($grades) / count($grades);

        // Determine the letter grade
        $letterGrade = 'F'; // Default value in case of any missing/invalid input

        foreach ($gradeScale as $grade => $range) {
            if ($averageGrade >= $range['min'] && $averageGrade <= $range['max']) {
                $letterGrade = $grade;
                break;
            }
        }

        // Print the average grade with letter grade
        echo "{$student}: $letterGrade\n";
    }
}

// Call the function with the student grades array
calculateAverageGradesWithLetters($studentGrades);