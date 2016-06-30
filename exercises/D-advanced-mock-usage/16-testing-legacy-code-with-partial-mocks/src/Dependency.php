<?php

namespace PhpUnitTraining\Exercise16;

class Dependency
{
    public function __construct()
    {
        throw new \RuntimeException('Can\'t call constructor');
    }

    public function getNumberFromDb()
    {
        if (true) {
            throw new \RuntimeException('No DB connection available');
        }
        return 42;
    }
}
