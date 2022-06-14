Cron Expression Descriptor
===========================
Converts cron expressions into human readable descriptions in PHP.

The library is PHP version of [bradymholt/cron-expression-descriptor (C#)](https://github.com/bradymholt/cron-expression-descriptor).

Installation
------------
It's recommended that you use [Composer](https://getcomposer.org/) to install this project.

```bash
$ composer require mkdesignn/cron-expression-descriptor
```

This will install the library and all required dependencies. The project requires **PHP 7.1** or newer.

Usage
-----

```php
echo (new Mkdesignn\CronExpressionDescriptor\ExpressionDescriptor('23 12 * JAN *'))->getDescription();
// OUTPUT: At 12:23 PM, only in January
```

License
-------
The Cron Expression Descriptor is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
