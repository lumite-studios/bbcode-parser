<?php
namespace LumiteStudios\BBCodeParser\Parsers;

use LumiteStudios\BBCodeParser\Contracts\Parser;

class ListItem implements Parser
{
    public static function pattern(): string
    {
        return '/code.*?\/code(*SKIP)(*F)|\[li\](.*?)\[\/li\]/s';
    }

    public static function match($matches): string
    {
        return '<li>'.$matches[1].'</li>';
    }
}
