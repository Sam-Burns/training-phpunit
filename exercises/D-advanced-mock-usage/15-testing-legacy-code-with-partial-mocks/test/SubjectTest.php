<?php
namespace PhpUnitTrainingTest\Exercise15;

use PhpUnitTraining\Exercise15\Dependency;
use PhpUnitTraining\Exercise15\Subject;

class SubjectTest extends \PHPUnit_Framework_TestCase
{
    public function testIts42()
    {
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
        return $this->getMock(Dependency::class, [], [], '', true);
    }
}