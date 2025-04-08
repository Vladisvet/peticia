
 @foreach ($petition as $row )
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen p-6">
        <div class="modal-content">

<!-- hlavný nadpis-->
            <div class="modal-header container">
                <div class="row">
                <h3 class="modal-title col-12" id="staticBackdropLabel">Ak máte na You Tube alebo Facebooku video, môžete ho zverejniť.<br>Môžete tiež upraviť vašu petíciu.
                    </h3>
                </div>
                <div class="card pt-2 pe-2">
                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                data-bs-placement="left" data-bs-content="Kliknutím zavriete okno">
                <button type="button" class="btn-close btn-primary fad fa-times fa-2x" data-bs-dismiss="modal" id="close"
                aria-label="Close" ></button>
                </span>
                </div>
            </div>
<!--druhy header kde su buttony-->
            <div class="modal-header container">
                <ul class="nav nav-tabs" id="myTab" role="tablist">

                  {{-- @foreach ($petition as $row ) --}}

                    @if ($row->status_peticia == 0)
                    <li class="nav-item" role="presentation">
                    <button class="btn btn-outline-secondary active me-2" id="video-tab" data-bs-toggle="tab" data-bs-target="#video" type="button" role="tab" aria-controls="video" aria-selected="true">VLOŽTE kód videa</button>
                    </li>



                    <li class="nav-item" role="presentation">
                    <button class="btn btn-outline-secondary me-2" id="motivuj-tab" data-bs-toggle="tab" data-bs-target="#motivuj" type="button" role="tab" aria-controls="motivuj" aria-selected="false">PRIDAJTE motivačný text</button>
                    </li>


{{-- @php
$petition = DB::table('petitions')
//->where('user_id',Auth::user()->id)
->select('petitions.status_peticia')
->first();
@endphp --}}
                    <li class="nav-item" role="presentation">
                     <button class="btn btn-outline-secondary me-2" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">UPRAVTE petíciu</button>
                    </li>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="btn btn-outline-secondary me-2" id="foto-tab" data-bs-toggle="tab" data-bs-target="#foto" type="button" role="tab" aria-controls="foto" aria-selected="false">ZMEŇTE foto</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="btn btn-outline-secondary" id="aktivuj-tab" data-bs-toggle="tab" data-bs-target="#aktivuj" type="button" role="tab" aria-controls="aktivuj" aria-selected="false">AKTIVUJTE petíciu</button>
                    </li>




                   @else
                   <li class="nav-item" role="presentation">
                    <button class="btn btn-outline-secondary active me-2" id="video-tab" data-bs-toggle="tab" data-bs-target="#video" type="button" role="tab" aria-controls="video" aria-selected="true">VLOŽTE iný kód videa</button>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-outline-secondary me-2" id="motivuj-tab" data-bs-toggle="tab" data-bs-target="#motivuj" type="button" role="tab" aria-controls="motivuj" aria-selected="false">ZMEŇTE motivačný text</button>
                     </li>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="btn btn-outline-secondary me-2" id="foto-tab" data-bs-toggle="tab" data-bs-target="#foto" type="button" role="tab" aria-controls="foto" aria-selected="false">ZMEŇTE foto</button>
                    </li>
                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"     data-bs-placement="bottom" data-bs-content="Petíciu ste úspešne aktivovali. Viac jej text už nemôžete upravovať. Aktivoval sa vám petičný formulár na vašej podstránke. Môžete meniť video, fotku a motivačný text">
                    <li class="nav-item" role="presentation">
                    <button class="btn btn-outline-secondary" id="aktivuj-tab" data-bs-toggle="tab" data-bs-target="#aktivuj" type="button" role="tab" aria-controls="aktivuj" aria-selected="false" disabled>Petícia je AKTIVOVANÁ </button>
                    </li>
                    </span>

                   @endif
                 {{-- @endforeach --}}
                </ul>
            </div>


<div class="modal-body container">
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="video" role="tabpanel" aria-labelledby="video-tab">
      <section class="pb-5">


            {{-- @foreach ($petition as $row ) --}}
        <form class="forms-sample" action="{{ route('update.petition', $row->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf



                        <div class="form-group col-md-12">
                            <label class=" pt-1" id>

                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-placement="right" data-bs-trigger="hover focus"
                            data-bs-content="Video na vašej stránke je veľmi dôležité pre získavanie priaznivcov petície, ale aj priaznivcov pre petičný subjekt. Video silno ovplyvňuje, pretože prináša reč a živý obraz. Akékoľvek video natočené vaším mobilom je lepšie ako nič.">
                            <h4>TU vložte kód na zdielanie vášho videa z YOUTUBE alebo FACEBOOK.
                            <a type="" class="bi bi-exclamation-square" disabled>
                            </a>
                            </h4>
                            </span>
                            <h5>Ako na to je uvedené nižšie.</h5>
                          </label>
                            <textarea class="form-control" rows="5" name="embed_code" id=""
                            placeholder="<iframe ....       ></iframe>">{!! $row->embed_code !!}</textarea>
                        </div>

                {{-- @foreach ($petition as $row) --}}
                        <div class="row">
                        <div class="col-8 mt-4 mb-0">
                        @if ($row->embed_code == null)

                        <div class="">

                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                            data-bs-placement="right" data-bs-content="Video AKTIVUJETE tak, že najskôr vložíte podľa návodu nižšie celý kód/iframe do políčka a následne kliknete na tlačítko.">
                                <button class="btn btn-outline-info"  type="checkbox" for="embed_code">
                                    Vaše video NIE je aktívne - vložte kód videa a kliknutím ho aktivujete
                                </button>
                            </span>
                            <input class="invisible" type="checkbox" name="embed_code" value="{{ $row->embed_code}}" id="embed_code">
                            </div>


                        @else
                        <div class="mb-4">

                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="right" data-bs-content="Video DEAKTIVUJETE tak, že najskôr vymažete celý kód/iframe z vyššieho políčka (pole ostane prázdne) a následne kliknete na tlačítko. Ak chcete publikovať nové video, musíte vložiť nový kód/iframe namiesto starého a kliknutím tlačítka aktivovať.">
                                <button class="btn btn-outline-secondary"  type="checkbox" for="embed_code">
                                    Vaše video je AKTÍVNE - deaktivujte vymazaním kódu videa a kliknutím
                                </button>

                             </span>
                             <input class="invisible" type="checkbox" name="embed_code" value="{{ $row->embed_code}}" id="embed_code" >
                         </div>
                        @endif
                        </div>
                        </div>


                {{-- @endforeach --}}


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
            {{-- </form> --}}
        </section>
    </div>




<!-- motivacny text -->
    <div class="tab-pane fade show" id="motivuj" role="tabpanel" aria-labelledby="motivuj-tab">
        <section class="pb-5 ">


              {{-- <form class="forms-sample" action="{{ route('update.petition', $row->id) }}" method="POST"
                  enctype="multipart/form-data">
                  @csrf --}}

                          <div class="form-group col-md-12">
                              <label class=" pt-1" id>

                              <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                              data-bs-content="Motivačný text slúži na každodennú komunikáciu so signatármi a návštevníkmi vašej petičnej stránky. Nezabudnite vložiť linky na webové stránky, ktoré chcete, aby váš podporovateľ navštívil. Text môžete meniť a upravovať bez obmedzenia.">
                              <h4>TU vložte váš motivačný text.
                              <a type="" class="bi bi-exclamation-square" disabled>
                              </a>
                              </h4>
                              </span>
                              <h5></h5>
                            </label>
                              <textarea class="form-control" rows="5" name="mot_text" id="summernote_mot_text"
                              placeholder="">{!! $row->mot_text !!}</textarea>
                          </div>

                  {{-- @foreach ($petition as $row) --}}
                          <div class="row">
                          <div class="col-8 mt-4 mb-0">
                          @if ($row->mot_text == null)

                          <div class="">

                              <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                              data-bs-placement="right" data-bs-content="Text AKTIVUJETE tak, že najskôr napíšete či vložíte text do políčka a následne kliknete na tlačítko.">
                                  <button class="btn btn-outline-info"  type="checkbox" for="mot_text">
                                      Váš text sa NEZOBRAZUJE - napíšte či vložte text a kliknutím ho aktivujete
                                  </button>
                              </span>
                              <input class="invisible" type="checkbox" name="mot_text" value="{{ $row->mot_text}}" id="mot_text">
                              </div>


                          @else
                          <div class="mb-4">

                              <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="right" data-bs-content="Text DEAKTIVUJETE a teda vymažete tak, že najskôr vymažete celý text z vyššieho políčka (pole ostane prázdne) a následne kliknete na tlačítko. Môžete tiež jednoducho text zmeniť, upraviť či vložiť úplne nový text či text len upraviť - urobte tak a opätovne stlačte tlačítko 'Váš text je ZVEREJNENÝ' a nový text sa objaví na vašej petičnej stránke">
                                  <button class="btn btn-outline-secondary"  type="checkbox" for="mot_text">
                                      Váš text je ZVEREJNENÝ - môžete ho vymazať či upraviť a kliknutím opätovne zverejniť.
                                  </button>

                               </span>
                               <input class="invisible" type="checkbox" name="mot_text" value="{{ $row->mot_text}}" id="mot_text" >
                           </div>
                          @endif
                          </div>
                          </div>

                   {{-- @endforeach --}}


                  <div class="row mt-3">
                      <h5>Komunikujte s návštevníkmi stránky pomocou textu, ktorý sa zverejní na vašej petičnej stránke.</h5>
                      <ul class="list-unstyled ">
                          <li class="mb-1"> <i
                                  class="fas fa-check text-info me-2"></i><strong>Vyzývajte návštevníkov</strong>&nbsp; vašej stránky, aby podpísali petíciu.</li>
                          <li class="mb-1"> <i
                                  class="fas fa-check text-info me-2"></i><strong>Uveďte</strong>&nbsp;ďalšie aktuálne dôvody prečo odpísať.</li>
                          <li class="mb-1"> <i class="fas fa-check text-info me-2"></i><strong>Nezabudnite ich vyzvať,</strong>&nbsp; aby zdielali petíciu na sociálnych sieťach.</li>
                          <li class="mb-1"> <i class="fas fa-check text-info me-2"></i><strong>Tu zverejnite</strong>&nbsp; konanie podporných akcií.
                          </li>
                          <li class="mb-1"> <i class="fas fa-check text-info me-2"></i><strong>Publikujte,
                                  </strong>&nbsp; úspechy, priateľské názory a komentujte názory odporcov petície.
                          </li>
                          <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-placement="right" data-bs-trigger="hover focus"
                            data-bs-content="Na vytvorenie linku použite tlačítko editora alebo jednoducho napíšte www.vasastranka.sk a stlačte enter.">
                            <li class="mb-1"> <i class="fas fa-check text-info me-2"></i><strong>Nezabudnite vložiť linky</strong>&nbsp; na webové stránky, ktoré chcete, aby váš podporovateľ navštívil.
                            <a type="" class="bi bi-question-square" disabled>
                            </a>
                            </span>

                      </ul>
                  </div>
      </section>
    </div>





<!-- úprava peticie -->
    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">

        {{-- @foreach ($petition  as $row ) --}}

       <section>
            <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                <h4 id="" class="pt-1 pb-2">TU upravte vašu petíciu.</h4>
            </div>

                    <div class="form-group col-10 mt-1">
                        <hr style="height:1px; width:100%; border-width:0; color:rgb(206, 206, 206); background-color:" >
                        <label for="exampleInputName1">Upravte NÁZOV vašej petície - keď sa zobrazí, bude
                            mať štýl titulku
                        </label>
                        <input type="text" class="form-control" id="exampleInputName1" name="title"  value="{{ $row->title}}"
                            placeholder="">
                    </div>

                    <div class="form-group col-10 mt-1 mb-2">
                        <label for="exampleInputName1">Organizátor petície</label>
                        <input type="text" class="form-control" id="exampleInputName2" name="predseda_name"
                            placeholder="" value="{{ $row->predseda_name}}">
                    </div>
                    <div class="form-group col-10 mb-2">
                        <label for="exampleInputName1">Mená členov organizačného výboru</label>
                        <input type="text" class="form-control" id="exampleInputName3" name="vybor_names"
                            placeholder="" value="{{ $row->vybor_names}}">
                    </div>
                    <div class="form-group col-10 mb-2">
                        <label>Zmeňte názov vašej subdomény - malé písmená bez diakritiky spojte spojovníkom</label>
                        <input type="text" class="form-control"  name="subdomain" placeholder="" value="{{ $row->subdomain}}">
                    </div>
    @endforeach
                    <div class="row">
                        <div class="form-group col-10 mb-6">
                            <label for="exampleInputName4">Zmeňte kategóriu vašej petície</label>
                            <select class="form-select" name="category_id">
                                <option disabled="" selected=""> --vyberte novú kategóriu--</option>
                                @foreach($category as $cat)

                                <option value="{{ $cat->id }}"
                                    <?php
                                    if ($cat->id == $row->category_id) {
                                        echo "selected";
                                    } ?>
                                    >{{ $cat->category }}  </option>
                                @endforeach
                            </select>

                            <select class="invisible"> id="">
                                <div @foreach($category as $row)>
                                    <option> value="{{ $row->id }}">{{ $row->category}}</option>
                                    @endforeach
                                </div>
                            </select>
                        </div>
                    </div>

        </section>



        <section style="margin-top:-14.5rem">


            <hr class="mt-0">
             @foreach ($petition as $row )
                <div class="row">
                        <div class="form-group col-md-12 mb-4">
                            <label for="exampleInputName4">Upravte TEXT vašej petície - použite textový editor
                                na prispôsobenie textu. Petícia môže byť rozsiahla, najlepšie
                                je však napísať výstižný, jednostránkový text</label>
                            <textarea class="form-control" rows="25" name="details" id="summernote"
                                placeholder="Vložte text vašej petície, môže byť rozsiahla - niekoľko strán, najlepšie je však napísať výstižný, jednostránkový text - kliknite na text a začnite písať.">{!! $row->details !!}</textarea>
                        </div>

                        <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                        data-bs-placement="right" data-bs-content="Kliknutím potvrdíte a aktivujete zmeny v petičkom texte, ktoré ste urobili">
                        <div class="form-group col-md-12 col-12 mb-6">
                        <button class="btn btn-primary rounded-0 me-2 float-start col-6" type="submit">Uložiť upravenú petíciu</button>
                        </span>
                </div>
            {{-- </div> --}}
        </section>
    </div>
<!--koniec úprava peticie -->

<!-- úprava fota po aktivácii -->
<div class="tab-pane fade show" id="foto" role="tabpanel" aria-labelledby="foto-tab">
<section>
                {{-- <div data-bs-spy="scroll" data-bs-target="#navbar-example_foto" data-bs-offset="0" class="scrollspy-example" tabindex="0"></div> --}}
                    <h4 id="" class="pt-1 pb-2">TU zmeňte fotografiu vašej petície.</h4>
                
 
        <div class="row">

                <div class="form-group col-md-12">
                        <div class="mt-1">
                            <label for="formFileLg" class="form-label">Ak potrebujete vyberte iný
                                obrázok</label>
                            <input class="form-control form-control-lg btn btn-primary" id="formFileLg"
                                type="file" name="image">
                        </div>
                        <div class="mt-4">
                            <label for="formFileLg" class="form-label">Aktuálne zvolený obrázok</label><br>
                            <img src="{{ URL::to($row->image) }}" style="width: 560px; height: 400px" alt="">
                            <input class="form-control form-control-lg btn btn-primary" type="hidden"
                                name="oldimage" value="{{ $row->image }}">
                        </div>
                </div>

            <span class="d-inline-block mt-3" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                            data-bs-placement="bottom" data-bs-content="Kliknutím zmeníte foto vašej petície">
                            <div class="form-group col-md-12 col-12 mb-0">
                            <button class="btn btn-primary rounded-0 float-start col-6" type="submit">Zmeniť foto petície</button>
                            </span>
        </div>
</section>
</div>
<!--koniec úprava fota po aktivácii -->





<!-- foreach status petition - aktivacia -->
    <div class="tab-pane fade show" id="aktivuj" role="tabpanel" aria-labelledby="aktivuj-tab">
    <section>

        <div class="form-group col-md-12">
            <label class=" pt-1" id><h4>TU môžete vašu petíciu aktivovať.</h4></label>
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


        <div class="">
        <div class="col-8 mt-4 mb-0">

                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="right" data-bs-content="Vybete z možností a kliknutím na tlačítko dole petíciu aktivujte.">

            {{-- @foreach ($petition as  $row)   --}}
                @if ($row->status_peticia === null || $row->status_peticia == 0)
                <select class="form-select px-2" size="2" aria-label=""  name="status_peticia" style="appearance: none">
                    <option value="0" class="btn btn-outline-secondary mt-3  me-2" selected>Ešte NECHCEM petíciu aktivovať</option>
                    <br>
                    <option value="1" class="btn btn-outline-secondary mt-3">CHCEM petíciu aktivovať</option>
                  </select>
                </span>
                @else
                <select class="form-select px-2" size="2" aria-label=""  name="status_peticia" style="appearance: none">
                    <option value="0" class="btn btn-outline-secondary mt-3  me-2">Ešte NECHCEM petíciu aktivovať</option>
                    <br>
                    <option value="1" class="btn btn-outline-secondary mt-3" selected>CHCEM petíciu aktivovať</option>
                  </select>
                @endif
            {{-- @endforeach --}}
            
            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="right" data-bs-content="Kliknutím sa aktivuje vaša stránka, následne už NEBUDETE môcť upravovať text petície. Vyberte z možností - NECHCEM/CHCEM - a kliknutím potvrďte.">
                <button type="submit" class="btn btn-outline-secondary mt-2" >Kliknutím sa vaša petícia aktivuje</button>
            </span>


        </div>
        </div>
                        
    </section>
    </div>
            {{-- @endforeach --}}
            <!--ENDforeach status petition - aktivacia -->


</div> 
</div>
<!-- home -->
</form>
</div>
</div>
</div>
</div>
</div>
@endforeach






<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote_mot_text').summernote({
        toolbar: [
  ['style', ['style']],
  ['font', ['bold', 'underline', 'clear']],
  ['fontname', ['fontname']],
  ['color', ['color']],
  ['para', ['ul', 'ol', 'paragraph']],
  //['table', ['table']],
  //['insert', ['link', 'picture', 'video']],
  ['insert', ['link']],
  //['view', ['fullscreen', 'codeview', 'help']],
],
        height: 400
    });
</script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote').summernote({
        toolbar: [
  ['style', ['style']],
  ['font', ['bold', 'underline', 'clear']],
  ['fontname', ['fontname']],
  ['color', ['color']],
  ['para', ['ul', 'ol', 'paragraph']],
  //['table', ['table']],
  //['insert', ['link', 'picture', 'video']],
  ['insert', ['link']],
  //['view', ['fullscreen', 'codeview', 'help']],
],
        height: 400
    });
</script>


