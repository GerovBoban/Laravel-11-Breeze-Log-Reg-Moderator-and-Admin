<x-app-layout>
    <div class="note-container py-12">
        <a href="{{ route('changeimg.create') }}" class="new-note-btn new-note-btn-welcome">
            <div class="button">
                Щракнете тук и въведете данни - биография - за началната страница<br>
                <b>Click here and enter details - biography - for the home page</b><br>
                Kliknite ovde i unesite podatke - biografiju - za početnu stranicu<br>

            </div>
        </a>
        <div class="notes">
            <div class="new-note-btn new-note-btn-portfolio">

                @foreach ($txtwelcomes as $txtwelcome)
                    <div class="note-portfolio">
                        <div class="flex-container">
                            <div class="note-portfolio">
                                <img src="{{ URL::asset($txtwelcome->img_lnk) }}" alt="Admin - Gerov Boban">
                            </div>
                        </div>
                        <div class="notes">
                            <div class="note-portfolio">
                                {{-- <div class="col-9"> --}}
                                {{ Str::words($txtwelcome->img_lnk) }}
                                {{-- </div> --}}
                            </div>
                        </div>
                        <div class="button button5">
                            <form action="{{ route('changeimg.index') }}" method="POST">
                                @csrf
                                <label for="html"><b> Biraj sliku</b> </label>
                                <input type="radio" name="image" value="On"> On
                                <input type="radio" name="image" value="Off"> Off
                        </div>
                        <br><button type="submit" class="button">Send</button>
                    </div>
                @endforeach

            </div>
        </div>

        <div class="notes">
            @foreach ($txtwelcomes as $txtwelcome)
                <div class="new-note-btn new-note-btn-portfolio">
                    <div class="note-portfolio">
                        <div class="flex-container">
                            <div class="img-welcome">
                                <img src="{{ URL::asset($txtwelcome->img_lnk, 100) }}" alt="Admin - Gerov Boban">
                            </div>
                            {{-- {{ Str::words($txtwelcome->img_lnk, 100) }} --}}
                        </div>
                        <div class="new-note-btn new-note-btn-portfolio">
                            <label for="exampleInputEmail1" class="note-body">Ovaj tekst trenutno ne koristim</label>
                            <div class="note-portfolio">
                                <div class="note-body-portfolio">
                                    {{ Str::words($txtwelcome->img_name, 100) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="new-note-btn new-note-btn-portfolio">
                        <label for="exampleInputEmail1" class="note-body">Ovo je txt broj 1</label>
                        <div class="note-portfolio">
                            <div class="note-body-portfolio">
                                {{ Str::words($txtwelcome->txt_1, 100) }}
                            </div>
                        </div>

                        <label for="exampleInputEmail1" class="note-body">Ovo je txt broj 2</label>
                        <div class="note-portfolio">
                            <div class="note-body-portfolio">
                                {{ Str::words($txtwelcome->txt_2, 100) }}
                            </div>
                        </div>
                        <label for="exampleInputEmail1" class="note-body">Ovo je txt broj 3 i trenutno ga NE
                            KORISTIM</label>
                        <div class="note-portfolio">
                            <div class="note-body-portfolio">
                                {{ Str::words($txtwelcome->txt_3, 100) }}
                            </div>
                        </div>

                    </div>
                    <div class="note-buttons">
                        <a href="{{ route('changeimg.edit', $txtwelcome) }}" class="note-edit-button">Edit</a>
                        <form action="{{ route('changeimg.destroy', $txtwelcome) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="note-delete-button">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="p-6">
        {{-- {{ $portfolios->links() }} --}}
    </div>
</x-app-layout>
