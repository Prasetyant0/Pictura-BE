<div class="imageRow py-4 contentProfile" id="created">
    <div class="columns-2 sm:columns-4 md:columns-6 space-y-4">
        @foreach ($created as $c)
        <div class="relative overflow-hidden group rounded-xl">
            @if ($c->users_id == Auth::user()->id)
            <a href="/mydetail/{{ $c->uuid }}">
                <img class="h-auto max-w-full rounded-xl transition-transform transform-gpu group-hover:scale-110 duration-300"
                    src="{{ asset('gallery/'. $c->file_location) }}" alt="">
            </a>
            @else
            <a href="/detailPost/{{ $c->uuid }}">
                <img class="h-auto max-w-full rounded-xl transition-transform transform-gpu group-hover:scale-110 duration-300"
                    src="{{ asset('gallery/'. $c->file_location) }}" alt="">
            </a>
            @endif
        </div>
        @endforeach
    </div>
</div>
