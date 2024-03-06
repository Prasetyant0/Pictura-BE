<div id="favorite" class="favoriteRow py-4 hidden contentProfile">
    <div
        class="columns-2 sm:columns-4 md:columns-6 space-y-4">
        @foreach ($userFavorites as $favorite)
            <div class="relative overflow-hidden group rounded-xl">
                <a href="/detailPost/{{ $favorite->photosFavorite->uuid }}">
                    <img class="h-auto max-w-full rounded-xl transition-transform transform-gpu group-hover:scale-110 duration-300"
                        src="{{ asset('gallery/' . $favorite->photosFavorite->file_location) }}"
                        alt="{{ $favorite->photosFavorite->created_at }}">
                </a>
            </div>
        @endforeach

    </div>
</div>
