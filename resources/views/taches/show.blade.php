<x-app-layout>
    <x-slot name="header">
        {{ __('taches.show.titre') }}
        </x-slot>
            <x-content>
                <p>{{ $tache->titre }}</p>
                    </x-content>
                        </x-app-layout>
