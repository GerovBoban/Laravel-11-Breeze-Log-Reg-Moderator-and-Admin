<x-app-layout>
    <div class="note-container py-12">
        <a href="{{ route('changeimg.create') }}" class="new-note-btn new-note-btn-portfolio">
            {{-- <a href="{{ route('chng_adm_img') }}" class="new-note-btn new-note-btn-welcome"> --}}
            <div class="button">
                Щракнете тук зададете ADMIN снимка - за началната страница<br>
                <b>Click to set ADMIN picture - for the home page</b><br>
                Klikni da postaviš ADMIN sliku - za početnu stranicu<br>
            </div>
        </a>
        <div class="notes">
            {{-- COMBINATION 1 - Ako stavim ovo ispod - daje SAMO slike iz tabele, pomoću LINK-a iz MySql --}}
            {{-- @foreach ($txtwelcomes as $txtwelcome) --}}

            {{-- COMBINATION 2 - Ako stavim ovo ispod - daje SVE slike iz FOLDERA  --}}
            @foreach (File::glob(public_path('image') . '/*') as $path)
                <div class="new-note-btn new-note-btn-portfolio">
                    <div class="flex-container">
                        <div class="img-welcome">
                            {{-- COMBINATION 1 - Ako stavim ovo ispod - daje SAMO slike iy tabele, pomoću LINK-a iz MySql --}}
                            {{-- <img src="{{ URL::asset($txtwelcome->img_lnk, 100) }}" alt="Admin - Gerov Boban"> --}}

                            {{-- COMBINATION 2 - Ako stavim ovo ispod - daje SVE slike iz FOLDERA  --}}
                            {{-- Ovo ispod radi na LOCAL ali ne i na SERVER - Moram da dodam ime FOLDERA --}}
                            <img src="{{ str_replace(public_path(), '', $path) }}" alt="Admin - Gerov Boban">
                            {{-- <img src="{{ str_replace(public_path(), '/image/', $path) }}" alt="Admin - Gerov Boban"> --}}
                        </div>
                        <div class="new-note-btn new-note-btn-portfolio">


                            <form action="{{ url('chng_adm_img') }}">
                                @csrf
                                @method('PUT')
                                {{-- <label for="html"><b> Biraj sliku</b> </label> --}}
                                <p>
                                    <button class="btn-class" type="submit"><br>Щракнете, за да зададете ADMIN
                                        снимка<br><br>Click to set ADMIN picture<br><br>Klikni da postaviš ADMIN
                                        sliku<br></button>
                                </p>
                                {{-- COMBINATION 1 - Ako stavim ovo ispod - daje SAMO slike iy tabele, pomoću LINK-a iz MySql --}}
                                {{-- <input type="hidden" value="{{ Str::words($txtwelcome->img_lnk) }}" name="key"> OVO KORISTIM --}}


                                {{-- COMBINATION 2 - Ako stavim ovo ispod - daje SVE slike iz FOLDERA  --}}
                                {{-- Ovo ispod radi na LOCAL ali ne i na SERVER - Moram da dodam ime FOLDERA --}}
                                <input type="hidden" value="{{ str_replace(public_path(), '', $path) }}"
                                    name="key">
                                {{-- <input type="hidden" value="{{ str_replace(public_path(), '/image/', $path) --}}
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
