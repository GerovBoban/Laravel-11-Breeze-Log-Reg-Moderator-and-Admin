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
        <form action="{{ route('portfolio.update', $portfolio) }}" method="POST" class="md:container md:mx-auto">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="md:container md:mx-auto">
                    <div
                        class="flex items-start gap-4 rounded-lg bg-white p-3 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                        <div class="col-0 gap-x-1"> {{ $portfolio->id }}</div>
                        <div class="col-1 gap-x-1" style="color:rgb(191, 7, 7)">
                            <textarea name="language_1" rows="10" cols="14" class="note-body"
                                placeholder="Enter your language_1 message here">{{ $portfolio->language_1 }}</textarea>
                        </div>
                        <div class="col-1 gap-x-1" style="color:rgb(0, 0, 0)">
                            <textarea name="description_1" rows="10" cols="22" class="note-body"
                                placeholder="Enter your description_1 message here">{{ $portfolio->description_1 }}</textarea>
                        </div>
                        <div class="col-1 gap-x-1" style="color:rgb(191, 7, 7)">
                            <textarea name="language_2" rows="10" cols="14" class="note-body"
                                placeholder="Enter your language_2 message here">{{ $portfolio->language_2 }}</textarea>
                        </div>
                        <div class="col-1 gap-x-1" style="color:rgb(0, 0, 0)">
                            {{-- <div class="col-3 gap-x-1"> --}}
                            <textarea name="description_2" rows="10" cols="22" class="note-body"
                                placeholder="Enter your description_2 message here">{{ $portfolio->description_2 }}</textarea>
                        </div>
                        <div class="col-1 gap-x-1" style="color:rgb(191, 7, 7)">
                            <textarea name="language_3" rows="10" cols="14" class="note-body"
                                placeholder="Enter your language_3 message here">{{ $portfolio->language_3 }}</textarea>
                        </div>
                        <div class="col-1 gap-x-1" style="color:rgb(0, 0, 0)">
                            {{-- <div class="col-3 gap-x-1"> --}}
                            <textarea name="description_3" rows="10" cols="22" class="note-body"
                                placeholder="Enter your description_3 message here">{{ $portfolio->description_3 }}</textarea>
                        </div>
                        <div class="col-1 gap-x-1" style="color:rgb(63, 200, 79)">
                            {{-- <div class="col-0 gap-x-1"> --}}
                            <textarea name="description_3" rows="2" cols="2" class="note-body"
                                placeholder="Enter your description_3 message here">{{ $portfolio->Yes_No }}</textarea>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container gap-8 py-1"></div>
            <div class="note-buttons">
                <a href="{{ route('portfolio.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
            {{-- @endforeach --}}
        </form>
    @endforeach
    {{-- </div> --}}


</x-app-layout>
