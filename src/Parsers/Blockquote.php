<?php
namespace LumiteStudios\BBCodeParser\Parsers;

use LumiteStudios\BBCodeParser\BBCodeParser;
use LumiteStudios\BBCodeParser\Contracts\Parser;

class Blockquote implements Parser
{
    public static function pattern(): string
    {
        return '/code.*?\/code(*SKIP)(*F)|\[blockquote\]((?:[^[]|\[(?!\/?blockquote(.*?)\])|(?R))+)\[\/blockquote\]/s';
    }

    public static function match($matches): string
    {
        $parsed = BBCodeParser::parse($matches[1]);
        return "<blockquote>{$parsed}</blockquote>";
    }
}
