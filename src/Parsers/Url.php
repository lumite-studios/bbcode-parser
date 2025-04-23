<?php

namespace LumiteStudios\BBCodeParser\Parsers;

use LumiteStudios\BBCodeParser\Contracts\Parser;

class Url implements Parser
{
    public static function pattern(): string
    {
        return '/code.*?\/code(*SKIP)(*F)|\[url(=(.*?))?](.*?)\[\/url\]/s';
    }

    public static function match($matches): string
    {
        $title = $matches[3];
        $href = $matches[2] ?: $title;

        return "<a href=\"{$href}\" target=\"_blank\">{$title}</a>";
    }
}
