@props(['larajob'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{ asset('assets/images/no-image.png') }}" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/larajobs/{{ $larajob['id'] }}">{{ $larajob->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $larajob->company }}</div>
            <x-larajob-tags :tagsCsv="$larajob->tags" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{ $larajob->location }}
            </div>
        </div>
    </div>
</x-card>
