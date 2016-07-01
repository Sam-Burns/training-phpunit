<?php
namespace PhpUnitTrainingTest\Exercise16;

use PhpUnitTraining\Exercise16\Dependency;
use PhpUnitTraining\Exercise16\Subject;

class SubjectTest extends \PHPUnit_Framework_TestCase
{
    public function testIts42()
    {
        $this->markTestSkipped();

        // ARRANGE
        $subjectUnderTest = $this->getPartialMockOfSubjectUnderTest();

        // ACT
        $result = $subjectUnderTest->getNumber();

        // ASSERT
        $this->assertEquals(42, $result);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|Subject
     */
    private function getPartialMockOfSubjectUnderTest()
    {
        $mockDependency = $this->getMockDependency();

        $partialMock = $this->getMock(Subject::class, ['a-method-name'], ['some string'], '',  true);

        $partialMock
            ->expects($this->any())
            ->method('a-method-name')
            ->will($this->returnValue($mockDependency));

        return $partialMock;
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|Dependency
     */
    private function getMockDependency()
    {
        $mockDependency = $this->getMock(Dependency::class, [], [], '', true);

        $mockDependency
            ->expects($this->once())
            ->method('getNumberFromDb')
            ->will($this->returnValue(42));

        return $mockDependency;
    }
}
