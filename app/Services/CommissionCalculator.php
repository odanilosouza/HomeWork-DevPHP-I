<?php

namespace App\Services;

class CommissionCalculator
{
    public static function calculate($value)
    {
        return $value * 0.085;
    }
}