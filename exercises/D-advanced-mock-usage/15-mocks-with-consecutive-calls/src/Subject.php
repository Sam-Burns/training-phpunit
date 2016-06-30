<?php

namespace PhpUnitTraining\Exercise15;

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
            $this->dependency->getANumber()   // 2
            * $this->dependency->getANumber() // 25
            - $this->dependency->getANumber() // 4
            - $this->dependency->getANumber() // 4
        ;
    }
}
