# Exercise 10 - Teardowns

`tearDown()` is the lesser-known sister method of `setUp()`, and runs after a test method has been executed.  It is rare to need it,
unless the subject under test is doing something weird, or the tests are accessing a real database.  In this case, the DB may need
to be put back in a known state, ready for subsequent tests.

Have a look at the bizarre behaviour of `Subject` in exercise 10, and think about what could be done after execution of a test, to
put things back as they were.

You will only need to add one line of code to the `tearDown` method in the unit test, in order to make the tests pass, but take a
moment to read the unit tests carefully: there are interesting things going on with the assertions.  Try to understand why each
individual test was failing before the teardown was implemented.
