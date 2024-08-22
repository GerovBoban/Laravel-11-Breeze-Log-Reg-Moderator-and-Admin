<x-app-layout>
    <div class="note-container single-note">
        <h1 class="text-3xl py-4">Edit your messages for Welcome page</h1>
        <form action="{{ route('changeimg.update', $txtwelcome) }}" method="POST" class="note">
            @csrf
            @method('PUT')
            {{-- <textarea name="note" rows="10" class="note-body" placeholder="Enter your portfolio here">{{ $portfolio->portfolio }}</textarea> --}}


            {{-- @foreach ($portfolios as $portfolio) --}}
            <div class="button button5">
                <label for="exampleInputEmail1" class="note-body">Ovde je slika</label>
                {{-- <textarea name="img_lnk" rows="5" class="button button5C" placeholder="Enter your language_1 message here">{{ $txtwelcome->img_lnk }}</textarea> --}}
                <div> {{ Str::words($txtwelcome->img_lnk) }}</div>
                <div class="flex-container">

                    <div class="img-welcome">
                        <img src="{{ URL::asset($txtwelcome->img_lnk, 100) }}" alt="Admin - Gerov Boban">
                    </div>
                    {{-- {{ Str::words($txtwelcome->img_lnk, 100) }} --}}
                </div>



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
            {{-- <div class="button button5">
                    <textarea name="description_3" rows="10" class="note-body" placeholder="Enter your description_3 message here">{{ $txtwelcome->description_3 }}</textarea>
                </div> --}}



            <div class="note-buttons">
                <a href="{{ route('changeimg.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
            {{-- @endforeach --}}
        </form>
    </div>
</x-app-layout>
