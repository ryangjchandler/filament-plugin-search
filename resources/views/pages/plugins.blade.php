<x-filament::page>
    <div>
        <x-filament::tabs class="!rounded-b-none border-t border-x border-gray-300">
            <x-filament::tabs.item wire:click="$set('tab', 'all')" :active="$tab === 'all'">
                <span>All</span>
            </x-filament::tabs.item>

            <x-filament::tabs.item wire:click="$set('tab', 'installed')" :active="$tab === 'installed'">
                <span>Installed</span>
            </x-filament::tabs.item>
        </x-filament::tabs>

        <input type="search" name="search" id="search" wire:model.debounce.250ms="search" placeholder="Search..." @class([
            'block w-full transition duration-75 rounded-lg !rounded-t-none shadow-sm !border-t-0 text-sm focus:border-primary-500 focus:ring-1 focus:ring-inset focus:ring-primary-500 disabled:opacity-70 border-gray-300',
            'dark:bg-gray-700 dark:text-white dark:focus:border-primary-500' => config('forms.dark_mode'),
        ])>
    </div>

    <div class="grid grid-cols-3 gap-8">
        @forelse($this->plugins as $plugin)
            <div class="bg-white rounded-lg shadow overflow-hidden relative">
                <img src="{{ $plugin->thumbnail_url }}" alt="{{ $plugin->name }}" class="h-64 object-cover object-left w-full">

                <div class="py-4 px-4">
                    <h3 class="text-center text-xl font-medium">
                        {{ $plugin->name }}
                    </h3>

                    <p class="text-center text-gray-700 font-medium text-sm mt-2">
                        @if($plugin->price)
                            {{ $plugin->price }}
                        @else
                            Free
                        @endif
                    </p>

                    <p class="text-center mt-4">
                        {{ $plugin->description }}
                    </p>
                </div>

                <a href="{{ $plugin->url }}" class="absolute inset-0"></a>
            </div>
        @empty
            <div class="col-span-full rounded-lg shadow overflow-hidden">
                <x-tables::empty-state icon="heroicon-o-emoji-sad" heading="No plugins found.">
                </x-tables::empty-state>
            </div>
        @endforelse
    </div>

    <div class="bg-white rounded-lg pl-2">
        <x-tables::pagination :paginator="$this->plugins" :recordsPerPageSelectOptions="[]" />
    </div>
</x-filament::page>
