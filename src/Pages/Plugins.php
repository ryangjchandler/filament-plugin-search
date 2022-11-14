<?php

namespace RyanChandler\PluginSearch\Pages;

use Filament\Pages\Page;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
use Livewire\WithPagination;
use RyanChandler\PluginSearch\Models\Plugin;

class Plugins extends Page
{
    use WithPagination;

    protected static string $view = 'filament-plugin-search::pages.plugins';

    protected static ?string $navigationIcon = 'filament-plugin-search::icon';

    public $search = '';

    public $tab = 'all';

    public function getPluginsProperty()
    {
        return Plugin::query()
            ->when($this->search, fn (Builder $query) => $query->where('name', 'LIKE', '%'.$this->search.'%'))
            ->when($this->tab === 'installed', function (Builder $query) {
                $query->whereIn('github_repository', $this->getInstalledPackages())->whereNotNull('github_repository');
            })
            ->paginate(perPage: 15);
    }

    protected function getInstalledPackages(): array
    {
        $composer = file_get_contents(base_path('composer.json'));
        $composer = json_decode($composer, true);
        $required = Arr::get($composer, 'require');

        return array_keys($required);
    }

    protected function getTitle(): string
    {
        return 'Plugins';
    }

    protected function getBreadcrumbs(): array
    {
        return [
            $this->getTitle(),
        ];
    }
}
