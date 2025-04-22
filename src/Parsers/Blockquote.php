<?php
namespace LumiteStudios\BBCodeParser\Parsers;

use LumiteStudios\BBCodeParser\Contracts\Parser;

class Blockquote implements Parser
{
    public static function pattern(): string
    {
        return '/code.*?\/code(*SKIP)(*F)|\[blockquote\]((?:[^[]|\[(?!\/?blockquote(.*?)\])|(?R))+)\[\/blockquote\]/s';
    }

    public static function match($matches): string
    {
        return '<blockquote>'.$matches[1].'</blockquote>';
    }
}
