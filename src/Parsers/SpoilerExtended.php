<?php
namespace LumiteStudios\BBCodeParser\Parsers;

use LumiteStudios\BBCodeParser\BBCodeParser;
use LumiteStudios\BBCodeParser\Contracts\Parser;

class SpoilerExtended implements Parser
{
    public static function pattern(): string
    {
        return '/code.*?\/code(*SKIP)(*F)|\[spoiler=(.*?)\]((?:[^[]|\[(?!\/?spoiler(.*?)\])|(?R))+)\[\/spoiler\]/s';
    }

    public static function match($matches): string
    {
        $parsed = BBCodeParser::parse($matches[2]);
        return "<details><summary>{$matches[1]}</summary>{$parsed}</details>";
    }
}
