<?php
namespace LumiteStudios\BBCodeParser\Parsers;

use LumiteStudios\BBCodeParser\Contracts\Parser;

class Bold implements Parser
{
    public static function pattern(): string
    {
        return '/code.*?\/code(*SKIP)(*F)|\[b](.*?)\[\/b]/s';
    }

    public static function match($matches): string
    {
        return '<strong>'.$matches[1].'</strong>';
    }
}
