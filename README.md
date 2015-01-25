# Replace Accentuation

## To use

Add in your composer.json

```json
"require" : {
    "rafreis/replace_accentuation" : ">=1.0.0"
}
```

Using in your code

```php
<?php

namespace MyNameSpace;

use ReplaceAccentuation\Parser;

class MyClass
{
    public function test()
    {
        return Parser::exec('This string will be returned without accentuation áéíóú');
    }
}
```
