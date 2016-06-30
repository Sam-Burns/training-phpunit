<?php

namespace PhpUnitTraining\Exercise08;

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
        $numberToWrite = 42;
        return $this->dependency->writeNumberToDb($numberToWrite);
    }

    /**
     * @return bool
     */
    public function writeAnotherNumberToDb()
    {
        $numberToWrite = 6 * 7 + 1;
        return $this->dependency->writeNumberToDb($numberToWrite);
    }

    /**
     * @return bool
     */
    public function writeThirdNumberToDb()
    {
        $numberToWrite = 2 * 3 * 7 + 2;
        return $this->dependency->writeNumberToDb($numberToWrite);
    }
}
