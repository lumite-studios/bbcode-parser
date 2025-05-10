<?php
namespace LumiteStudios\BBCodeParser;

use Illuminate\Support\Str;
use LumiteStudios\BBCodeParser\Contracts\Parser;

class BBCodeParser
{
    public static function parse(string $content, ?array $parsers = null)
    {
        if(config('bbcode-parser.break-newlines')) {
            $content = Str::replaceMatches('/ul.*?\/ul(*SKIP)(*F)|[\n]/s', fn ($matches) => '<br>', $content);
        }

        $_parsers = self::getParsers($parsers);

        $_parsers->each(function ($parser) use (&$content) {
            $content = Str::replaceMatches($parser::pattern(), fn ($matches) => $parser::match($matches), $content);
        });

        return $content;
    }

    protected static function getParsers(?array $parsers = null)
    {
        return collect($parsers ?? config('bbcode-parser.parsers'))
            ->transform(fn ($parser) => new $parser)
            ->filter(fn ($parser) => $parser instanceof Parser);
    }
}
