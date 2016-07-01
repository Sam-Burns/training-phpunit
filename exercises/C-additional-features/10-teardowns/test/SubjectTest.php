<?php
namespace PhpUnitTrainingTest\Exercise10;

use PhpUnitTraining\Exercise10\Subject;

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

    public function tearDown()
    {
        Subject::$staticNumber = 42;
    }

    public function testIts42()
    {
        // ACT
        $result = $this->subjectUnderTest->getStaticNumber();

        // ASSERT
        $this->assertEquals(42, $result);
    }

    public function testItsMoreThan41()
    {
        // ACT
        $result = $this->subjectUnderTest->getStaticNumber();

        // ASSERT
        $this->assertGreaterThan(41, $result);
    }

    public function testItsGotTwoDigits()
    {
        // ACT
        $result = $this->subjectUnderTest->getStaticNumber();

        // ASSERT
        $this->assertRegExp('/^[0-9][0-9]$/', (string)$result);
    }

    public function testYouGetAnIntNotABoolIfYouHalveIt()
    {
        // ACT
        $result = $this->subjectUnderTest->getStaticNumber() / 2;

        // ASSERT
        $this->assertInternalType('integer', $result);
    }

    public function testItIsTheRightNumber()
    {
        // ACT
        $result = $this->subjectUnderTest->getStaticNumber();

        // ASSERT
        $this->assertTrue($result === 42);
    }
}
