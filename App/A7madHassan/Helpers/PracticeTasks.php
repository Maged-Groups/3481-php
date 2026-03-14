<?php

namespace App\A7madHassan\Helpers;

class PracticeTasks
{
    /**
     * 1. Even or Odd: Checks if a number is even or odd
     */
    public static function checkEvenOdd(int $number)
    {
        return ($number % 2 == 0) ? "$number is Even" : "$number is Odd";
    }

    /**
     * 2. Leap Year Checker: Logic for 4, 100, and 400 years
     */
    public static function isLeapYear(int $year)
    {
        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
            return "$year is a Leap Year ";
        }
        return "$year is not a Leap Year ";
    }

    /**
     * 3. Largest of Three: Finds the maximum using logical operators
     */
    public static function findLargest(int $a, int $b, int $c) // like max fuction
    {
        if ($a >= $b && $a >= $c) return "Largest is $a";
        if ($b >= $a && $b >= $c) return "Largest is $b";
        return "Largest is $c";
    }

    /**
     * 4. Simple Calculator: Basic math operations
     */
    public static function calculator(float $n1, float $n2, string $operator)
    {
        switch ($operator) {
            case '+':
                return $n1 + $n2;
            case '-':
                return $n1 - $n2;
            case '*':
                return $n1 * $n2;
            case '/':
                return ($n2 != 0) ? ($n1 / $n2) : "Error: Division by zero";
            default:
                return "Invalid Operator";
        }
    }

    /**
     * 5. Sum of Numbers: From 1 to 100 using a for loop
     */
    public static function sumToOneHundred()
    {
        $sum = 0;
        for ($i = 1; $i <= 100; $i++) {
            $sum += $i;
        }
        return "Sum of 1 to 100 is: $sum";
    }

    /**
     * 6. Fibonacci Series: Prints first N numbers
     */
    public static function Fibonacci(int $limit = 10)
    {
        $n1 = 0;
        $n2 = 1;
        $result = "$n1, $n2";

        for ($i = 2; $i < $limit; $i++) {
            $n3 = $n1 + $n2;
            $result .= ", $n3";
            $n1 = $n2;
            $n2 = $n3;
        }
        return "Fibonacci: " . $result;
    }
}
