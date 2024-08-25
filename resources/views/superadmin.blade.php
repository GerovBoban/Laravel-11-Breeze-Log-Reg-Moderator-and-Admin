<x-app-layout>
    <div class="new-note-btn new-note-btn-super-admin">
        <h1>
            Ovo je SuperAdmin C-panel
        </h1>
    </div>
    <div class="w3-col l8 s12">
        <div class="flex-container">

            <div class="button button5C">
                <div class="button button5C"> <img src="{{ URL::asset('/policeman/Slika_Gerov_Boban.jpg') }}"
                        alt="Gerov Boban - slika" width="255">
                </div>
            </div>
            <div class="new-note-btn new-note-btn-super-admin">
                @foreach ($txtwelcomes->where('Yes_No', 'DA') as $txtwelcome)
                    {{-- *** Da vrati iz MySql nlbr - ENTER *** --}}
                    {!! nl2br(e($txtwelcome->txt_1)) !!}
                    {{-- {{ $txtwelcome->txt_1 }} --}}

            </div>
            <div class="new-note-btn new-note-btn-super-admin">
                {{-- *** Da vrati iz MySql nlbr - ENTER *** --}}
                {!! nl2br(e($txtwelcome->txt_2)) !!}
                {{-- {{ $txtwelcome->txt_2 }} --}}
                @endforeach
            </div>
        </div>
    </div>
    <div class="new-note-btn new-note-btn-super-admin">
        <div>
            <a href="txtwelcome">
                <div class="button button4">
                    Izmeni <b>BIOGRAFIJU</b> na početnoj
                </div>
            </a>
            <a href="portfolio">
                <div class="button button4">
                    Izmeni <b>TEKST</b> na početnoj
                </div>
            </a>
            <a href="chng_adm_img">
                <div class="button button4">
                    Promeni <b>ADMIN SLIKU</b> na početnoj
                </div>
            </a>
        </div>
        <a href="fakture">
            <div class="button button4">
                Novo - Faktura
            </div>
        </a>
        <a href="fakture">
            <div class="button button4">
                Novo - Paking lista
            </div>
        </a>
        <a href="fakture">
            <div class="button button4">
                Novo - Normativ
            </div>
        </a>
    </div>
</x-app-layout>
