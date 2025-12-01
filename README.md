
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

### Available BBCode
* [b]bold[/b]
* [i]italic[/i]
* [u]underline[/u]
* [s]strikethrough[/s]
* [left]left align[/left]
* [center]center align[/center]
* [right]right align[/right]
* [justify]justify align[/justify]
* [ul]unordered list[/ul]
* [ol]ordered list[/ol]
* [li]list item[/li]
* [small]small text[/small] !new
* [h(1|2|3|4|5|6)]heading[/h(1|2|3|4|5|6)]
* [code]code block[/code]
* [blockquote]blockquote[/blockquote]
* [spoiler]spoiler[/spoiler]
* [image]image[/image]
* [image height=100 width=100 alt=alt title=title]attributed image[/image]
* [url]linked url[/url]
* [url=link]titled url[/url]
* [hr]horizontal line
