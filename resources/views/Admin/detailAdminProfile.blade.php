@extends('Admin.layout.master_admin')
@section('content-admin')
    <main>
        <section class="max-w-screen-2xl mx-auto" id="accReport-content">
            <div class="px-4 mt-20 sm:ml-64">
                <div class="flex justify-center items-center flex-col bg-backcolor p-2 rounded-xl">
                    <div class="rounded-full overflow-hidden">
                        <img src="{{ asset('assets/img/exploreAsset/portrait-happy-handsome-young-man-posing-isolated-background.jpg') }}"
                            alt="Photo Profile" class="w-28 h-28 rounded-full object-cover object-top">
                    </div>
                    <div class="pt-2 flex flex-col justify-center items-center space-y-1">
                        <div>
                            <h1 class="roboto-medium text-xl">Janggar Prakoso</h1>
                        </div>
                        <div class="flex flex-row gap-1">
                            <img src="{{ asset('assets/img/logosvg.svg') }}" alt="logos" class="opacity-50">
                            <p class="text-iconColor roboto-light text-sm">devtasen</p>
                        </div>
                        <div class="pt-2 w-[500px] text-center">
                            <p class="roboto-regular text-sm text-colorText">Suro diro joyo diningrat, lebur dening
                                pangastuti.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('jsInternalAdmin')
    <script src="{{ asset('assets/js/profile.js') }}"></script>
@endpush
