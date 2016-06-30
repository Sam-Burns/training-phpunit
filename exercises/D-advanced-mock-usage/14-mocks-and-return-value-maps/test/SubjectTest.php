<?php
namespace PhpUnitTrainingTest\Exercise14;

use PhpUnitTraining\Exercise14\Dependency;
use PhpUnitTraining\Exercise14\Subject;

class SubjectTest extends \PHPUnit_Framework_TestCase
{
    public function testIts42()
    {
        $this->markTestSkipped();

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

        $returnValueMap = [
            [2,   2],
            [25, 25],
            [4,   -1],
        ];

        $mockDependency
            ->expects($this->any())
            ->method('getThisNumber')
            ->will($this->returnValueMap($returnValueMap));

        return $mockDependency;
    }
}
