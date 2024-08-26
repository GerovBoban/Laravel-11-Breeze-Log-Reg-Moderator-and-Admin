<x-app-layout>
    <div class="note-container py-12">
        <a href="{{ route('portfolio.create') }}" class="new-note-btn new-note-btn-portfolio">
            <div class="button">
                Щракнете тук и въведете ново съобщение за началната страница<br>
                <b>Click here and type a new message for the home page</b><br>
                Klikni ovde i kucaj novu poruku za početnu stranicu<br>
            </div>
        </a>
        <div class="notes">
            @foreach ($portfolios as $portfolio)
                <div class="new-note-btn new-note-btn-portfolio">
                    <label for="exampleInputEmail1" class="note-body">DA - Vidi se *** NE - Ne vidi se</label>
                    <div class="note-portfolio">
                        <div class="button button5C">
                            {{ Str::words($portfolio->Yes_No, 100) }}
                        </div>
                    </div>
                </div>
                <div class="new-note-btn new-note-btn-portfolio">
                    <div class="note-portfolio">
                        <div class="note-body-portfolio">
                            {{ Str::words($portfolio->language_1, 100) }}
                        </div>
                    </div>
                    <div class="note-portfolio">
                        <div class="note-body-portfolio">
                            {{ Str::words($portfolio->description_1, 100) }}
                        </div>
                    </div>
                </div>
                <div class="new-note-btn new-note-btn-portfolio">
                    <div class="note-portfolio">
                        <div class="note-body-portfolio">
                            {{ Str::words($portfolio->language_2, 100) }}
                        </div>
                    </div>
                    <div class="note-portfolio">
                        <div class="note-body-portfolio">
                            {{ Str::words($portfolio->description_2, 100) }}
                        </div>
                    </div>
                </div>

                <div class="new-note-btn new-note-btn-portfolio">
                    <div class="note-portfolio">
                        <div class="note-body-portfolio">
                            {{ Str::words($portfolio->language_3, 100) }}
                        </div>
                    </div>
                    <div class="note-portfolio">
                        <div class="note-body-portfolio">
                            {{ Str::words($portfolio->description_3, 100) }}
                        </div>
                    </div>
                </div>
                <div class="note-buttons">
                    {{-- <a href="{{ route('portfolio.show', $portfolio) }}" class="note-edit-button">View</a> --}}
                    <a href="{{ route('portfolio.edit', $portfolio) }}" class="note-edit-button">Edit</a>
                    <form action="{{ route('portfolio.destroy', $portfolio) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="note-delete-button">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
    <div class="p-6">
        {{-- {{ $portfolios->links() }} --}}
    </div>
</x-app-layout>
