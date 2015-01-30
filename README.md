# Accentuation

This library works by replacing all accented characters to not accented characters.

**To use**

Add in your composer.json

```json
"require" : {
    "rafreis/accentuation" : ">=2.0.0"
}
```

Using in your code

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
