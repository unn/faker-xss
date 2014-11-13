# faker-xss
=========

Faker-xss is a provider for the [Faker](https://github.com/fzaninotto/Faker) library. This provider will give basic XSS testing your app with fake data.

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/bc4349f9-a970-4c76-b2dd-946f604674a6/mini.png)](https://insight.sensiolabs.com/projects/bc4349f9-a970-4c76-b2dd-946f604674a6) [![Build Status](https://travis-ci.org/unn/faker-xss.svg)](https://travis-ci.org/unn/faker-xss)

## Basic usage


```php
$faker = \Faker\Factory::create();
$faker->addProvider(new Xss($faker));
$string = $faker->xss; #<script>alert('XSS');</script>
```

Using custom strings, useful for providing labels to which form fields are being seeded with data.
```php
$faker = \Faker\Factory::create();
$faker->addProvider(new Xss($faker));
$string = $faker->xss('string'); #<script>alert('string');</script>
```
