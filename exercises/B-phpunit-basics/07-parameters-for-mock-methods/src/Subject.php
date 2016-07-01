<?php

namespace PhpUnitTraining\Exercise07;

class Subject
{
    private $dependency;

    public function __construct(Dependency $dependency)
    {
        $this->dependency = $dependency;
    }

    /**
     * @return bool
     */
    public function writeNumberToDb()
    {
        $numberToWrite = 2 * 25 - 4 - 4;
        return $this->dependency->writeNumberToDb($numberToWrite);
    }
}
