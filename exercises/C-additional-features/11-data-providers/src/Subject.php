<?php

namespace PhpUnitTraining\Exercise11;

class Subject
{
    /**
     * @param int $param
     * @return bool
     */
    public function figureOutIfNumberIsEven($param)
    {
        return $param % 2 == 0;
    }
}
