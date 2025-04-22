<?php
namespace LumiteStudios\BBCodeParser\Parsers;

use LumiteStudios\BBCodeParser\Contracts\Parser;

class Strikethrough implements Parser
{
    public static function pattern(): string
    {
        return '/code.*?\/code(*SKIP)(*F)|\[s\](.*?)\[\/s\]/s';
    }

    public static function match($matches): string
    {
        return '<s>'.$matches[1].'</s>';
    }
}
