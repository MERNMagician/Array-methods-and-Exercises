<?php
/*
Problem 1: Square Each Element
Requirements:

Use array_map to create a new array where each element is the square of the corresponding element in the original array.

Original array: [1, 2, 3, 4, 5]

Output: [1, 4, 9, 16, 25]
*/

//$original_array = [1, 2, 3, 4, 5];


/*
print_r(array_map(function($number){
        return $number * $number;

},$original_array));

*/
/*
Problem 2: Convert Strings to Uppercase
Requirements:

Use array_map to convert all strings in an array to uppercase.

Original array: ['apple', 'banana', 'cherry']

Output: ['APPLE', 'BANANA', 'CHERRY']

*/
//$original_array = ['apple', 'banana', 'cherry'];

//print_r(array_map(fn($word) => strtoupper($word),$original_array));


/*

Problem 3: Add Prefix to Each Element
Requirements:

Use array_map to add a prefix "Item: " to each element in the array.

Original array: ['Book', 'Pen', 'Notebook']

Output: ['Item: Book', 'Item: Pen', 'Item: Notebook']
*/

//$original_array =  ['Book', 'Pen', 'Notebook'];

//print_r(array_map(fn($word) => 'Item:'.$word,$original_array));

/*
Problem 4: Calculate Length of Each String
Requirements:

Use array_map to create a new array where each element is the length of the corresponding string in the original array.

Original array: ['hello', 'world', 'php', 'array_map']

Output: [5, 5, 3, 9]
*/
/*
Problem 4: Calculate Length of Each String
Requirements:

Use array_map to create a new array where each element is the length of the corresponding string in the original array.

Original array: ['hello', 'world', 'php', 'array_map']

Output: [5, 5, 3, 9]
*/

//$original_array = ['hello', 'world', 'php', 'array_map'];

//print_r(array_map(fn($word) => strlen($word) , $original_array));


/*
Problem 5: Multiply Corresponding Elements of Two Arrays
Requirements:

Use array_map to multiply corresponding elements of two arrays and create a new array with the results.

Original arrays: [2, 3, 4] and [5, 6, 7]

Output: [10, 18, 28]
*/

/*
$original_array1 = [2,3,4];
$original_array2 = [5,6,7]; 

print_r(array_map(fn($item1,$item2) => $item1 * $item2 ,$original_array1,$original_array2 ));

*/

