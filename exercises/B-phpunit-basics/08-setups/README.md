# Exercise 08 - Setups

In PHPUnit, instantiating a subject under test, and giving it mock dependencies, is a repetitive task.  In this exercise, the
`setUp()` method is being used.

PHPUnit will instantiate one instance of your test class for every test method it intends to run.  It will call `setUp()`, and
then call the relevant test method on that test class instance.

To complete this exercise, drop the `markTestSkipped` invocations from the unit tests.  Run them, look at the output, and adjust
the mock method expectations (particularly their return values), to get all the tests to pass.

Notice that the code in `setUp` is only done once.  It is a very common approach in PHPUnit for a `setUp` method, conventionally
at the top of the file, to create the subject under test and any mocks that will be needed.  It is also fairly common for
expectations to be put on mocks within an individual test method.
