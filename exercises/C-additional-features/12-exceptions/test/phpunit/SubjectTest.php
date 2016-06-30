<?php
namespace PhpUnitTrainingTest\Exercise12;

use PhpUnitTraining\Exercise12\Subject;

class SubjectTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Subject
     */
    private $subjectUnderTest;

    public function setUp()
    {
        $this->subjectUnderTest = new Subject();
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testItCanThrowExceptions()
    {
        $this->markTestSkipped();

        $this->subjectUnderTest->throwException();
    }

    public function testItCanThrowExceptionsAgain()
    {
        $this->markTestSkipped();

        $this->expectException('\OutOfBoundsException');

        $this->subjectUnderTest->throwException();
    }
}
