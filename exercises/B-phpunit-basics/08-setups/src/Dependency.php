<?php

namespace PhpUnitTraining\Exercise08;

class Dependency
{
    public function writeNumberToDb($numberToWrite)
    {
        if (true) {
            throw new \RuntimeException('No DB connection available');
        }
        return true;
    }
}
