# Exercise 11 - Data Providers

Sometimes the best way to express what you want some logic to do is by providing lots of examples.  This is often the case with
mathematical calculations, or string manipulation.  PHPUnit has a feature called 'data providers', which allows this to happen.

Look at the simple subject, and then have a look at its test.  Pay particular attention to the relationship between the test
method and the data provider, which PHPUnit is told about by the `@dataProvider` annotation.

Some of the data provided by the data provider is wrong.  Fix the returned array to have correct values in it, and get the tests
to pass.
