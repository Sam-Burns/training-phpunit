# Exercise 15 - Mocks with Consecutive Calls

Similarly to return value maps, PHPUnit also lets you use the following construct on a mock expectation:

``` phpunit
->will($this->onConsecutiveCalls($firstReturnValue, $secondReturnValue, $thirdReturnValue))
```

Similarly to the previous exercise, remove `markTestSkipped`.  There is something wrong with the
expectation, which will need to be fixed, so that it more accurately describes the behaviour of the real dependency.  The tests should
then pass.
