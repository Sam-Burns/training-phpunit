# Recap - Exercises 10-12

PHPUnit has a couple of features that aren't commonly used, but which you may bump into occasionally.  These include
`tearDown()`, data providers, and expecting exceptions.

Good data providers should have a reason for every test case.  Some developers prefer to put a comment, explaining why they thought
a given example was important.  Others write a custom failure message, expressing why that row of data is important and what it is
there to test.  In our example, `assertEquals()` was given an optional third parameter, which determines what will be output to the
console, should the test fail.

PHPUnit also has a wide vocabulary for assertions.  Although `assertEquals()` may be most common, `assertTrue()`, `assertLessThanOrEqualTo()`,
`assertInternalType()`, `assertInstanceOf()`, `assertRegExp()`, `assertArrayHasKey()` and many others will make occasional appearances
in larger test suites.  If you can't find a built-in assertion that does what you want, just use `assertTrue()` plus a little bit of your
own logic to produce the desired effect.
