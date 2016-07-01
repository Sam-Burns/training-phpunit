<?php
namespace PhpUnitTrainingTest\Exercise02;

use PhpUnitTraining\Exercise02\Subject2;

class Subject2Test extends \PHPUnit_Framework_TestCase
{
    public function testIts42()
    {
        // ARRANGE
        $subjectUnderTest = new Subject2();

        // ACT
        $result = $subjectUnderTest->getNumber();

        // ASSERT
        $this->assertEquals(42, $result);
    }
}
