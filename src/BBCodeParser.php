<?php
namespace LumiteStudios\BBCodeParser;

use Illuminate\Support\Str;
use LumiteStudios\BBCodeParser\Contracts\Parser;

class BBCodeParser
{
    public static function parse(string $content)
    {
        if(config('bbcode-parser.break-newlines')) {
            $content = Str::replaceMatches('/ul.*?\/ul(*SKIP)(*F)|[\n]/s', fn ($matches) => '<br>', $content);
        }
        self::getParsers()->each(function ($parser) use (&$content) {
            $content = Str::replaceMatches($parser::pattern(), fn ($matches) => $parser::match($matches), $content);
        });
        return $content;
    }

    protected static function getParsers()
    {
        return collect(config('bbcode-parser.parsers'))
            ->transform(fn ($parser) => new $parser)
            ->filter(fn ($parser) => $parser instanceof Parser);
    }
}
