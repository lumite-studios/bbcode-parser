<?php

use LumiteStudios\BBCodeParser\Parsers;

return [
    'break-newlines' => true,

    'parsers' => [
        // Parsers\Linebreak::class,
        Parsers\Bold::class,
        Parsers\Italic::class,
        Parsers\Underline::class,
        Parsers\Strikethrough::class,

        Parsers\UnorderedList::class,
        Parsers\OrderedList::class,
        Parsers\ListItem::class,

        Parsers\Heading::class,
        Parsers\Code::class,
        Parsers\Blockquote::class,
        Parsers\Spoiler::class,
        Parsers\SpoilerExtended::class,

        Parsers\Left::class,
        Parsers\Center::class,
        Parsers\Right::class,
        Parsers\Justify::class,
    ],
];
