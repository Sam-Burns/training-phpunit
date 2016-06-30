<?php
namespace PhpUnitTrainingTest\Exercise07;

use PhpUnitTraining\Exercise07\Dependency;
use PhpUnitTraining\Exercise07\Subject;

class SubjectTest extends \PHPUnit_Framework_TestCase
{
    public function testIts42()
    {
        // ARRANGE

        // We need a mock dependency
        $mockDependency = $this->getMock(Dependency::class, [], [], '',  false);

        // Something specific must be written to DB
        $mockDependency
            ->expects($this->once())
            ->method('writeNumberToDb')
            ->with(41)
            ->will($this->returnValue(true));

        // Create the subject under test
        $subjectUnderTest = new Subject($mockDependency);

        // ACT
        $result = $subjectUnderTest->writeNumberToDb();

        // ASSERT
        $this->assertTrue($result);
    }
}
