<x-app-layout>
    <div class="note-container single-note">
        <div class="button button5C">
            Create new messages for Welcome page
        </div>
        <div class="note-container A_single-note">
            <div class="button button5">
                <form action="{{ route('portfolio.store') }}" method="POST" class="note">
                    @csrf
                    <div class="button button5">
                        <label for="exampleInputEmail1" class="note-body">Tekst 1-1</label>
                        <textarea name="language_1" rows="5" class="button button5C" placeholder="Enter your language_1 message here"></textarea>
                    </div>
                    <div class="button button5">
                        <label for="exampleInputEmail1" class="note-body">Tekst 1-2</label>
                        <textarea name="description_1" rows="5" class="button button5C"
                            placeholder="Enter your description_1 message here"></textarea>
                    </div>
                    <div class="button button5">
                        <label for="exampleInputEmail1" class="note-body">Tekst 2-1</label>
                        <textarea name="language_2" rows="5" class="button button5C" placeholder="Enter your language_2 message here"></textarea>
                    </div>
                    <div class="button button5">
                        <label for="exampleInputEmail1" class="note-body">Tekst 2-2</label>
                        <textarea name="description_2" rows="5" class="button button5C"
                            placeholder="Enter your description_2 message here"></textarea>
                    </div>
                    <div class="button button5">
                        <label for="exampleInputEmail1" class="note-body">Tekst 3-1</label>
                        <textarea name="language_3" rows="5" class="button button5C" placeholder="Enter your language_3 message here"></textarea>
                    </div>
                    <div class="button button5">
                        <label for="exampleInputEmail1" class="note-body">Tekst 3-2</label>
                        <textarea name="description_3" rows="5" class="button button5C"
                            placeholder="Enter your description_3 message here"></textarea>
                    </div>
                    <div class="note-buttons">
                        <a href="{{ route('portfolio.index') }}" class="note-cancel-button">Cancel</a>
                        <button class="note-submit-button">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
