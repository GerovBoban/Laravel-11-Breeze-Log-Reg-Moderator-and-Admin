<x-app-layout>
    {{-- <div class="note-container single-note"> --}}
    <div class="note-container single-note">
        <div class="button button5C">
            Postavite drugu sliku na naslovnu stranu
        </div>
        <div class="note-container A_single-note">
            <div class="button button5">
                <form action="{{ route('changeimg.store') }}" method="POST" class="note" enctype="multipart/form-data">
                    {{-- <form method="POST" enctype="multipart/form-data" id="txtwelcome.store"
                        action="{{ url('txtwelcome.store') }}"> --}}
                    @csrf

                    <div class="button button5A">
                        <label for="exampleInputEmail1" class="note-body">Kliknite Browse za upload slike - Click
                            Browse to upload an image</label>
                        <input type="file" name="img_lnk" class="button button5A"
                            placeholder="Image welcome page - Slika naslovna" />
                    </div>
                    {{-- <div class="button button5A">
                        <label for="exampleInputEmail1" class="button button5B">Naziv slike - NE koristim</label>
                        <textarea name="img_name" rows="2" class="button button5C" placeholder="Naziv slike"></textarea>
                    </div>
                    <div class="button button5A">
                        <label for="exampleInputEmail1" class="note-body">Tekst broj 1</label>
                        <textarea name="txt_1" rows="5" class="button button5C" placeholder="Text 1 here"></textarea>
                    </div>
                    <div class="button button5A">
                        <label for="exampleInputEmail1" class="note-body">Tekst broj 2</label>
                        <textarea name="txt_2" rows="5" class="button button5C" placeholder="Text 2 here"></textarea>
                    </div>
                    <div class="button button5A">
                        <label for="exampleInputEmail1" class="note-body">Tekst broj 3</label>
                        <textarea name="txt_3" rows="5" class="button button5C" placeholder="Text 3 here"></textarea>
                    </div> --}}
                    <div class="note-buttons">
                        <a href="{{ route('superadmin') }}" class="note-cancel-button">Cancel</a>
                        <button type="submit" class="note-submit-button">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
