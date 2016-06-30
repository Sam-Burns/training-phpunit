<?php
namespace PhpUnitTrainingTest\Exercise05;

use PhpUnitTraining\Exercise05\HorribleDependency;
use PhpUnitTraining\Exercise05\Subject;

class SubjectTest extends \PHPUnit_Framework_TestCase
{
    public function testIts42()
    {
        // ARRANGE
        $subjectUnderTest = new Subject($this->getRealDependency());

        // ACT
        $result = $subjectUnderTest->getNumber();

        // ASSERT
        $this->assertEquals(42, $result);
    }

    /**
     * @return HorribleDependency
     */
    public function getRealDependency()
    {
        return new HorribleDependency();
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|HorribleDependency
     */
    public function getMockDependency()
    {
        $mockDependency = $this->getMock(HorribleDependency::class, [], [], '', false);

        $mockDependency
            ->expects($this->once())
            ->method('getNumber')
            ->will($this->returnValue(42));

        return $mockDependency;
    }
}