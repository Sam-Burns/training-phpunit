<?php
namespace PhpUnitTrainingTest\Exercise03;

use PhpUnitTraining\Exercise03\Subject;

class SubjectTest extends \PHPUnit_Framework_TestCase
{
    public function testIts42()
    {
        // ARRANGE
        $subjectUnderTest = new Subject();

        // ACT
        $result = $subjectUnderTest->getNumber();

        // ASSERT
        $this->assertEquals(42, $result);
    }
}
