<?php

namespace LumiteStudios\BBCodeParser\Parsers;

use LumiteStudios\BBCodeParser\Contracts\Parser;

class Small implements Parser
{
    public static function pattern(): string
    {
        return '/code.*?\/code(*SKIP)(*F)|\[small](.*?)\[\/small]/s';
    }

    public static function match($matches): string
    {
        return '<span style="font-size:80%">'.$matches[1].'</span>';
    }
}
