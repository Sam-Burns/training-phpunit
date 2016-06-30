<?php

namespace PhpUnitTraining\Exercise14;

class Subject
{
    private $dependency;
    
    public function __construct(Dependency $dependency)
    {
        $this->dependency = $dependency;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return
            $this->dependency->getThisNumber(2)
            * $this->dependency->getThisNumber(25)
            - $this->dependency->getThisNumber(4)
            - $this->dependency->getThisNumber(4)
        ;
    }
}
