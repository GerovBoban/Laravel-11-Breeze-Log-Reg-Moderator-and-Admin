<x-app-layout>
    {{-- <div> --}}

    <div class="row">
        <div class="md:container md:mx-auto">
            <div class="container py-3 text-center">
                <div
                    class="flex items-start grid gap-x-16 gap-y-2 grid-cols-8 rounded-lg bg-white p-3 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                    {{-- <div> --}}
                    <div class="col-1 gap-x-1"> {{ 'Rbr' }}</div>
                    <div class="col-1 gap-x-2" style="color:rgb(191, 7, 7)"> {{ 'Jezik' }}</div>
                    <div class="col-2 gap-x-2">{{ 'Opis' }}</div>
                    <div class="col-1 gap-x-2" style="color:rgb(191, 7, 7)"> {{ 'Jezik' }}</div>
                    <div class="col-3 gap-x-1">{{ 'Opis' }}</div>
                    <div class="col-1 gap-x-1" style="color:rgb(191, 7, 7)"> {{ 'Jezik' }}</div>
                    <div class="col-2 gap-x-2">{{ 'Opis' }}</div>
                    <div class="col-1 gap-x-1">{{ 'Vidljivo' }}</div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($portfolios as $portfolio)
        <div class="row">
            <div class="md:container md:mx-auto">
                <div
                    class="flex items-start gap-4 rounded-lg bg-white p-3 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                    <div class="col-0 gap-x-1"> {{ $portfolio->id }}</div>
                    <div class="col-1 gap-x-1" style="color:rgb(191, 7, 7)"> {{ $portfolio->language_1 }}</div>
                    <div class="col-3 gap-x-1">{{ $portfolio->description_1 }}</div>
                    <div class="col-1 gap-x-1" style="color:rgb(191, 7, 7)"> {{ $portfolio->language_2 }}</div>
                    <div class="col-3 gap-x-1">{{ $portfolio->description_2 }}</div>
                    <div class="col-1 gap-x-1" style="color:rgb(191, 7, 7)"> {{ $portfolio->language_3 }}</div>
                    <div class="col-3 gap-x-1">{{ $portfolio->description_3 }}</div>
                    <div class="col-0 gap-x-1">{{ $portfolio->Yes_No }}</div>
                </div>
            </div>
        </div>
        <div class="container gap-8 py-1"></div>
    @endforeach
    {{-- </div> --}}


</x-app-layout>
