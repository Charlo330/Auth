<x-app-layout>
    <x-slot name="header">
        {{ __('taches.index.titre') }}
        </x-slot>

            <x-content>
                <ul>
                    @foreach ($taches as $tache)
                        <li>
                            <a href="{{ route('taches.show', $tache->id) }}"
                               class="underline decoration-sky-600 hover:decoration-blue-400">
                                {{ $tache->titre }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </x-content>
</x-app-layout>

