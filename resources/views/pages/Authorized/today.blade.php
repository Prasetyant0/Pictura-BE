@extends('layout.master')
@section('content')
    <main class="max-w-screen-2xl mx-auto">
        <section id="contentToday" class="mt-[100px]">
            <div class="flex flex-col justify-center text-center">
                <p class="roboto-medium text-black md:text-sm text-[13px]">{{ $date }}</p>
                <h1 class="roboto-medium text-black md:text-3xl text-[22px]">Inspiration for today</h1>
            </div>
            <div class=" mx-4 py-5 flex justify-center">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ($categoryGroup as $c)
                    <div>
                        <a href="/categoryToday/{{ $c->id }}">
                        <figure class="relative cursor-pointer lg:h-[300px] md:h-[250px] h-[180px] rounded-20 overflow-hidden">
                                <img class="rounded-20 w-full h-full"
                                    src="{{ asset('categories_photo/' . $c->photo) }}"
                                    alt="image description">
                            <div class="absolute inset-0 rounded-20 bg-gradient-to-t from-[#5D5D5D] to-transparent"></div>
                            <figcaption class="absolute px-4 text-lg text-white bottom-6 w-full">
                                <div class="flex justify-center items-center text-center">
                                    <p class="roboto-medium md:text-xl text-sm">{{ $c->category_title }}</p>
                                </div>
                            </figcaption>
                        </figure>
                        </a>
                    </div>
                @endforeach
                </div>
            </div>
            <div class="flex flex-col justify-center items-center py-16">
                <div><span class="text-black"><i class="bi bi-check-circle-fill md:text-[25px] text-[18px]"></i></span></div>
                <div><p class="roboto-regular text-black text-sm md:text-[18px]">That's it for today!</p></div>
                <div><p class="text-black roboto-medium md:text-xl text-[18px]">Come back tomorrow for more inspiration</p></div>
            </div>
        </section>
    </main>
@endsection
