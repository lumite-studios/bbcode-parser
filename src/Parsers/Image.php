<?php

namespace LumiteStudios\BBCodeParser\Parsers;

use Illuminate\Support\Str;
use LumiteStudios\BBCodeParser\Contracts\Parser;

class Image implements Parser
{
    public static function pattern(): string
    {
        return '/code.*?\/code(*SKIP)(*F)|\\[img(\s(.*?))?](.*?)\[\/img]/s';
    }

    public static function match($matches): string
    {
        $options = Str::matchPattern('/(height|width|alt|title)=((".*?")|(\S*))/s', $matches[2], '"');
        $height = array_key_exists('height', $options) ? $options['height'] : 'auto';
        $width = array_key_exists('width', $options) ? $options['width'] : 'auto';
        $src = $matches[3];
        $alt = array_key_exists('alt', $options) ? $options['alt'] : $src;
        $title = array_key_exists('title', $options) ? $options['title'] : $src;

        return "<img style=\"height:{$height}; width:{$width}\" src=\"{$src}\" alt=\"{$alt}\" title=\"{$title}\">";
    }
}
