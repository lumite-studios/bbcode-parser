<?php
namespace LumiteStudios\BBCodeParser\Parsers;

use LumiteStudios\BBCodeParser\BBCodeParser;
use LumiteStudios\BBCodeParser\Contracts\Parser;

class Justify implements Parser
{
    public static function pattern(): string
    {
        return '/code.*?\/code(*SKIP)(*F)|\[justify\]((?:[^[]|\[(?!\/?justify(.*?)\])|(?R))+)\[\/justify\]/s';
    }

    public static function match($matches): string
    {
        $parsed = BBCodeParser::parse($matches[1]);
        return "<div style=\"text-align:justify;\">{$parsed}</div>";
    }
}
