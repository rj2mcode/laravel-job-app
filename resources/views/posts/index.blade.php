<x-layout>
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless (count($larajobs) == 0)

            @foreach ($larajobs as $larajob)
            <x-larajob-card :larajob="$larajob" />
            @endforeach
        @else
            <p>No listings found</p>
        @endunless
    </div>
</x-layout>
