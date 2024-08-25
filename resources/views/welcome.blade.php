@extends('layouts.layout')
@section('title', 'Portfolio Gerov Boban')
@section('content')
    <div class="w3-content" style="max-width:1400px">
        <!-- Grid -->
        <div class="w3-row">
            <!-- Page entries -->
            <div class="w3-col l8 s12">
                <!-- Page entry -->
                <div class="w3-card-4 w3-margin w3-white">
                    <img src="/images_container/container_1.jpg" alt="Laravel" style="width:100%">
                    <div class="w3-container">
                        <h3><b>Gerov Boban</b></h3>
                        <h5>Dimitrovgrad, R. Serbia <span class="w3-opacity">
                            </span>
                        </h5>
                    </div>
                    <div class="w3-container">
                        <p>
                            @foreach ($txtwelcomes->where('Yes_No', 'DA') as $txtwelcome)
                                <ul> {{ \Carbon\Carbon::Parse($txtwelcome->created_at)->isoFormat('Do MMMM YYYY') }}
                                </ul>
                                <div class="col-9">
                                    {{-- *** Da vrati iz MySql nlbr - ENTER *** --}}
                                    {!! nl2br(e($txtwelcome->txt_1)) !!}
                                    {{-- {{ $txtwelcome->txt_1 }} --}}
                                </div>
                                <ul></ul>
                                <div class="col-9">
                                    {{-- *** Da vrati iz MySql nlbr - ENTER *** --}}
                                    {!! nl2br(e($txtwelcome->txt_2)) !!}
                                    {{-- {{ $txtwelcome->txt_2 }} --}}
                                </div>
                            @endforeach
                        </p>
                        <div class="w3-row">
                            <div class="w3-col m8 s12">
                                <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE
                                            »</b></button></p>
                            </div>
                            <div class="w3-col m4 w3-hide-small">
                                <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span
                                            class="w3-tag">0</span></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <!-- Page entry -->
                <div class="w3-card-4 w3-margin w3-white">
                    <img src="/images_container/container_2.jpg" alt="WordPress" style="width:100%">
                    <div class="w3-container">
                        <h3><b>LARAVEL and WORDPRESS</b></h3>
                        <h5>You can register or log in using the given user, <span
                                class="w3-opacity">&#8227;&#8227;&#8227;&#8227;&#8227; e-mail:
                                test@example.com &#8227;&#8227;&#8227;&#8227;&#8227; password: aaaa1111 </span></h5>
                    </div>

                    <div class="w3-container">
                        <p>
                            {{-- @foreach ($Descriptions as $Description) --}}
                            @foreach ($Portfolios->where('Yes_No', 'DA') as $Portfolio)
                                <div
                                    class="flex items-start gap-4 rounded-lg bg-white p-3 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                    <div class="row">
                                        <div class="col-1"> {{ $Portfolio->id }}
                                        </div>
                                        <div class="col-11" style="color:rgb(191, 7, 7)">
                                            {{ $Portfolio->language_1 }}
                                        </div>
                                        <div class="col-12">
                                            {{ $Portfolio->description_1 }}
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div
                                    class="flex items-start gap-4 rounded-lg bg-white p-3 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                    <div class="row">
                                        <div class="col-1"> {{ $Portfolio->id }}
                                        </div>
                                        <div class="col-11"> {{ $Portfolio->language_2 }}
                                        </div>
                                        <div class="col-12">
                                            {{ $Portfolio->description_2 }}
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div
                                    class="flex items-start gap-4 rounded-lg bg-white p-3 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                    <div class="row">
                                        <div class="col-1"> {{ $Portfolio->id }}
                                        </div>
                                        <div class="col-11" style="color:rgb(7, 164, 68)">
                                            {{ $Portfolio->language_3 }}
                                        </div>
                                        <div class="col-12">
                                            {{ $Portfolio->description_3 }}
                                        </div>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </p>
                        <div class="w3-row">
                            <div class="w3-col m8 s12">
                                {{-- <a class="w3-button w3-padding-large w3-white w3-border" href="#"
                                    role="button"><b>UP &#8963;</b></a> --}}
                                <p><a href="#">
                                        <button class="w3-button w3-padding-large w3-white w3-border"><b>UP
                                                &#8963;</b></button>
                                    </a>
                                </p>
                            </div>
                            <div class="w3-col m4 w3-hide-small">
                                <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span
                                            class="w3-badge">2</span></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page ENTRIES -->
            </div>

            <!-- Introduction menu -->
            <div class="w3-col l4">
                <!-- About Card -->
                <div class="w3-card w3-margin w3-margin-top">

                    <img src="{{ URL::asset('/policeman/Slika_Gerov_Boban.jpg') }}" alt="Gerov Boban - slika"
                        width="100%">

                    {{-- <img src="/w3images/avatar_g.jpg" style="width:100%"> --}}
                    <div class="w3-container w3-white">
                        <h4><b>My Name</b></h4>
                        <p>is Gerov Boban. See my CV at the link below. In Bulgarian and English.</p>

                        <p>
                            <a href="documents/cv-en.pdf">
                                <button class="w3-button w3-padding-large w3-white w3-border"><b>CV - English
                                        &#709;</b></button>
                            </a>
                        </p>
                        <p>
                            <a href="documents/cv-bg.pdf">
                                <button class="w3-button w3-padding-large w3-white w3-border"><b>CV - Bulgarian
                                        &#709;</b></button>
                            </a>
                        </p>
                    </div>
                </div>
                <hr>

                <!-- Programs img -->
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4>I can work in...</h4>
                    </div>
                    <ul class="w3-ul w3-hoverable w3-white">
                        @foreach (File::glob(public_path('image') . '/*') as $path)
                            {{-- <div class="w3-padding-32"> --}}
                            <div class="w3-padding" style="height:180px">
                                <li class="w3-padding-32">
                                    {{-- <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right"
                                    style="width:50px"> --}}
                                    <img src="{{ str_replace(public_path(), '', $path) }}" alt="Gerov Boban"
                                        class="w3-left w3-margin-right" style="height:100px">
                                    {{-- <div> <img src="{{ URL::asset('/image/' . '' . $path) }}" alt="Gerov Boban - slika"
                                        width="100%"></div> --}}
                                    <span class="w3-large">Laravel...</span>
                                    <br><br><br>
                                    <span>WordPress</span>
                                </li>
                            </div>
                        @endforeach
                    </ul>
                </div>
                <hr>

                <!-- Labels / tags -->
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4>Tags</h4>
                    </div>
                    <div class="w3-container w3-white">
                        <p><span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">AAAAA</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">BBBBB</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">CCCC</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">DDDDD</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">EEEE</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Tra</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">La</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">La</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">En</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Den</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Dino</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Savaraka</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Tino</span>
                        </p>
                    </div>
                </div>

                <!-- END Introduction Menu -->
            </div>

            <!-- END GRID -->
        </div><br>

        <!-- END w3-content -->
    </div>
@endsection
