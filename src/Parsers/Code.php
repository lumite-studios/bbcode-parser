<?php
namespace LumiteStudios\BBCodeParser\Parsers;

use LumiteStudios\BBCodeParser\Contracts\Parser;

class Code implements Parser
{
    public static function pattern(): string
    {
        return '/\[code\]((?:[^[]|\[(?!\/?code(.*?)\])|(?R))+)\[\/code\]/s';
    }

    public static function match($matches): string
    {
        return '<code>'.$matches[1].'</code>';
    }
}
