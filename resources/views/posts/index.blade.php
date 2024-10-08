<x-layout>
    @include('partials._hero')
    @include('partials._search')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless (count($larajobs) == 0)

            @foreach ($larajobs as $larajob)
                <x-larajob-card :larajob="$larajob" />
            @endforeach
        @else
            <p>No listings found</p>
        @endunless
    </div>
    <div class="mt-6 p-4 center">
        {{$larajobs->links()}}
    </div>
</x-layout>
