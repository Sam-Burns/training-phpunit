<?php

namespace PhpUnitTraining\Exercise06;

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
            $this->dependency->getTwo()
            * $this->dependency->getTwentyFive()
            - $this->dependency->getFour()
            - $this->dependency->getFour()
        ;
    }
}
