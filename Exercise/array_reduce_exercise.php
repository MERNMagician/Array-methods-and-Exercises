<?php

/*
Problem 1: Sum of All Elements
Requirements:

Use array_reduce to calculate the sum of all elements in the array.

Original array: [1, 2, 3, 4, 5]

Output: 15

*/

//$original_array = [1, 2, 3, 4, 5];
//$sum = 0;
//print_r(array_reduce($original_array,fn($number,$sum) => $sum += $number),0);


/*
Problem 2: Product of All Elements
Requirements:

Use array_reduce to calculate the product of all elements in the array.

Original array: [1, 2, 3, 4, 5]

Output: 120

*/
//$original_array = [1, 2, 3, 4, 5];


//print_r( array_reduce($original_array,fn($number,$product) => $number *= $product,1));

/*
Problem 3: Concatenate All Strings
Requirements:

Use array_reduce to concatenate all strings in the array into a single string, separated by a space.

Original array: ['Hello', 'world', 'from', 'PHP']

Output: 'Hello world from PHP'
*/


//$original_array = ['Hello', 'world', 'from', 'PHP'];

//print_r(array_reduce($original_array,fn($word,$words) => $word." ".$words,""));


/*
Problem 4: Find the Longest String
Requirements:

Use array_reduce to find the longest string in the array.

Original array: ['apple', 'banana', 'kiwi', 'watermelon']

Output: 'watermelon'
*/

//$original_array =  ['apple', 'banana', 'kiwi', 'watermelon'];
/*
print_r(array_reduce($original_array,function($word,$longestword){
        $length1 = strlen($word);
        $length2 = strlen($longestword);

       if($length1 > $length2)
       {
        $longestword = $word;
       }

       return $longestword;
}));

*/

/*
Problem 5: Flatten a Multidimensional Array
Requirements:

Use array_reduce to flatten a multidimensional array into a single-dimensional array.

Original array: [[1, 2], [3, 4], [5, 6]]

Output: [1, 2, 3, 4, 5, 6]
*/


$original_array = [[1, 2], [3, 4], [5, 6]];


$container = [];
array_map(function($item){
        $container[] = $item[0];
        $container[] = $item[1];
},$original_array);

print_r($container);


