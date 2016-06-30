<?php
namespace PhpUnitTrainingTest\Exercise15;

use PhpUnitTraining\Exercise15\Dependency;
use PhpUnitTraining\Exercise15\Subject;

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

        $mockDependency
            ->expects($this->any())
            ->method('getANumber')
            ->will($this->onConsecutiveCalls(-1, -1, -1, -1));

        return $mockDependency;
    }
}
