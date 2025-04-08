<div class="modal fade" id="staticBackdropPreco" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen p-6">
        <div class="modal-content rounded-0">
            <div class="modal-header container">
                <div class="row">
                <h3 class="modal-title my-4 col-12" id="staticBackdropLabel">PREČO je naša stránka výnimočná a technologicky inovatívna?</h3>
                </div>

                <div class="card pt-2 pe-2">
                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                data-bs-placement="left" data-bs-content="Kliknutím zavriete okno">
                <button type="button" class="btn-close btn-primary fad fa-times fa-2x" data-bs-dismiss="modal" id="close"
                aria-label="Close" ></button>
                </span></div>
            </div>

            <div class="modal-header container">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    {{-- <li class="nav-item" role="presentation">
                    <button class="btn btn-outline-secondary active me-2" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">VLOŽTE kód videa</button>
                    </li> --}}

                 {{-- @foreach ($petition as $row )
                   @if ($row->status_peticia == 1)
                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"     data-bs-placement="right" data-bs-content="Petíciu ste úspešne aktivovali. Viac jej text už nemôžete upravovať. Aktivoval sa vám petičný formulár na vašej podstránke.">
                    <li class="nav-item" role="presentation">
                    <button class="btn btn-outline-secondary" id="aktivuj-tab" data-bs-toggle="tab" data-bs-target="#aktivuj" type="button" role="tab" aria-controls="aktivuj" aria-selected="false" disabled>Petícia je AKTIVOVANÁ </button>
                    </li>
                    </span>
                   @else
                    <li class="nav-item" role="presentation">
                    <button class="btn btn-outline-secondary me-2" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">UPRAVTE petíciu</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="btn btn-outline-secondary" id="aktivuj-tab" data-bs-toggle="tab" data-bs-target="#aktivuj" type="button" role="tab" aria-controls="aktivuj" aria-selected="false">AKTIVUJTE petíciu</button>
                    </li>
                   @endif
                   @endforeach --}}
                </ul>
            </div>


<div class="modal-body container">
     <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <section class="pb-11 ">


            {{--@foreach ($petition as $row )
            <form class="forms-sample" action="{{ route('update.petition', $row->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf

                        <div class="form-group col-md-12">
                            <label class=" pt-1" id><h4>TU vložte kód na zdielanie vášho videa z YOUTUBE alebo FACEBOOK .</h4>

                                <h5>Ako na to je uvedené nižšie.</h5></label>
                            <textarea class="form-control" rows="5" name="embed_code" id=""
                                placeholder="">{!! $row->embed_code !!}</textarea>
                        </div>

                 @foreach ($petition as $row)
                        <div class="row">
                        <div class="col-8 mt-4 mb-0">
                        @if ($row->embed_code == null)

                        <div class="">

                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                            data-bs-placement="right" data-bs-content="Video AKTIVUJETE tak, že najskôr vložíte podľaq návodu nižšie celý kód/iframe do políčka a následne kliknete na tlačítko.">
                                <button class="btn btn-outline-info"  type="checkbox" for="embed_code">
                                    Vaše video NIE je aktívne - vložte kód videa a kliknutím ho aktivujete
                                </button>
                            </span>
                            <input class="invisible" type="checkbox" name="embed_code" value="{{ $row->embed_code}}" id="embed_code">
                            </div>




                        @else
                        <div class="mb-4">

                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="right" data-bs-content="Video DEAKTIVUJETE tak, že najskôr vymažete celý kód/iframe z vyššieho políčka (pole ostane prázdne) a následne kliknete na tlačítko.">
                                <button class="btn btn-outline-secondary"  type="checkbox" for="embed_code">
                                    Vaše video je AKTÍVNE - deaktivujte vymazaním kódu videa a kliknutím
                                </button>
                             </span>
                             <input class="invisible" type="checkbox" name="embed_code" value="{{ $row->embed_code}}" id="embed_code" >
                         </div>
                        @endif
                        </div>
                        </div>

                    @endforeach --}}


                        <div class="row mt-3">
                            <h5>Ako získam kód na zdieľanie videa z YOUTUBE?</h5>
                            <ul class="list-unstyled ">
                                <li class="mb-1"> <i
                                        class="fas fa-check text-info me-2"></i><strong>Ak už máte video</strong>&nbsp;na vašej stránke, najskôr ho deaktivujte kliknutím na tlačítko. Ak nemáte aktívne video na vašej stránke, tento krok preskočte.</li>
                                <li class="mb-1"> <i
                                        class="fas fa-check text-info me-2"></i><strong>Otvorte</strong>&nbsp;vaše
                                    video v Youtube.</li>
                                <li class="mb-1"> <i class="fas fa-check text-info me-2"></i><strong>Priamo
                                        pod videom</strong>&nbsp;v pravej časti nájdete nápis - ZDIEĽAŤ -
                                    klilknite naň.</li>
                                <li class="mb-1"> <i class="fas fa-check text-info me-2"></i><strong>Otvorí
                                        sa</strong>&nbsp; vám pomocné okno 'Zdieľať'.
                                </li>
                                <li class="mb-1"> <i class="fas fa-check text-info me-2"></i><strong>Prvé vľavo,
                                        </strong>&nbsp; priamo pod napisom 'Zdieľať' (prvé v rade), klilknite na 'Vložiť'.
                                </li>
                                <li class="mb-1"> <i class="fas fa-check text-info me-2"></i><strong>V
                                        políčku uvidíte</strong>&nbsp; 'iframe' vášho videa (začína a končí sa slovom 'iframe') a na spodku v pravo text
                                    'KOPÍROVAŤ' - kliknite naň. Text/iframe sa vám skopíruje.</li>
                                <li class="mb-1"> <i class="fas fa-check text-info me-2"></i><strong>Vložte
                                        skopírované</strong>&nbsp;do políčka vyššie(ctrl+v).</li>
                            </ul>
                        </div>

                        <div class="row mt-3">
                            <h5>Ako získam kód na zdieľanie videa z FACEBOOKu?</h5>
                            <ul class="list-unstyled ">
                                <li class="mb-1"> <i
                                    class="fas fa-check text-info me-2"></i><strong>Ak už máte video</strong>&nbsp;na vašej stránke, najskôr ho deaktivujte kliknutím na tlačítko. Ak nemáte aktívne video na vašej stránke, tento krok preskočte.</li>
                                <li class="mb-1"> <i
                                        class="fas fa-check text-info me-2"></i><strong>Otvorte</strong>&nbsp;vaše
                                    video vo Facebooku.</li>
                                <li class="mb-1"> <i class="fas fa-check text-info me-2"></i><strong>Priamo
                                        pod videom</strong>&nbsp;v pravej časti tretie z ľava nájdete anglický nápis - Share -
                                    klilknite naň.</li>
                                <li class="mb-1"> <i class="fas fa-check text-info me-2"></i><strong>Otvorí
                                        sa</strong>&nbsp; vám pomocné okno - piate z vrchu, druhé zo spodu je angllický nápis - Embed - kliknite naň.
                                </li>
                                <li class="mb-1"> <i class="fas fa-check text-info me-2"></i><strong>Zobrazí sa
                                        </strong>&nbsp; pomocné okienko s anglickým nadpisom - Embed Video.
                                </li>
                                <li class="mb-1"> <i class="fas fa-check text-info me-2"></i><strong>Kliknite na modré tlačítko</strong>&nbsp; s anglickým nadpišňsom - Copy Code. Tým skopírujete tzv. 'ifame' kód.</li>
                                <li class="mb-1"> <i class="fas fa-check text-info me-2"></i><strong>Vložte
                                        skopírované</strong>&nbsp;do políčka vyššie(ctrl+v).</li>
                            </ul>
                        </div>
        </div>


<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

        <section>
                <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                    <h4 id="" class="pt-3 pb-2">TU upravte vašu petíciu.</h4>
                </div>



                        <div class="form-group col-10 mt-1">
                            <hr style="height:1px; width:100%; border-width:0; color:rgb(206, 206, 206); background-color:" >
                            <label for="exampleInputName1">Upravte NÁZOV vašej petície - keď sa zobrazí, bude
                                mať štýl titulku
                            </label>
                            <input type="text" class="form-control" id="exampleInputName1" name="title"  value=""
                                placeholder="">
                        </div>

                        <div class="form-group col-10 mt-1 mb-2">
                            <label for="exampleInputName1">Organizátor petície</label>
                            <input type="text" class="form-control" id="exampleInputName2" name="predseda_name"
                                placeholder="" value="">
                        </div>
                        <div class="form-group col-10 mb-2">
                            <label for="exampleInputName1">Mená členov organizačného výboru</label>
                            <input type="text" class="form-control" id="exampleInputName3" name="vybor_names"
                                placeholder="" value="">
                        </div>
                        <div class="form-group col-10 mb-2">
                            <label>Zmeňte názov vašej subdomény - malé písmená bez diakritiky spojte spojovníkom</label>
                            <input type="text" class="form-control"  name="subdomain" placeholder="" value="">
                        </div>

                        <div class="row">
                            <div class="form-group col-10 mb-6">
                                <label for="exampleInputName4">Zmeňte kategóriu vašej petície</label>
                                <select class="form-select" name="category_id">
                                    <option disabled="" selected=""> --vyberte novú kategóriu--</option>
                                    {{-- @foreach($category as $cat)

                                    <option value="{{ $cat->id }}"
                                        <?php
                                        if ($cat->id == $row->category_id) {
                                            echo "selected";
                                        } ?>
                                        >{{ $cat->category }}  </option>
                                    @endforeach --}}
                                </select>

                                <select class="invisible"> id="">
                                    {{-- <div @foreach($category as $row)>
                                        <option> value="{{ $row->id }}">{{ $row->category}}</option>
                                        @endforeach --}}
                                    </div>
                                </select>
                            </div>
                        </div>

                            <!-- end of .container-->

        </section>

                <!-- <section> close ============================-->
                <!-- ============================================-->

                <!-- ============================================-->
                <!-- <section> begin ============================-->
        <section style="margin-top:-11.5rem">

            <div class="container">
                <div class="row">

                    {{-- @foreach ($petition as $row )

                        <div class="col-6">
                                <div class="mt-4">
                                    <label for="formFileLg" class="form-label">Ak potrebujete vyberte iný
                                        obrázok</label>
                                    <input class="form-control form-control-lg btn btn-primary" id="formFileLg"
                                        type="file" name="image">
                                </div>
                                <div class="mt-4">
                                    <label for="formFileLg" class="form-label">Aktuálne zvolený obrázok</label><br>
                                    <img src="{{ URL::to($row->image) }}" style="width: 280px; height: 200px" alt="">
                                    <input class="form-control form-control-lg btn btn-primary" type="hidden"
                                        name="oldimage" value="{{ $row->image }}">
                                </div>
                        </div>
                    @endforeach --}}
                </div>
            </div>
                            <hr class="mt-2">

                            <h1 class="my-4"></h1>
                <div class="container">
                    <div class="row">
                        <div class="form-group col-md-12 mb-4">
                            <label for="exampleInputName4">Upravte TEXT vašej petície - použite textový editor
                                na prispôsobenie textu. Petícia môže byť rozsiahla - niekoľko strán, najlepšie
                                je však napísať výstižný, jednostránkový text</label>
                            <textarea class="form-control" rows="25" name="details" id="summernote1"
                                placeholder="Vložte text vašej petície, môže byť rozsiahla - niekoľko strán, najlepšie je však napísať výstižný, jednostránkový text - kliknite na text a začnite písať."></textarea>
                        </div>

                        <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                        data-bs-placement="right" data-bs-content="Kliknutím potvrdíte a aktivujete zmeny v petičkom texte, ktoré ste urobili">
                        <div class="form-group col-md-12 col-12 mb-6">
                        <button class="btn btn-primary rounded-0 me-2 float-start col-6" type="submit">Uložiť upravenú petíciu</button>
                        </span>
                        </div>
                </div>
        </section>
</div>



<div class="tab-pane fade show" id="aktivuj" role="tabpanel" aria-labelledby="aktivuj-tab">
    <section>
        <div class="form-group col-md-12">
            <label class=" pt-2" id><h4>TU môžete vašu petíciu aktivovať.</h4></label>
            <ul class="list-unstyled ">
                <li class="mb-1"> <i
                        class="fas fa-check text-info me-2"></i><strong>Petícia bude plnohodnotná,</strong>&nbsp;keď ju aktivujete. Bez aktivácie sa na vašej stránke nebude zobrazovať podpisový formulár, nebudete môcť zbierať podpisy.</li>
                <li class="mb-1"> <i
                        class="fas fa-check text-info me-2"></i><strong>Prekontrolujte si text petície,</strong>&nbsp;po aktivovaní ho už nebudete môcť meniť - z tohto okienka zmizne možnosť UPRAVTE petíciu.</li>
                {{-- <li class="mb-1"> <i class="fas fa-check text-info me-2"></i><strong>Priamo
                        pod videom</strong>&nbsp;v pravej časti nájdete nápis - ZDIEĽAŤ -
                    klilknite naň.</li> --}}
            </ul>
        </div>

        <div class="row">
        <div class="col-8 mt-4 mb-0">
            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="right" data-bs-content="Kliknutím sa aktivuje vaša stránka, následne už nebudete môcť upravovať text petície.">
                <button class="btn btn-outline-secondary" name="status_peticia" type="" for="status_peticia">
                    Kliknutím sa vaša petícia aktivuje
                </button>
             </span>
             <input class="invisible" type="" name="status_peticia" value="1" id="status_peticia" >
        </div>
        </div>
    </section>
</div>















            {{-- <div class="modal-footer container">
                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                    data-bs-placement="top" data-bs-content="Skôr ako toto okno zavriete, je potrebné zmeny uložiť">
                    <button type="button" class="btn btn-secondary  float-start" data-bs-dismiss="modal">Zavrieť</button>
                </span>
            </div> --}}



            {{-- <div class="modal-footer">

                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                        data-bs-placement="top" data-bs-content="Kliknutím potvrdíte a aktivujete zmeny v petičkom texte, ktoré ste urobili">
                <button class="btn btn-primary" type="submit">Uložiť upravenú petíciu</button>
                </span> --}}


            </div>
        </div>   <!-- home -->
        </form>
{{-- @endforeach --}}
        </div>
    </div>
</div>





