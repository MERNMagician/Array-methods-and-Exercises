<?php
//array_filter()
$numbers = [1,2,3,4,5];
//Normal way
$odds = array_filter($numbers,function($item){
    return $item % 2 != 0;
});

//print_r($odds);

//Arrow functions
$odds = array_filter($numbers,fn($item) => $item %2 != 0);
//print_r($odds);

//Using callback as a method of a class

class Even
{
    public function isEven($number)
    {
        return $number % 2 === 0;
    }
    //* Just to demonstrate static functions
    public static function getEven($number)
    {
        return $number % 2 === 0;
    }
}

$even_nums = array_filter($numbers,[new Even(),'isEven']);
$even_nums_static = array_filter($numbers,['Even','getEven']);

echo 'Using filter with a callback from a class object'.PHP_EOL;
print_r($even_nums);
echo 'Using filter with a callback from a static method'.PHP_EOL;
print_r($even_nums_static);



//Using invoke keyword to use the method when the object is called

class NegativeNums
{
    public function __invoke($number)
    {
        return $number < 0;
    }
}
$random_nums = [-1,0,2,5,10,-100];
$negative_nums = array_filter($random_nums,new NegativeNums());
echo 'Getting the negative numbers using the class with a __invoke keyword'.PHP_EOL;
print_r($negative_nums);


//Passing the key as the argument and not the value , you can make that happens with ARRAY_FILTER_USE_KEY

$users = [
    [
    'firstname' => 'Windyl',
    'lastname' => 'Monton',
    'course' => 'BSIT',
    'password' => 'hello_love_goodbye'
    ],
    [
    'firstname' => 'Adrian',
    'lastname' => 'Macalolot',
    'course' => 'BSBA',
    'password' => 'hello_love_hipe'
    ]
];
//* Here we put the ARRAY_FILTER_USE_KEY as the third param to access the key of the object
$get_user_info = array_filter($users,fn($key) => $key,ARRAY_FILTER_USE_KEY);
echo 'Getting the user info via key'.PHP_EOL;
print_r($get_user_info);

//Accessing both the key and the value
$get_user_info = array_filter($users,fn($value,$key) => $key != 'course' && $value != 'hello_love_goodbye',ARRAY_FILTER_USE_BOTH);

echo 'Accessing both the key and the value to create condition with both'.PHP_EOL;
print_r($get_user_info);