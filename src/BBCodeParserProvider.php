<?php
namespace LumiteStudios\BBCodeParser;

use Illuminate\Support\ServiceProvider;

class BBCodeParserProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/bbcode-parser.php' => config_path('bbcode-parser.php'),
        ]);
    }

    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/bbcode-parser.php', 'bbcode-parser'
        );
    }
}
