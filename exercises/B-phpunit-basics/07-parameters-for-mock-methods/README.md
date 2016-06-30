# Exercise 07 - Parameters for Mock Objects

In exercise 7, the `Dependency` is pretending to be a database class.  `Subject` is writing things to the database.

In the unit test, there is another example of expectations being put on a mock object, with a couple of things to keep an eye
on.  First of all, the subject under test is passing a parameter to its dependency, when it calls a method.  Secondly, it
is important that the mock object returns something.  Remove the `markTestSkipped()`, make a couple of changes to the mock's
expectation, and get the tests to pass.
