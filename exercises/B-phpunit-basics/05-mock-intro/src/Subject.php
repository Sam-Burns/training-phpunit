<?php

namespace PhpUnitTraining\Exercise05;

class Subject
{
    private $horribleDependency;
    
    public function __construct(HorribleDependency $horribleDependency)
    {
        $this->horribleDependency = $horribleDependency;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->horribleDependency->getNumber();
    }
}
