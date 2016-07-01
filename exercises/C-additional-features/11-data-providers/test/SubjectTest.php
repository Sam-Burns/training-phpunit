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
    public function testKnowsIfNumbersAreEvenOrOdd($testCase, $expectedResult, $messageIfTestFails)
    {
        $actualResult = $this->subjectUnderTest->figureOutIfNumberIsEven($testCase);

        $this->assertEquals($expectedResult, $actualResult, $messageIfTestFails);
    }

    /**
     * @todo Fix this data
     */
    public function provideNumbersAndWhetherTheyreEven()
    {
        return [
            [1, false, 'I wrote this example because the number 1 is odd'],
            [2, true, 'I wrote this example because the number 2 is even'],
            [3, false, 'I wrote this example because the number 3 is odd'],
            [4, true, 'I wrote this example because the number 4 is even'],
            [5, false, 'I wrote this example because the number 5 is odd'],
        ];
    }
}
