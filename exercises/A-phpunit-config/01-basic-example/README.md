# Exercise 01 - Basic Example

The production code for this example is in the `exercises/A-phpunit-config/01-basic-example/src/` directory.  The PHPUnit stuff is
in the `exercises/A-phpunit-config/01-basic-example/test/` directory.  You can run the tests for exercise 1 from the project root,
by typing `./bin/phpunit --testsuite ex1`.

You will have to remove the `markTestSkipped()` invocation in the unit test, in order for it to start running.

The `Subject` class is under test, but it is failing its test! Change the production code in the `src/` directory, to fix
the bug and make it pass.  Look carefully at the test output for this example, to see what behaviour is expected.  Reading
the unit test will also help.
