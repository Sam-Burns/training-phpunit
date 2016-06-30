# Exercise 16 - Testing Legacy Code with Partial Mocks

Delving into the dark arts of PHPUnit, this exercise tests the subject in an unusual way.

The subject under test is horrifying legacy code, and we want to get it under test before making any changes at all to production code.
There are a couple of bits of black magic in the unit test, which is often the case where the production code is a mess.  The main points
are:

- We are not testing a 'real' `Subject`: a partial mock is being tested instead.  This has some real behaviour, and some
stuff which has been mocked.
- Our intention is to change the behaviour of the method `getDatabaseDependency()`, while not altering the behaviour of the rest of
the SUT.
- There are times when a mock object's real constructor may need to be run during instantiation.

This exercise is a little more complex than previous examples, so take a moment to find out what the parameters of PHPUnit's
`getMock()` method actually are, before attempting the exercise.  Notice that you can choose to mock out some methods, but not
others, and you have the option to run the real constructor.

In order to get this exercise to pass its tests, you will make five changes to the unit test provided.  Deleting the `markTestSkipped()`
is the first.  You will also need to make changes to three hard-coded strings, and one hard-coded boolean variable.  Your five changes
will, between them, affect all three methods in your unit test class.  Fix the test to make it pass.
