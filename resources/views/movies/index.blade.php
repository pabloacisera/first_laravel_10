<x-layouts.app>
    <x-slot name="header">
        <h1 class="text-xl font-bold text-gray-800 dark:text-gray-200">Listado de Películas</h1>
    </x-slot>

    @if ($movies->isEmpty())
        <p>No hay datos disponibles.</p>
    @else
        <div class="movies-container">
            @foreach ($movies as $movie)
                <x-movie-card
                    title="{{ $movie->title }}"
                    description="{{ $movie->description }}"
                    duration="{{ $movie->duration }}"
                    poster="{{ $movie->poster }}"
                    rating="{{ $movie->rating }}"
                />
            @endforeach
        </div>
    @endif
</x-layouts.app>
