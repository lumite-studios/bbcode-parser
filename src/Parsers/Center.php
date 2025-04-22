<?php
namespace LumiteStudios\BBCodeParser\Parsers;

use LumiteStudios\BBCodeParser\BBCodeParser;
use LumiteStudios\BBCodeParser\Contracts\Parser;

class Center implements Parser
{
    public static function pattern(): string
    {
        return '/code.*?\/code(*SKIP)(*F)|\[center\]((?:[^[]|\[(?!\/?center(.*?)\])|(?R))+)\[\/center\]/s';
    }

    public static function match($matches): string
    {
        $parsed = BBCodeParser::parse($matches[1]);
        return "<div style=\"text-align:center;\">{$parsed}</div>";
    }
}
