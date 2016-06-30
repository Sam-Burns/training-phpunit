# Recap - Exercises 05-08

PHPUnit's built-in mocking engine is fairly verbose, and it is not unheard of for projects to use Mockery or Prophecy (particularly
the former for some reason) to create mock objects.  This is fine in PHPUnit, but many unit test suites in the real world will use
the built-in mocking engine at least some of the time.

Here is a typical expectation on a mock object:

```php
$this->mockDbDependency
    ->expects($this->once())
    ->method('writeNumberToDb')
    ->with(42)
    ->will($this->returnValue(true));
```

Alternatives to `once()` include `any()`, `exactly(4)`, `atLeastOnce()`, and `never()` (negative assertion).  Think about how
many times the method on the mock will be called, and to what extent that is an important point to make in a given test, and be
as specific as you like.  Remember that the mock object's expectations, although part of the `// Arrange` section of many tests,
are essentially an assertion in its own right.

There are other things you can do with the `will($this->returnValue())` bit as well, but these will be covered later.
