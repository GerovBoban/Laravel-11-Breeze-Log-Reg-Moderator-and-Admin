<x-app-layout>
    <div class="note-container py-12">
        <a href="{{ route('txtwelcome.create') }}" class="new-note-btn new-note-btn-welcome">
            <div class="button">
                Щракнете тук и въведете данни - биография - за началната страница<br>
                <b>Click here and enter details - biography - for the home page</b><br>
                Kliknite ovde i unesite podatke - biografiju - za početnu stranicu<br>

            </div>
        </a>
        <div class="notes">
            @foreach ($txtwelcomes as $txtwelcome)
                <div class="new-note-btn new-note-btn-portfolio">
                    <div class="note-portfolio">
                        <div class="flex-container">
                        </div>
                        <div class="new-note-btn new-note-btn-portfolio">
                            <label for="exampleInputEmail1" class="note-body">Ime i prezime - NE KORISTIM</label>
                            <div class="note-portfolio">
                                <div class="button button5Cred">
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
                            <div class="button button5Cred">
                                {{ Str::words($txtwelcome->txt_3, 100) }}
                            </div>
                        </div>

                    </div>
                    <div class="note-buttons">
                        <a href="{{ route('txtwelcome.edit', $txtwelcome) }}" class="note-edit-button">Edit</a>
                        <form action="{{ route('txtwelcome.destroy', $txtwelcome) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="note-delete-button">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
