<?php
/*
Problem 1: Filter Even Numbers
Requirements:

Use array_filter to create a new array containing only the even numbers from the original array.

Original array: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]

Output: [2, 4, 6, 8, 10]

*/

//$original_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

//print_r(array_filter($original_array,fn($number) =>  $number % 2 === 0  ));



/*
Problem 2: Filter Strings Longer Than 5 Characters
Requirements:

Use array_filter to create a new array containing only the strings with more than 5 characters.

Original array: ['apple', 'banana', 'kiwi', 'mango', 'watermelon']

Output: ['banana', 'watermelon']
*/

//$original_array = ['apple', 'banana', 'kiwi', 'mango', 'watermelon'];
//  print_r(array_filter($original_array,fn($word) => strlen($word) > 5));

/*
Problem 3: Filter Positive Numbers
Requirements:

Use array_filter to create a new array containing only the positive numbers from the original array.

Original array: [-3, -2, -1, 0, 1, 2, 3]

Output: [1, 2, 3]

*/

//$original_array = [-3, -2, -1, 0, 1, 2, 3];
//print_r(array_filter($original_array,fn($number) => $number > 0));

/*
Problem 4: Filter Words Starting with a Specific Letter
Requirements:

Use array_filter to create a new array containing only the words that start with the letter 'b'.

Original array: ['apple', 'banana', 'blueberry', 'cherry', 'blackberry']

Output: ['banana', 'blueberry', 'blackberry']
*/
//$original_array = ['apple', 'banana', 'blueberry', 'cherry', 'blackberry'];

/*
print_r(array_filter($original_array,function($item){
        $first_letter = substr($item,0,1);

        return $first_letter === 'b';
}));
*/

/*
Problem 5: Filter Associative Array by Value
Requirements:

Use array_filter to create a new associative array containing only the key-value pairs where the value is greater than 50.

Original array: ['a' => 10, 'b' => 20, 'c' => 60, 'd' => 80, 'e' => 30]

Output: ['c' => 60, 'd' => 80]
*/

/*
$original_array =  ['a' => 10, 'b' => 20, 'c' => 60, 'd' => 80, 'e' => 30];


print_r(array_filter($original_array,fn($value,$key) => $value > 50,ARRAY_FILTER_USE_BOTH));
*/


