<?php
namespace LumiteStudios\BBCodeParser\Parsers;

use LumiteStudios\BBCodeParser\Contracts\Parser;

class Underline implements Parser
{
    public static function pattern(): string
    {
        return '/code.*?\/code(*SKIP)(*F)|\[u\](.*?)\[\/u\]/s';
    }

    public static function match($matches): string
    {
        return '<u>'.$matches[1].'</u>';
    }
}
