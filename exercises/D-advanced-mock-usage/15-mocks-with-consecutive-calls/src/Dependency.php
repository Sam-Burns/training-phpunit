<?php

namespace PhpUnitTraining\Exercise15;

class Dependency
{
    private $returnValues = [2, 25, 4, 4];

    public function getANumber()
    {
        return array_shift($this->returnValues);
    }
}
