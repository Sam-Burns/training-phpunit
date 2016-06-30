<?php

namespace PhpUnitTraining\Exercise05;

class HorribleDependency
{
    public function __construct()
    {
        throw new \RuntimeException('Mock this thing');
    }

    public function getNumber()
    {
        return 42;
    }
}
