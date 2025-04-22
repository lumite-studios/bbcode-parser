<?php
namespace LumiteStudios\BBCodeParser\Parsers;

use LumiteStudios\BBCodeParser\Contracts\Parser;

class Spoiler implements Parser
{
    public static function pattern(): string
    {
        return '/code.*?\/code(*SKIP)(*F)|\[spoiler\]((?:[^[]|\[(?!\/?spoiler(.*?)\])|(?R))+)\[\/spoiler\]/s';
    }

    public static function match($matches): string
    {
        return '<details><summary>Spoiler</summary>'.$matches[1].'</details>';
    }
}
