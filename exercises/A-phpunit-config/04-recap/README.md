# Recap - Exercises 01-03

PHPUnit likes test classes to be called things like `FooTest`.  It likes test methods names like `testFoo()`;

Test suites often have a `phpunit.xml` file.  It is usually to be found in `./test(s)/phpunit.xml`, or just in the project root.  It
may be absent entirely.

Many applications just have one massive test suite, and the `--testsuite` CLI option is therefore redundant.

In this file, you will find information about how many test suites there are, as well as any work that has been done to set up test
coverage reports.  You may need a different `--testsuite` option to generate test coverage.  If a custom bootstrap script exists, look
here to find out where it is.

PHPUnit doesn't seem to care whether or not the test classes are autoloaded - they are not mentioned in the `composer.json` file
here.  PHPUnit seems to be scanning the directories it's given, and just looking for extensions of `\PHPUnit_Framework_TestCase` with
classnames ending in `*Test`.  It is looking for methods starting in `test*`, which it can run to test things.
