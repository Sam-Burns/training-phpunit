<?php
namespace PhpUnitTrainingTest\Exercise11;

use PhpUnitTraining\Exercise11\Subject;

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
     * @dataProvider provideNumbersAndWhetherTheyreEven
     */
    public function testKnowsIfNumbersAreEvenOrOdd($testCase, $expectedResult)
    {
        $actualResult = $this->subjectUnderTest->figureOutIfNumberIsEven($testCase);

        $this->assertEquals($expectedResult, $actualResult);
    }

    public function provideNumbersAndWhetherTheyreEven()
    {
        return [
            [1, false],
            [2, false],
            [3, false],
            [4, false],
            [5, false],
        ];
    }
}
