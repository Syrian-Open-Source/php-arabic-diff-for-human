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
        // if the current date 2022-1-1 forexample, the result should be: "منذ 4 سنين"
```
Convert from string date, this feature will work to compare years, months,days,minutes, and seconds.
You can pass the date as a string with any format.
```php
        $instance = (new ArabicDiffForHumans());
        $time = "2018-1-1";
        echo $instance->get(strtotime($time));
        // if the current date 2022-1-1 forexample, the result should be: "منذ 4 سنين"
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

About Syrian Open Source
-------
The Syrian Open Source platform is the first platform on GitHub dedicated to bringing Syrian developers from different cultures and experiences together, to work on projects in different languages, tasks, and versions, and works to attract Syrian developers to contribute more under one platform to open source software, work on it, and issue it with high quality and advanced engineering features, which It stimulates the dissemination of the open-source concept in the Syrian software community, and also contributes to raising the efficiency of developers by working on distributed systems and teams.
