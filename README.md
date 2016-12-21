# php-cli-colorizer
Helper class to colorize CLI output in php

## Usage

```php
require_once CliColorizer.php

//Colorize String

//will display "Hello world" with red color
echo CliColorizer::colorize("Hello world", "red");
//will display "Hello world" with red background-color and black color
echo CliColorizer::colorize("Hello world", null, "red");
//will display "Hello world" with white color and red background-color
echo CliColorizer::colorize("Hello world", "white", "red");
```
