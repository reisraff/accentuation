# Accentuation

[![Latest Stable Version](https://poser.pugx.org/rafreis/accentuation/v/stable)](https://packagist.org/packages/rafreis/accentuation) [![Total Downloads](https://poser.pugx.org/rafreis/accentuation/downloads)](https://packagist.org/packages/rafreis/accentuation) [![Latest Unstable Version](https://poser.pugx.org/rafreis/accentuation/v/unstable)](https://packagist.org/packages/rafreis/accentuation) [![License](https://poser.pugx.org/rafreis/accentuation/license)](https://packagist.org/packages/rafreis/accentuation)

This library works by replacing all accented characters to not accented characters.

**To use**

Add in your composer.json

```json
"require" : {
    "reisraff/accentuation" : ">=2.0.1"
}
```

**Using in your code**

```php
<?php

namespace MyNameSpace;

use Accentuation\Accentuation;

class MyClass
{
    public function test()
    {
        return Accentuation::remove('This string will be returned without accentuation áéíóú');
    }
}
```

**Tests**

To run the test suite, you need install the dependencies via composer, then
run PHPUnit.

    $ composer install
    $ phpunit

You can also use the following command to run the most common QA checks, such as
`php -l`, `phpcs`, `phpunit`:

    $ ant check
