<?php


class Sum
{
    public function sum($number_list,$number)
    {
        $number_list += $number;
        return $number_list;
    }
    public static function getHighest($highest_number,$number)
    {
        if($highest_number < $number){
            $highest_number = $number;
        }
        return $highest_number;
    }

}



$array_of_numbers = [1,2,3,4,5];
$sum = (array_reduce($array_of_numbers,[new Sum(),'sum']));
echo 'Sum of the numbers:'.$sum.PHP_EOL;
$highest = array_reduce($array_of_numbers,['Sum','getHighest']);
echo 'Highest number:'.$highest;