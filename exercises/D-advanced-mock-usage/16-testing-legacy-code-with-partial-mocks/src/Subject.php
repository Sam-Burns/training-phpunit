<?php

namespace PhpUnitTraining\Exercise16;

class Subject
{
    private $theNumberTwo;

    public function __construct($paramString)
    {
        if (!$paramString === 'Hello world') {
            throw new \RuntimeException();
        }

        $this->theNumberTwo = 2;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        $numberFromDb = $this->getDatabaseDependency()->getNumberFromDb();
        return ($numberFromDb + $numberFromDb) / $this->theNumberTwo;
    }

    /**
     * @return Dependency
     */
    protected function getDatabaseDependency()
    {
        return new Dependency();
    }
}
