<?php
namespace LumiteStudios\BBCodeParser\Parsers;

use LumiteStudios\BBCodeParser\Contracts\Parser;

class UnorderedList implements Parser
{
    public static function pattern(): string
    {
        return '/code.*?\/code(*SKIP)(*F)|\[ul\](.*?)\[\/ul\]/s';
    }

    public static function match($matches): string
    {
        return '<ul>'.$matches[1].'</ul>';
    }
}
