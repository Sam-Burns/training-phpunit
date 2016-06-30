# Exercise 05 - Mock Intro

You can run the test suite for exercise 5 by typing `./bin/phpunit --testsuite ex5`.

In this exercise, we are trying to get the `Subject` under test, but in needs an instance of `HorribleDependency`.  Have
a look at `HorribleDependency`, to see why we can't instantiate it.

The unit test is marked as skipped, so get rid of that bit and make it run.  You will then need to tweak the behaviour of the mock
object, in order to make the test pass.
