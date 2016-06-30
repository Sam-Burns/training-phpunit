<?php
namespace PhpUnitTrainingTest\Exercise02;

use PhpUnitTraining\Exercise02\Subject1;

class Subject1XXXX extends \PHPUnit_Framework_TestCase
{
    public function testIts42()
    {
        // ARRANGE
        $subjectUnderTest = new Subject1();

        // ACT
        $result = $subjectUnderTest->getNumber();

        // ASSERT
        $this->assertEquals(42, $result);
    }
}
