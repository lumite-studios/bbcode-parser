<?php
namespace LumiteStudios\BBCodeParser\Parsers;

use LumiteStudios\BBCodeParser\Contracts\Parser;

class OrderedList implements Parser
{
    public static function pattern(): string
    {
        return '/code.*?\/code(*SKIP)(*F)|\[ol\](.*?)\[\/ol\]/s';
    }

    public static function match($matches): string
    {
        return '<ol>'.$matches[1].'</ol>';
    }
}
