<?php

namespace PhpUnitTraining\Exercise10;

class Subject
{
    public static $staticNumber = 42;

    /**
     * @return int
     */
    public function getStaticNumber()
    {
        $staticNumber = static::$staticNumber;
        static::$staticNumber = 1;
        return $staticNumber;
    }
}
