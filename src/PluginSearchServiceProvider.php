<?php

namespace RyanChandler\PluginSearch;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class PluginSearchServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-plugin-search';

    protected array $resources = [
        // CustomResource::class,
    ];

    protected array $pages = [
        // CustomPage::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    protected array $styles = [
        'plugin-filament-plugin-search' => __DIR__.'/../resources/dist/filament-plugin-search.css',
    ];

    protected array $scripts = [
        'plugin-filament-plugin-search' => __DIR__.'/../resources/dist/filament-plugin-search.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-filament-plugin-search' => __DIR__ . '/../resources/dist/filament-plugin-search.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);
    }
}
