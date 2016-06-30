<?php
namespace PhpUnitTrainingTest\Exercise01;

use PhpUnitTraining\Exercise01\Subject;

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
