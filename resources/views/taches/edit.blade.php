<x-app-layout>
    <x-slot name="header">
        {{ __('taches.edit.titre') }}
    </x-slot>
    <x-content>
        <form method="POST" action="{{ route('taches.update', $tache->id) }}" class="mt-6 space-y-6">
            @method('PUT')
            @csrf
            <div>
                <x-input-label for="titre" :value="__('taches.edit.titreTache')"/>
                <x-text-input id="titre" name="titre" type="text" class="mt-1 block w-full"
                              :value="old('titre', $tache->titre)" required/>
                <x-input-error :messages="$errors->get('titre')" class="mt-2"/>
            </div>
            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('taches.edit.enregistrer') }}</x-primary-button>
                @if (session('status') === 'tache-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600"
                    >{{ __('taches.edit.enregistree') }}</p>
                @endif
            </div>
        </form>
    </x-content>
</x-app-layout>
