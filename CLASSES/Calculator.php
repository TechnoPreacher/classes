<?php



class Calculator
{

    public function summation($firstDigit,$secondDigit): mixed
    {
        return $firstDigit+$secondDigit;
    }

    public function subtraction($minuend,$subtrahend): mixed
    {
        return $minuend-$subtrahend;
    }

    public function multiplication($factor1,$factor2): mixed
    {
        return $factor1*$factor2;
    }

    public function division($dividend,$divider): mixed
    {
        return $dividend/$divider;
    }

    public function exponentiation($base,$degree): mixed
    {
        return pow($base,$degree);
    }

    public function root($base): mixed
    {
        return sqrt($base);
    }





}