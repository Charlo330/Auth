<x-app-layout>
    <x-slot name="header">
        {{ __('taches.create.titre') }}
        </x-slot>
            <x-content>
                <form method="POST" action="{{ route('taches.store') }}" class="mt-6 space-y-6">
                    @csrf
                    <div>
                        <x-input-label for="titre" :value="__('taches.create.titreTache')" />
                        <x-text-input id="titre" name="titre" type="text" class="mt-1 block w-full" :value="old('titre')" required />
                        <x-input-error :messages="$errors->get('titre')" class="mt-2" />
                        </div>
                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('taches.create.enregistrer') }}</x-primary-button>
                                        </div>
                                            </form>
                                                </x-content>
                                                    </x-app-layout>
