# Arabic Diff For Humans
PHP Package to convert time difference to Arabic human readable string

##### 1 - Dependency
The first step is using composer to install the package and automatically update your composer.json file, you can do this by running:

```shell
composer require syrian-open-source/php-arabic-diff-for-human
```

Usage
-----------
Convert from string date, this feature will work to compare years, months,days,minutes, and seconds.
You can pass the date as a string with any format.
```php
        $instance = (new ArabicDiffForHumans());
        $time = "2018-1-1";
        echo $instance->getFromDateString($time);
        // the result should be: "منذ 4 سنين"
```
Convert from string date, this feature will work to compare years, months,days,minutes, and seconds.
You can pass the date as a string with any format.
```php
        $instance = (new ArabicDiffForHumans());
        $time = "2018-1-1";
        echo $instance->get(strtotime($time));
        // the result should be: "منذ 4 سنين"
```

Changelog
---------
Please see the [CHANGELOG](https://github.com/syrian-open-source/php-arabic-diff-for-human/blob/master/CHANGELOG.md) for more information about what has changed or updated or added recently.

Security
--------
If you discover any security related issues, please email them first to alali.abdusslam@gmail.com, 
if we do not fix it within a short period of time please open a new issue describing your problem. 

Credits
-------
* [Abdussalam M. Al-Ali](https://www.linkedin.com/in/abdussalam-alali/)
* [All contributors](https://github.com/syrian-open-source/php-arabic-diff-for-human/graphs/contributors)
