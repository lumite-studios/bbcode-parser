<?php

namespace LumiteStudios\BBCodeParser\Parsers;

use LumiteStudios\BBCodeParser\Contracts\Parser;

class HorizontalLine implements Parser
{
    public static function pattern(): string
    {
        return '/code.*?\/code(*SKIP)(*F)|\[hr]/s';
    }

    public static function match($matches): string
    {
        return '<hr>';
    }
}
