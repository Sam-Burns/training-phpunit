# Exercise 14 - Mocks and Return Value Maps

In exercise 14, the `Dependency` has the same method called several times, with different results.  This behaviour is modelled by a
mock object in the unit tests.  The expectation on the mock doesn't use the traditional `->will($this->returnValue()` to express
what will be returned; it uses `->will($this->returnValueMap()`.

The anatomy of a return value map is as follows:

```php
$returnValueMap = [
    [$param1, $param2, $param3, $returnValue]
];

// ... put return value map on mock expectation

$mock->foo($param1, $param2, $param3); // will return $returnValue

```

Remove the `markTestSkipped`, run the tests for this exercise, and see what the results are.  There is something wrong with the
expectation, which will need to be fixed, so that it more accurately describes the behaviour of the real dependency.
