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
     * @expectedException \RuntimeException
     */
    public function testItCanThrowExceptions()
    {
        $this->subjectUnderTest->throwException();
    }

    public function testItCanThrowExceptionsAgain()
    {
        $this->expectException('\RuntimeException');

        $this->subjectUnderTest->throwException();
    }
}
