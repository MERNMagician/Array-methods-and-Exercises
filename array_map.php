<?php

# array_map()

$lengths = [10,20,30];
//* Old way
$areas = array_map(function($item) {
        return $item * $item;
},$lengths);

//print_r($areas);

//* Arrow function

$areas = array_map(fn($item) => $item * $item,$lengths);

//print_r($areas);



//Using map to get a specific item in User object
class User
{
        public $id;
        public $username;
        public $email;
        
        public function __construct (int $id, string $username, string $email)
        {
                $this -> id = $id;
                $this -> username = $username;
                $this -> email = $email;
        }

}

$users = [
        new User(1, 'joe', 'joe@phptutorial.net'),
	new User(2, 'john', 'john@phptutorial.net'),
	new User(3, 'jane', 'jane@phptutorial.net'),
];

//Getting the usernames

//Normal way
$usernames = array_map(function($user) {
        return $user -> username;
},$users);
echo 'Using array_map old school way:'.PHP_EOL;
print_r($usernames);

//Arrow function
$usernames = array_map(fn($item) => $item -> username,$users);
echo 'Using array_map with arrow function:'.PHP_EOL;
print_r($usernames);

//Using a static method as a callback
//*Syntax for accessing the static method : 'className::staticMethodName'

class Square
{
        public static function area($length)
        {
                return $length * $length;
        }
}

$lengths = [10,20,30];

$areas = array_map('Square::area',$lengths);
echo 'Using array_map with a static method as a callback:'.PHP_EOL;
print_r($areas);