<div id="albums" class="albumsRow py-4 hidden contentProfile relative">
    <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-6 gap-2">
        @forelse ($dataAlbum as $a)
        <div>
            <a href="/album-detail/{{ $a->id }}">
                <figure
                    class="relative cursor-pointer lg:h-[200px] md:h-[150px] h-[100px] rounded-xl overflow-hidden group">
                    <img class="rounded-xl w-full h-full object-cover object-center transition-transform transform-gpu group-hover:scale-110 duration-300"
                        src="{{ asset('albumWallpaper/'.$a->album_wallpaper) }}"
                        alt="{{ $a->album_name }}">
                    <div class="absolute inset-0 rounded-xl bg-gradient-to-t from-[#5D5D5D] to-transparent">
                    </div>
                    <figcaption class="absolute px-4 text-white bottom-3 w-full">
                        <div class="flex justify-center items-center text-center">
                            <p class="roboto-medium md:text-xl text-sm">{{ $a->album_name }}</p>
                        </div>
                    </figcaption>
                </figure>
            </a>
        </div>
        @empty
        {{-- <p>There are no albums yet, please add albums.</p> --}}
        @endforelse

    </div>
    <div id="scrollButtonAdd" class="fixed bottom-5 right-5 z-10">
        <a href="/add-new-album"
            class="py-2 px-3 block rounded-full text-backcolor bg-primary text-2xl hover:bg-primaryDark"><i
                class="bi bi-plus-lg"></i></a>
    </div>
</div>
