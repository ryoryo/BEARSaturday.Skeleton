# This package is deprecated. Use [BEAR.Sunday](https://bearsunday.github.io/) Instead.
## このパッケージの新規インストールは推奨されません。

BEAR.Saturdayが依存する[PEARのパッケージ](https://pear.php.net/packages.php)のいくつかもメンテナンスされていません
 
 * Net_UserAgent_Mobile
 * XML_RSS
 * Console_Color
 * File_SearchReplace
 * Net_Server

----

BEARSaturday/Skeleton
=====================
### Install via composer

```
composer create-project bearsaturday/skeleton your-project-name
```

### test

```
./vendor/bin/phpunit
```

### Structure

    /path/to/your/project
        |
        +--- App/
        +--- bin/
        +--- data/
        +--- htdocs/
        +--- logs/
        +--- tests/
        |       |
        |       +--- bootstrap.php
        +--- tmp/
        +--- vendor/
        +--- App.php
        +--- composer.json
        +--- phpunit.xml.dist



