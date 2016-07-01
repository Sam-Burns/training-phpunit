<?php
namespace PhpUnitTrainingTest\Exercise08;

use PhpUnitTraining\Exercise08\Dependency;
use PhpUnitTraining\Exercise08\Subject;

class SubjectTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Subject
     */
    private $subjectUnderTest;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|Subject
     */
    private $mockDbDependency;

    public function setUp()
    {
        $this->mockDbDependency = $this->getMock(Dependency::class, [], [], '',  false);

        $this->subjectUnderTest = new Subject($this->mockDbDependency);
    }

    public function testIts42()
    {
        // ASSERT

        // Something specific must be written to DB
        $this->mockDbDependency
            ->expects($this->once())
            ->method('writeNumberToDb')
            ->with(42)
            ->will($this->returnValue(true));

        // ACT
        $this->subjectUnderTest->writeNumberToDb();
    }

    public function testItsSomethingElse()
    {
        // ASSERT

        // Something specific must be written to DB
        $this->mockDbDependency
            ->expects($this->once())
            ->method('writeNumberToDb')
            ->with(43)
            ->will($this->returnValue(true));

        // ACT
        $this->subjectUnderTest->writeAnotherNumberToDb();
    }

    public function testItsAThirdThing()
    {
        // ASSERT

        // Something specific must be written to DB
        $this->mockDbDependency
            ->expects($this->once())
            ->method('writeNumberToDb')
            ->with(44)
            ->will($this->returnValue(true));

        // ACT
        $this->subjectUnderTest->writeThirdNumberToDb();
    }
}
