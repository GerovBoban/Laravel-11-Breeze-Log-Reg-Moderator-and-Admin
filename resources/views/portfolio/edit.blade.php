<x-app-layout>
    <div class="note-container single-note">
        <h1 class="text-3xl py-4">Edit your messages for Welcome page</h1>
        <form action="{{ route('portfolio.update', $portfolio) }}" method="POST" class="note">
            @csrf
            @method('PUT')
            <div class="button button5">
                <label for="exampleInputEmail1" class="note-body">Da tekst bude vidljiv upišite => DA ***** U suprotnom =>
                    NE</label>
                <textarea name="Yes_No" rows="1" class="button button5C" placeholder="Enter your language_1 message here">{{ $portfolio->Yes_No }}</textarea>
            </div>
            <div class="button button5">
                <label for="exampleInputEmail1" class="note-body">Тук на БЪЛГАРСКИ</label>
                <textarea name="language_1" rows="5" class="button button5C" placeholder="Enter your language_1 message here">{{ $portfolio->language_1 }}</textarea>

                <label for="exampleInputEmail1" class="note-body">На БЪЛГАРСКИ - Текст - 1</label>
                <textarea name="description_1" rows="5" class="button button5C"
                    placeholder="Enter your description_1 message here">{{ $portfolio->description_1 }}</textarea>
            </div>
            <div class="button button5">
                <label for="exampleInputEmail1" class="note-body">Here in English</label>
                <textarea name="language_2" rows="5" class="button button5C" placeholder="Enter your language_2 message here">{{ $portfolio->language_2 }}</textarea>

                <label for="exampleInputEmail1" class="note-body">In English Text - 1</label>
                <textarea name="description_2" rows="5" class="button button5C"
                    placeholder="Enter your description_2 message here">{{ $portfolio->description_2 }}</textarea>
            </div>
            <div class="button button5">
                <label for="exampleInputEmail1" class="note-body">Ovde na SRPSKOM</label>
                <textarea name="language_3" rows="5" class="button button5C" placeholder="Enter your language_3 message here">{{ $portfolio->language_3 }}</textarea>

                <label for="exampleInputEmail1" class="note-body">Na SRPSKOM - Tekst - 1</label>
                <textarea name="description_3" rows="5" class="button button5C"
                    placeholder="Enter your description_3 message here">{{ $portfolio->description_3 }}</textarea>
            </div>
            <div class="note-buttons">
                <a href="{{ route('portfolio.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
            {{-- @endforeach --}}
        </form>
    </div>
</x-app-layout>
