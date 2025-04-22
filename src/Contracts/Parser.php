<?php
namespace LumiteStudios\BBCodeParser\Contracts;

interface Parser
{
    public static function pattern(): string;

    public static function match($matches): string;
}
