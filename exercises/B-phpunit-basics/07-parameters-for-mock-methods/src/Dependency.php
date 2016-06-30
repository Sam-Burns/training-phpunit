<?php

namespace PhpUnitTraining\Exercise07;

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
