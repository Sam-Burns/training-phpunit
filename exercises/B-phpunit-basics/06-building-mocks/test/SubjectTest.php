<?php
namespace PhpUnitTrainingTest\Exercise05;

use PhpUnitTraining\Exercise06\Dependency;
use PhpUnitTraining\Exercise06\Subject;

class SubjectTest extends \PHPUnit_Framework_TestCase
{
    public function testIts42()
    {
        // ARRANGE
        $subjectUnderTest = new Subject($this->getMockDependency());

        // ACT
        $result = $subjectUnderTest->getNumber();

        // ASSERT
        $this->assertEquals(42, $result);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|Dependency
     */
    public function getMockDependency()
    {
        $mockDependency = $this->getMock(Dependency::class, [], [], '',  false, false);

        $mockDependency
            ->expects($this->once())
            ->method('getTwo')
            ->will($this->returnValue(3));

        $mockDependency
            ->expects($this->once())
            ->method('getTwentyFourAndAHalf')
            ->will($this->returnValue(25));

        $mockDependency
            ->expects($this->exactly(3))
            ->method('getFour')
            ->will($this->returnValue(4));

        return $mockDependency;
    }
}
