<?php
namespace LumiteStudios\BBCodeParser;

use Illuminate\Support\Str;
use Illuminate\Support\ServiceProvider;

class BBCodeParserProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/bbcode-parser.php' => config_path('bbcode-parser.php'),
        ]);
        Str::macro('matchPattern', function (string $pattern, string $input, ?string $trim) {
            preg_match_all($pattern, $input, $output, PREG_SET_ORDER);

            return collect($output)
                ->mapWithKeys(fn ($item) => [$item[1] => $trim ? Str::replace($trim, '', $item[2]) : $item[2]])
                ->toArray();
        });
    }

    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/bbcode-parser.php', 'bbcode-parser'
        );
    }
}
