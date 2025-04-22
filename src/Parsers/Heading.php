<?php
namespace LumiteStudios\BBCodeParser\Parsers;

use LumiteStudios\BBCodeParser\Contracts\Parser;

class Heading implements Parser
{
    public static function pattern(): string
    {
        return '/code.*?\/code(*SKIP)(*F)|\[h(\d)\](.*?)\[\/h\d\]/s';
    }

    public static function match($matches): string
    {
        return '<h'.$matches[1].'>'.$matches[2].'</h'.$matches[1].'>';
    }
}
