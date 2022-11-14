<?php

namespace RyanChandler\PluginSearch\Models;

use Sushi\Sushi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

final class Plugin extends Model
{
    use Sushi;

    protected $casts = [
        'categories' => 'json',
        'author' => 'json',
    ];

    protected $schema = [
        'author' => 'longText',
        'categories' => 'longText',
    ];

    public function getRows()
    {
        return Http::acceptJson()
            ->get(config('filament-plugin-search.feed_url'))
            ->collect('plugins')
            ->map(fn (array $plugin) => [
                ...$plugin,
                'categories' => json_encode($plugin['categories']),
                'author' => json_encode($plugin['author']),
            ])
            ->all();
    }
}
