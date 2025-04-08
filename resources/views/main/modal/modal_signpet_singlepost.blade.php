<div class="modal fade" id="staticBackdrop_signpet" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-fullscreen p-6">
<div class="modal-content">
    <div class="modal-header container p-4">
        <h3 class="modal-title" id="staticBackdropLabel">Podpíšte našu petíciu - "{{ $post->title }}" </h3>

        <div class="card pt-2 pe-2">
            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
            data-bs-placement="left" data-bs-content="Kliknutím zavriete okno">
            <button type="button" class="btn-close btn-primary fad fa-times fa-2x" data-bs-dismiss="modal" id="close"
            aria-label="Close" ></button>
            </span>
        </div>

    </div>
    <div class="modal-body">
        <section class="pb-7 pt-4 ">
            @php
            //DB::table('petitions')->subdomain()->first();
            $signp = DB::table('petitions')
            ->join('categories', 'petitions.category_id','categories.id')
            ->join('users', 'petitions.user_id','users.id')
            //->join('sign_petitions', 'petitions.id', 'sign_petitions.petition_id')
            ->select('petitions.*', 'categories.category', 'users.name', 'users.email', 'users.id', 'petitions.id')
            //->where('petitions.subdomain', $subdomain)
            ->first();
            //dd($signp);
            @endphp
            {{-- --}}
            <form class="forms-sample" action="{{ route('sign.petition') }}" method="post">
                @csrf
    <div class="modal-header container">
        <ul class="nav nav-pills mb-1" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="btn btn-outline-secondary active ps-4 pe-4 me-3 ms-1" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Chcem sa podpísať ako FYZICKÁ osoba</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="btn btn-outline-secondary ps-4 pe-4 ms-1" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Chcem podpísať ako PRÁVNICKÁ osoba</button>
            </li>
        </ul>
    </div>
    <div class="modal-body container">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="card p-2">
                    <div class="row">
                        <div class="form-group col-6 mb-2">
                            <label for="exampleInputName1">meno</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                name="meno" placeholder="">
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label for="exampleInputName1">priezvisko</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                name="priezvisko" placeholder="">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="form-group col-6 mb-2">
                            <label for="exampleInputName1">váš email</label>
                            <input type="email" class="form-control" id="exampleInputName1"
                                name="email" placeholder="">
                        </div>
                        <div class="invisible form-group col-6 mb-2">
                            <label for="exampleInputName1">user id</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                name="user_id" placeholder="" value="{{ $post->user_id }}">
                        </div>
                    </div>

                    <div class="row mb-3 ">
                        <div class="form-group col-6 mb-2">
                            <label for="exampleInputName1">ulica a čislo</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                name="ulica_cislo" placeholder="">
                        </div>
                        <div class="form-group col-4 mb-2">
                            <label for="exampleInputName1">obec/mesto</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                name="mesto_obec" placeholder="">
                        </div>
                        <div class="form-group col-2 mb-2">
                            <label for="exampleInputName1">PSČ</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                name="psc" placeholder="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group col-6 mb-2">
                            <label for="exampleInputName1">štátna príslušnosť</label>
                            <span class="d-inline-block" tabindex="0"
                                data-bs-toggle="popover" data-bs-trigger="hover focus"
                                data-bs-content="Ak máte inú štátnu príslušnosť ako je Slovenská republika, prepíšte ju - napr. Veľká Británia, Nemecká spolková republika, Rakúska republika atď.">
                                <a type="" class="bi bi-question-square  m-1 " disabled>
                                </a>
                            </span>
                            <input type="text" class="form-control" id="exampleInputName1"
                                name="stat" placeholder="" value="Slovenská republika">
                        </div>
                        <div class="invisible form-group col-6 mb-2">
                            <label for="exampleInputName1"></label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                name="" placeholder="">
                        </div>
                    </div>

                    <div class="row">

                        <span class="d-inline-block" tabindex="0" data-bs-toggle="popover"
                            data-bs-trigger="hover focus"
                            data-bs-content="Ak máte menej ako 16 rokov, musí poskytnúť súhlas so spracovaním vašich vyššie uvedených osobných údajov váš zákonný zástupca (nositeľ rodičovských práv a povinností). Kliknite a požiadajte zákonného zástupcu o vyplnenie údajov.">
                            <button
                                class="form-group btn btn-outline-secondary text-muted float-start col-12"
                                type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseExample" aria-expanded="false"
                                aria-controls="collapseExample">
                                Mám menej ako 16 rokov
                                <a type="" class="bi bi-question-square  m-1 " disabled>
                                </a>
                            </button>

                        </span>
                    </div>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <h5 class="pb-4">Súhlas zákonného zástupcu</h5>
                            <div class="row">
                                <div class="form-group col-6 mb-2">
                                    <label for="exampleInputName1">meno zákonného
                                        zástupcu</label>
                                    <input type="text" class="form-control"
                                        id="exampleInputName1" name="meno_zastupcu"
                                        placeholder="">
                                </div>
                                <div class="form-group col-6 mb-2">
                                    <label for="exampleInputName1">priezvisko zákonného
                                        zástupcu</label>
                                    <input type="text" class="form-control"
                                        id="exampleInputName1" name="priezvisko_zastupcu"
                                        placeholder="">
                                </div>
                            </div>

                            <label class="form-check-label fw-normal"
                                for="exampleInputName1">Ako zákonný zástupca výššie
                                menovaného prehlasujem, že som osobne vyplnil moje meno a
                                priezvisko, čím súhlasím poskytnúť vyššie uvedené osobné
                                údaje mojho zverenca na spracovanie pre potreby petície -
                                "{{ $post->title }}".</label>



                        </div>
                    </div>

                    <div class="row mt-4 col-12">
                        <div class="form-check form-check-inline col-5 ms-3">
                            <input class="form-check-input" type="checkbox"
                                id="pravidla_pouzivania" value="1" name="pravidla_pouzivania">
                            <label class="form-check-label fw-normal"
                                for="pravidla_pouzivania">Súhlasím s <a href="">Pravidlami</a>
                                stránky - peticia.org
                                <span class="d-inline-block" tabindex="0"
                                    data-bs-toggle="popover" data-bs-trigger="hover focus"
                                    data-bs-content="Zakliknutím súhlasíte s dokumentom 'Pravidlá spravovania stránky peticia.org'.">
                                    <a type="" class="bi bi-question-square  m-1 " disabled>
                                    </a>
                                </span></label>
                        </div>
                        <div class="form-check form-check-inline  col-6">
                            <input class="form-check-input" type="checkbox"
                                id="anonym" value="1" name="anonym">
                            <label class="form-check-label fw-normal"
                                for="anonym">Chcem podpísať ako anonym
                                <span class="d-inline-block" tabindex="0"
                                    data-bs-toggle="popover" data-bs-trigger="hover focus"
                                    data-bs-content="Ak zakliknete, nezverejní sa vaše meno a priezvisko v priebežne uverejňovanom zozname osôb, ktoré petíciu podpísali. Zverejní sa iba mesto/obec a dátum podpisu. Vaše meno a priezvisko sa dostane len do zoznamu, ktorý bude mať k dispozícii organizátor kampane - {{ $post->title }}.">
                                    <a type="" class="bi bi-question-square  m-1 " disabled>
                                    </a>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="row mt-0 col-12">
                        <div class="form-check form-check-inline col-5 ms-3 ">
                            <input class="form-check-input" type="checkbox"
                                id="spracovanie_udajov" value="1" name="spracovanie_udajov">
                            <label class="form-check-label fw-normal"
                                for="spracovanie_udajov">Súhlasím s <a href="">Pravidlami
                                    spracovanie osobných údajov</a>
                                <span class="d-inline-block" tabindex="0"
                                    data-bs-toggle="popover" data-bs-trigger="hover focus"
                                    data-bs-content="Zakliknutím súhlasíte s dokumentom 'Pravidlá spracovania osobných údajov stránky peticia.org'.">
                                    <a type="" class="bi bi-question-square  m-1 " disabled>
                                    </a>
                                </span>
                            </label>
                        </div>
                        <div class="form-check form-check-inline col-5 ">
                            <input class="form-check-input" type="checkbox"
                                id="email_organizatorovi" value="1" name="email_organizatorovi">
                            <label class="form-check-label fw-normal"
                                for="email_organizatorovi">Chcem dostávať od organizátorov mailom
                                informácie o kampani
                                <span class="d-inline-block" tabindex="0"
                                    data-bs-toggle="popover" data-bs-trigger="hover focus"
                                    data-bs-content="Zakliknutím súhlasíte s poskytnutím vášho mailu organizátorom petície za účelom zasielania mailov, ktoré sa dotýkajú petičnej kampane - {{ $post->title }}.">
                                    <a type="" class="bi bi-question-square  m-1 " disabled>
                                    </a>
                                </span>
                            </label>
                        </div>
                    </div>



                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="card p-2">
                    <div class="row">
                        <div class="form-group col-6 mb-2">
                            <label for="exampleInputName2">meno štatutárneho
                                zástupcu</label>
                            <input type="text" class="form-control" id="exampleInputName2"
                                name="title" placeholder="">
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label for="exampleInputName2">priezvisko štatutárneho
                                zástupcu</label>
                            <input type="text" class="form-control" id="exampleInputName2"
                                name="title" placeholder="">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="form-group col-6 mb-2">
                            <label for="exampleInputName1"> email štatutárneho
                                zástupcu</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                name="title" placeholder="">
                        </div>
                        <div class="invisible form-group col-6 mb-2">
                            <label for="exampleInputName1"></label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                name="title" placeholder="">
                        </div>
                    </div>
                    <h5>Adresa štatutárneho zástupcu</h5>
                    <div class="row mb-2">
                        <div class="form-group col-6 mb-2">
                            <label for="exampleInputName2">ulica a čislo</label>
                            <input type="text" class="form-control" id="exampleInputName2"
                                name="title" placeholder="">
                        </div>
                        <div class="form-group col-4 mb-2">
                            <label for="exampleInputName2">obec/mesto</label>
                            <input type="text" class="form-control" id="exampleInputName2"
                                name="title" placeholder="">
                        </div>
                        <div class="form-group col-2 mb-2">
                            <label for="exampleInputName2">PSČ</label>
                            <input type="text" class="form-control" id="exampleInputName2"
                                name="title" placeholder="">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="form-group col-6 mb-2">
                            <label for="exampleInputName1">štátna príslušnosť</label>
                            <span class="d-inline-block" tabindex="0"
                                data-bs-toggle="popover" data-bs-trigger="hover focus"
                                data-bs-content="Ak máte inú štátnu príslušnosť ako je Slovenská republika, prepíšte ju - napr. Veľká Británia, Nemecká spolková republika, Rakúska republika atď.">
                                <a type="" class="bi bi-question-square  m-1 " disabled>
                                </a>
                            </span>
                            <input type="text" class="form-control" id="exampleInputName1"
                                name="title" placeholder="" value="Slovenská republika">
                        </div>
                        <div class="invisible form-group col-6 mb-2">
                            <label for="exampleInputName1"></label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                name="title" placeholder="" value="Slovenská republika">
                        </div>
                    </div>
                    <h5>Názov a sídlo právnickej osoby</h5>
                    <div class="row">
                        <div class="form-group col-6 mb-0">
                            <label for="exampleInputName1">názov právnickej osoby</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                name="nazov_prav_osoba" placeholder="">
                        </div>
                        <div class="form-group col-6 mb-0">
                            <label for="exampleInputName1">sídlo právnickej osoby</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                name="sidlo_prav_osoba" placeholder="">
                        </div>
                    </div>
                    <div class="row mt-4 col-12">
                        <div class="form-check form-check-inline col-5 ms-3">
                            <input class="form-check-input" type="checkbox"
                                id="pravidla_pouzivania" value="1" name="pravidla_pouzivania">
                            <label class="form-check-label fw-normal"
                                for="pravidla_pouzivania">Súhlasím s <a href="">Pravidlami</a>
                                stránky - peticia.org
                                <span class="d-inline-block" tabindex="0"
                                    data-bs-toggle="popover" data-bs-trigger="hover focus"
                                    data-bs-content="Zakliknutím súhlasíte s dokumentom 'Pravidlá spravovania stránky peticia.org'.">
                                    <a type="" class="bi bi-question-square  m-1 " disabled>
                                    </a>
                                </span></label>
                        </div>
                        <div class="form-check form-check-inline  col-6">
                            <input class="form-check-input" type="checkbox"
                                id="anonym" value="1" name="anonym">
                            <label class="form-check-label fw-normal"
                                for="anonym">Chcem podpísať ako anonym
                                <span class="d-inline-block" tabindex="0"
                                    data-bs-toggle="popover" data-bs-trigger="hover focus"
                                    data-bs-content="Ak zakliknete, nezverejní sa vaše meno a priezvisko v priebežne uverejňovanom zozname osôb, ktoré petíciu podpísali. Zverejní sa iba mesto/obec a dátum podpisu. Vaše meno a priezvisko sa dostane len do zoznamu, ktorý bude mať k dispozícii organizátor kampane - {{ $post->title }}.">
                                    <a type="" class="bi bi-question-square  m-1 " disabled>
                                    </a>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="row mt-0 col-12">
                        <div class="form-check form-check-inline col-5 ms-3 ">
                            <input class="form-check-input" type="checkbox"
                                id="spracovanie_udajov" value="1" name="spracovanie_udajov">
                            <label class="form-check-label fw-normal"
                                for="spracovanie_udajov">Súhlasím s <a href="">Pravidlami
                                    spracovanie osobných údajov</a>
                                <span class="d-inline-block" tabindex="0"
                                    data-bs-toggle="popover" data-bs-trigger="hover focus"
                                    data-bs-content="Zakliknutím súhlasíte s dokumentom 'Pravidlá spracovania osobných údajov stránky peticia.org'.">
                                    <a type="" class="bi bi-question-square  m-1 " disabled>
                                    </a>
                                </span>
                            </label>
                        </div>
                        <div class="form-check form-check-inline col-6 ">
                            <input class="form-check-input" type="checkbox"
                                id="email_organizatorovi" value="1" name="email_organizatorovi">
                            <label class="form-check-label fw-normal"
                                for="email_organizatorovi">Chcem dostávať od organizátorov mailom
                                informácie o kampani
                                <span class="d-inline-block" tabindex="0"
                                    data-bs-toggle="popover" data-bs-trigger="hover focus"
                                    data-bs-content="Zakliknutím súhlasíte s poskytnutím vášho mailu organizátorom petície za účelom zasielania mailov, ktoré sa dotýkajú petičnej kampane - {{ $post->title }}.">
                                    <a type="" class="bi bi-question-square  m-1 " disabled>
                                    </a>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="accordion" id="accordionExample">
            {{-- <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="btn btn-outline-primary col-12" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne">
                        Chcem podpísať ako FYZICKÁ osoba
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show"
                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="card card-body pt-5 pb-3">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="form-group col-6 mb-2">
                                    <label for="exampleInputName1">meno</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        name="meno" placeholder="">
                                </div>
                                <div class="form-group col-6 mb-2">
                                    <label for="exampleInputName1">priezvisko</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        name="priezvisko" placeholder="">
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="form-group col-6 mb-2">
                                    <label for="exampleInputName1">váš email</label>
                                    <input type="email" class="form-control" id="exampleInputName1"
                                        name="email" placeholder="">
                                </div>
                                <div class="invisible form-group col-6 mb-2">
                                    <label for="exampleInputName1">user id</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        name="user_id" placeholder="" value="{{ $post->user_id }}">
                                </div>
                            </div>

                            <div class="row mb-3 ">
                                <div class="form-group col-6 mb-2">
                                    <label for="exampleInputName1">ulica a čislo</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        name="ulica_cislo" placeholder="">
                                </div>
                                <div class="form-group col-4 mb-2">
                                    <label for="exampleInputName1">obec/mesto</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        name="mesto_obec" placeholder="">
                                </div>
                                <div class="form-group col-2 mb-2">
                                    <label for="exampleInputName1">PSČ</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        name="psc" placeholder="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="form-group col-6 mb-2">
                                    <label for="exampleInputName1">štátna príslušnosť</label>
                                    <span class="d-inline-block" tabindex="0"
                                        data-bs-toggle="popover" data-bs-trigger="hover focus"
                                        data-bs-content="Ak máte inú štátnu príslušnosť ako je Slovenská republika, prepíšte ju - napr. Veľká Británia, Nemecká spolková republika, Rakúska republika atď.">
                                        <a type="" class="bi bi-question-square  m-1 " disabled>
                                        </a>
                                    </span>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        name="stat" placeholder="" value="Slovenská republika">
                                </div>
                                <div class="invisible form-group col-6 mb-2">
                                    <label for="exampleInputName1"></label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        name="" placeholder="">
                                </div>
                            </div>

                            <div class="row">

                                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover"
                                    data-bs-trigger="hover focus"
                                    data-bs-content="Ak máte menej ako 16 rokov, musí poskytnúť súhlas so spracovaním vašich vyššie uvedených osobných údajov váš zákonný zástupca (nositeľ rodičovských práv a povinností). Kliknite a požiadajte zákonného zástupcu o vyplnenie údajov.">
                                    <button
                                        class="form-group btn btn-outline-secondary text-muted float-start col-12"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        Mám menej ako 16 rokov
                                        <a type="" class="bi bi-question-square  m-1 " disabled>
                                        </a>
                                    </button>

                                </span>
                            </div>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    <div class="row">
                                        <div class="form-group col-6 mb-2">
                                            <label for="exampleInputName1">meno zákonného
                                                zástupcu</label>
                                            <input type="text" class="form-control"
                                                id="exampleInputName1" name="meno_zastupcu"
                                                placeholder="">
                                        </div>
                                        <div class="form-group col-6 mb-2">
                                            <label for="exampleInputName1">priezvisko zákonného
                                                zástupcu</label>
                                            <input type="text" class="form-control"
                                                id="exampleInputName1" name="priezvisko_zastupcu"
                                                placeholder="">
                                        </div>
                                    </div>

                                    <label class="form-check-label fw-normal"
                                        for="exampleInputName1">Ako zákonný zástupca výššie
                                        menovaného prehlasujem, že som osobne vyplnil moje meno a
                                        priezvisko, čím súhlasím poskytnúť vyššie uvedené osobné
                                        údaje mojho zverenca na spracovanie pre potreby petície -
                                        "{{ $post->title }}".</label>



                                </div>
                            </div>

                            <div class="row mt-4 col-12">
                                <div class="form-check form-check-inline col-5 ms-3">
                                    <input class="form-check-input" type="checkbox"
                                        id="pravidla_pouzivania" value="1" name="pravidla_pouzivania">
                                    <label class="form-check-label fw-normal"
                                        for="pravidla_pouzivania">Súhlasím s <a href="">Pravidlami</a>
                                        stránky - peticia.org
                                        <span class="d-inline-block" tabindex="0"
                                            data-bs-toggle="popover" data-bs-trigger="hover focus"
                                            data-bs-content="Zakliknutím súhlasíte s dokumentom 'Pravidlá spravovania stránky peticia.org'.">
                                            <a type="" class="bi bi-question-square  m-1 " disabled>
                                            </a>
                                        </span></label>
                                </div>
                                <div class="form-check form-check-inline  col-6">
                                    <input class="form-check-input" type="checkbox"
                                        id="anonym" value="1" name="anonym">
                                    <label class="form-check-label fw-normal"
                                        for="anonym">Chcem podpísať ako anonym
                                        <span class="d-inline-block" tabindex="0"
                                            data-bs-toggle="popover" data-bs-trigger="hover focus"
                                            data-bs-content="Ak zakliknete, nezverejní sa vaše meno a priezvisko v priebežne uverejňovanom zozname osôb, ktoré petíciu podpísali. Zverejní sa iba mesto/obec a dátum podpisu. Vaše meno a priezvisko sa dostane len do zoznamu, ktorý bude mať k dispozícii organizátor kampane - {{ $post->title }}.">
                                            <a type="" class="bi bi-question-square  m-1 " disabled>
                                            </a>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="row mt-0 col-12">
                                <div class="form-check form-check-inline col-5 ms-3 ">
                                    <input class="form-check-input" type="checkbox"
                                        id="spracovanie_udajov" value="1" name="spracovanie_udajov">
                                    <label class="form-check-label fw-normal"
                                        for="spracovanie_udajov">Súhlasím s <a href="">Pravidlami
                                            spracovanie osobných údajov</a>
                                        <span class="d-inline-block" tabindex="0"
                                            data-bs-toggle="popover" data-bs-trigger="hover focus"
                                            data-bs-content="Zakliknutím súhlasíte s dokumentom 'Pravidlá spracovania osobných údajov stránky peticia.org'.">
                                            <a type="" class="bi bi-question-square  m-1 " disabled>
                                            </a>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline col-5 ">
                                    <input class="form-check-input" type="checkbox"
                                        id="email_organizatorovi" value="1" name="email_organizatorovi">
                                    <label class="form-check-label fw-normal"
                                        for="email_organizatorovi">Chcem dostávať od organizátorov mailom
                                        informácie o kampani
                                        <span class="d-inline-block" tabindex="0"
                                            data-bs-toggle="popover" data-bs-trigger="hover focus"
                                            data-bs-content="Zakliknutím súhlasíte s poskytnutím vášho mailu organizátorom petície za účelom zasielania mailov, ktoré sa dotýkajú petičnej kampane - {{ $post->title }}.">
                                            <a type="" class="bi bi-question-square  m-1 " disabled>
                                            </a>
                                        </span>
                                    </label>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="btn btn-outline-primary collapsed col-12" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                        aria-controls="collapseTwo">
                        Chcem podpísať ako PRÁVNICKÁ osoba
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse"
                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="card card-body py-5">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="form-group col-6 mb-2">
                                    <label for="exampleInputName2">meno štatutárneho
                                        zástupcu</label>
                                    <input type="text" class="form-control" id="exampleInputName2"
                                        name="title" placeholder="">
                                </div>
                                <div class="form-group col-6 mb-2">
                                    <label for="exampleInputName2">priezvisko štatutárneho
                                        zástupcu</label>
                                    <input type="text" class="form-control" id="exampleInputName2"
                                        name="title" placeholder="">
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="form-group col-6 mb-2">
                                    <label for="exampleInputName1"> email štatutárneho
                                        zástupcu</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        name="title" placeholder="">
                                </div>
                                <div class="invisible form-group col-6 mb-2">
                                    <label for="exampleInputName1"></label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        name="title" placeholder="">
                                </div>
                            </div>
                            <h5>Adresa štatutárneho zástupcu</h5>
                            <div class="row mb-2">
                                <div class="form-group col-6 mb-2">
                                    <label for="exampleInputName2">ulica a čislo</label>
                                    <input type="text" class="form-control" id="exampleInputName2"
                                        name="title" placeholder="">
                                </div>
                                <div class="form-group col-4 mb-2">
                                    <label for="exampleInputName2">obec/mesto</label>
                                    <input type="text" class="form-control" id="exampleInputName2"
                                        name="title" placeholder="">
                                </div>
                                <div class="form-group col-2 mb-2">
                                    <label for="exampleInputName2">PSČ</label>
                                    <input type="text" class="form-control" id="exampleInputName2"
                                        name="title" placeholder="">
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="form-group col-6 mb-2">
                                    <label for="exampleInputName1">štátna príslušnosť</label>
                                    <span class="d-inline-block" tabindex="0"
                                        data-bs-toggle="popover" data-bs-trigger="hover focus"
                                        data-bs-content="Ak máte inú štátnu príslušnosť ako je Slovenská republika, prepíšte ju - napr. Veľká Británia, Nemecká spolková republika, Rakúska republika atď.">
                                        <a type="" class="bi bi-question-square  m-1 " disabled>
                                        </a>
                                    </span>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        name="title" placeholder="" value="Slovenská republika">
                                </div>
                                <div class="invisible form-group col-6 mb-2">
                                    <label for="exampleInputName1"></label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        name="title" placeholder="" value="Slovenská republika">
                                </div>
                            </div>
                            <h5>Názov a sídlo právnickej osoby</h5>
                            <div class="row">
                                <div class="form-group col-6 mb-0">
                                    <label for="exampleInputName1">názov právnickej osoby</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        name="nazov_prav_osoba" placeholder="">
                                </div>
                                <div class="form-group col-6 mb-0">
                                    <label for="exampleInputName1">sídlo právnickej osoby</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        name="sidlo_prav_osoba" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

    </div>
    <!-- end of .container-->




    <div class="modal-footer container py-4 pe-5">


        <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
            data-bs-placement="left" data-bs-content="Skôr ako okno zavriete, podpíšte petíciu">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zavrieť</button>
        </span>
        <button class="btn btn-primary rounded-0 me-2" type="submit">Podpísať petíciu</button>



    </div>
    </form>
</div>
</div>
</div>
@php
//dd($post);
@endphp

