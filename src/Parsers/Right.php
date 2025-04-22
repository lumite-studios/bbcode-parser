<?php
namespace LumiteStudios\BBCodeParser\Parsers;

use LumiteStudios\BBCodeParser\Contracts\Parser;

class Right implements Parser
{
    public static function pattern(): string
    {
        return '/code.*?\/code(*SKIP)(*F)|\[right\]((?:[^[]|\[(?!\/?right(.*?)\])|(?R))+)\[\/right\]/s';
    }

    public static function match($matches): string
    {
        return '<div style="text-align:right;">'.$matches[1].'</div>';
    }
}
