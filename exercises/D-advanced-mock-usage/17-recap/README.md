# Recap Exercises 14-16

PHPUnit's native mock object engine is highly configurable.  You can do cleverer things than the usual `->will($this-returnValue())`.
It supports `returnValueMap()`, where you provide a mapping of parameters mock objects should expect, and corresponding return values.
You can use `onConsecutiveCalls()`, if you simply wish to list the return values of a particular mocked method in the order in which
they should be returned.

There is even a `returnCallback()` method, if you want to start describing the behaviour of your mock object methods using closures,
although this is not demonstrated here.

Testing partial mocks is a bit of a dark art in PHPUnit.  It is not always a brilliant idea to test a class which is noticeably different
from the real one being used, and there is rarely a testability problem which cannot be solved through better use of Dependency Injection
and the Single Responsibility Principle.  Nevertheless, if major refactoring doesn't seem like a good idea before some tests are in place,
testing a partial mock can be the only way.

Our example saw a method called `getDatabaseDependency()` mocked out of the subject under test.  The method was of `protected` visibility,
meaning that this was even possible, and it had as little logic in it as possible.  We used various parameters of PHPUnit's
`getMock()` method, to give us fine-grained control of the mock.  This enabled us to ensure its constructor ran, to determine
its constructor parameters, and to decide which specific methods we wanted mocked out of the resulting object.  We were then able to get
some complex business logic under test, despite it being in the same class as nasty things like inline instantiation of DB objects,
and horrible goings-on in the constructor.
