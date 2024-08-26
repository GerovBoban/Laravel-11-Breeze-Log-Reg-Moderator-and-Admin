<x-app-layout>
    <div class="note-container single-note">
        <h1 class="text-3xl py-4">Edit your messages for Welcome page</h1>
        <form action="{{ route('txtwelcome.update', $txtwelcome) }}" method="POST" class="note">
            @csrf
            @method('PUT')
            <div class="button button5">
                <label for="exampleInputEmail1" class="note-body">Ovde je slika</label>
                {{-- Under is link and name for image --}}
                <div> {{ Str::words($txtwelcome->img_lnk) }}</div>
                <div class="flex-container">

                    <div class="img-welcome">
                        <img src="{{ URL::asset($txtwelcome->img_lnk, 100) }}" alt="Admin - Gerov Boban">
                    </div>
                    {{-- {{ Str::words($txtwelcome->img_lnk, 100) }} --}}
                </div>
            </div>
            <div class="button button5">
                <label for="exampleInputEmail1" class="button button5B">Da tekst bude vidljiv upišite => DA ***** U
                    suprotnom => NE</label>
                <textarea name="Yes_No" rows="1" class="button button5C" placeholder="Enter DA or NO">{{ $txtwelcome->Yes_No }}</textarea>
            </div>
            <div class="button button5">
                <label for="exampleInputEmail1" class="button button5B">Ovaj tekst trenutno NE koristim</label>
                <textarea name="img_name" rows="5" class="button button5C" placeholder="Enter your description_1 message here">{{ $txtwelcome->img_name }}</textarea>
            </div>
            <div class="button button5">
                <label for="exampleInputEmail1" class="note-body">EDIT - Tekst 1</label>
                <textarea name="txt_1" rows="5" class="button button5C" placeholder="Enter your language_2 message here">{{ $txtwelcome->txt_1 }}</textarea>
            </div>
            <div class="button button5">
                <label for="exampleInputEmail1" class="note-body">EDIT - Tekst 2</label>
                <textarea name="txt_2" rows="5" class="button button5C" placeholder="Enter your description_2 message here">{{ $txtwelcome->txt_2 }}</textarea>
            </div>
            <div class="button button5">
                <label for="exampleInputEmail1" class="note-body">EDIT - Tekst 3</label>
                <textarea name="txt_3" rows="5" class="button button5C" placeholder="Enter your language_3 message here">{{ $txtwelcome->txt_3 }}</textarea>
            </div>
            <div class="note-buttons">
                <a href="{{ route('txtwelcome.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
            {{-- @endforeach --}}
        </form>
    </div>
</x-app-layout>
