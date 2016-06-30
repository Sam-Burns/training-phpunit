<?php

namespace PhpUnitTraining\Exercise06;

class Dependency
{
    public function __construct()
    {
        throw new \RuntimeException('Mock this thing');
    }

    public function getTwo()
    {
        return 2;
    }
    
    public function getTwentyFive()
    {
        return 25;
    }
    
    public function getFour()
    {
        return 4;
    }
}
