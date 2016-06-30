<?php

namespace PhpUnitTraining\Exercise13;

class Dependency
{
    private $returnValues = [2, 50, 4, 4];

    public function getANumber()
    {
        return array_shift($this->returnValues);
    }
}
