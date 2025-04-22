<?php
namespace LumiteStudios\BBCodeParser\Parsers;

use LumiteStudios\BBCodeParser\Contracts\Parser;

class Italic implements Parser
{
    public static function pattern(): string
    {
        return '/code.*?\/code(*SKIP)(*F)|\[i\](.*?)\[\/i\]/s';
    }

    public static function match($matches): string
    {
        return '<em>'.$matches[1].'</em>';
    }
}
