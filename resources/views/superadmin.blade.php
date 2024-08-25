<x-app-layout>
    <div class="new-note-btn new-note-btn-super-admin">
        <h1>
            Ovo je SuperAdmin C-panel
        </h1>
    </div>
    <div class="w3-col l8 s12">
        <div class="flex-container">

            <div class="button button5C">
                {{-- <div class="button button5C"> <img src="{{ URL::asset('/policeman/Slika_Gerov_Boban.jpg') }}"
                        alt="Gerov Boban - slika" width="255"> --}}
            </div>
        </div>

        <div class="new-note-btn new-note-btn-super-admin">
            Gerov Boban, <br>I have Serbian and Bulgarian
            citizenship.
            <br>10/24/1970,
            Pirot,R. Serbia.

            <br>1. Balkanska 24/6 18320 Dimitrovgrad, R. Serbia
            <br>2. Obs. Stolichna, bul. Bulgaria, 49B bh. G et. 7 ap. 11, Sofia, Bulgaria.

            <br>
            1. Chemistry teacher,<br>
            2. Teacher of mathematics and computer science.

            <br>
            1. Graduated chemist in general
            chemistry.
            2. Teacher of mathematics and computer science.
        </div>
        <div class="new-note-btn new-note-btn-super-admin">
            &#9829; Faculty of Philosophy, University of Niš,
            R. Serbia, higher education, chemistry group, graduate chemist in general chemistry,
            11/9/1999<br>
            &#9829; "St. St. Cyril and Methodius", faculty of pedagogy, University of Veliko Tarnovo, R.
            Bulgaria, higher education, educational - qualification level: bachelor's degree,
            specialty:
            mathematics and informatics, professional qualificationmath and computer science
            teacher, 10/04/2005<br>
            &#9829; bracevci@yahoo.com <br>&#9829; +381 10 361 162,<br>
            &#9829; +381 60 3210 626
        </div>
    </div>
    </div>
    <div
        class="new-note-btn new-note-btn-super-admin flex items-start rounded-lg bg-white shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 ">
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
