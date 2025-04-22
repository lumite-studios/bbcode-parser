<?php
namespace LumiteStudios\BBCodeParser\Parsers;

use LumiteStudios\BBCodeParser\BBCodeParser;
use LumiteStudios\BBCodeParser\Contracts\Parser;

class Spoiler implements Parser
{
    public static function pattern(): string
    {
        return '/code.*?\/code(*SKIP)(*F)|\[spoiler\]((?:[^[]|\[(?!\/?spoiler(.*?)\])|(?R))+)\[\/spoiler\]/s';
    }

    public static function match($matches): string
    {
        $parsed = BBCodeParser::parse($matches[1]);
        return "<details><summary>Spoiler</summary>{$parsed}</details>";
    }
}
