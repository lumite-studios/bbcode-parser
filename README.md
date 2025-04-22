
# lumite-studios/bbcode-parser

## Installation
```bash
composer require lumite-studios/bbcode-parser
```
### Config File
```bash
php artisan vendor:publish --provider=LumiteStudios\BBCodeParser\BBCodeParserProvider
```

## Usage
```php
use LumiteStudios\BBCodeParser\BBCodeParser;

BBCodeParser::parse('[b]bold[/b]');
// Outputs: <strong>bold</strong>
```
