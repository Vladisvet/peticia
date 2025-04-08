<div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen p-6">
        <div class="modal-content">
            <div class="modal-header container">
                <h3 class="modal-title" id="staticBackdropLabel">Upravte vašu petíciu a uložte ju. Ak máte na You Tube video, môžete ho zdieľať</h3>
            </div>
            <div class="modal-body">
                <section class="pb-11 pt-7">

                    @foreach ($petition as $row )
                    <form class="forms-sample" action="{{ route('update.petition', $row->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div class="row">

                                <div class="form-group col-md-12 mb-4">
                                    <label>TU vložte kód na zdielanie vášho videa z youtube.</label>
                                    <textarea class="form-control" rows="5" name="embed_code" id=""
                                        placeholder="">{{ strip_tags($row->embed_code) }}</textarea>
                                </div>


                                <div class="form-group col-10 mb-6">
                                    <label for="exampleInputName1">TU upravte NÁZOV vašej petície - keď sa zobrazí, bude
                                        mať štýl titulku</label>
                                    <input disabled type="text" class="form-control" id="exampleInputName1" name="title"  value="{{ $row->title}}">
                                </div>

                                <div class="form-group col-10 mb-2">
                                    <label for="exampleInputName1">Organizátor petície</label>
                                    <input type="text" class="form-control" id="exampleInputName2" name="predseda_name"
                                        placeholder="" value="{{ $row->predseda_name}}">
                                </div>
                                <div class="form-group col-10 mb-2">
                                    <label for="exampleInputName1">Mená členov organizačného výboru</label>
                                    <input type="text" class="form-control" id="exampleInputName3" name="vybor_names"
                                        placeholder="" value="{{ $row->vybor_names}}">
                                </div>
                                <div class="form-group col-10 mb-6">
                                    <label>Zmeňte názov vašej subdomény - malé písmená bez diakritiky spojte spojovníkom</label>
                                    <input type="text" class="form-control"  name="subdomain" placeholder="" value="{{ $row->subdomain}}">
                                </div>

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

                                    {{-- <option disabled="" selected=""
                                    @foreach($category as $row)
                                    value="{{ $row->id }}">{{ $row->category }}
                                        --aktuálne vybraná kategória--</option>
                                    @endforeach

                                    @foreach($category as $row)
                                    <option value="{{ $row->id }}">{{ $row->category}}</option>
                                    @endforeach --}}


                                <select class="invisible"> name="" id="">
                                    <div @foreach($category as $row)>
                                        <option> value="{{ $row->id }}">{{ $row->category}}</option>
                                        @endforeach
                                    </div>
                                </select>
                            </div>

                        </div>
                            </div>
                            <!-- end of .container-->

                </section>
                <!-- <section> close ============================-->
                <!-- ============================================-->

                <!-- ============================================-->
                <!-- <section> begin ============================-->
                <section style="margin-top:-21.5rem">

                    <div class="container">
                        <div class="row">


                                @foreach ($petition as $row )

                                <div class="col-md-8">
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
                                    @endforeach
                            </div>
                            <hr class="mt-2">

                            <h1 class="my-4"></h1>

                            <div class="row">
                                <div class="form-group col-md-12 mb-4">
                                    <label for="exampleInputName4">TU upravte TEXT vašej petície - použite textový editor
                                        na prispôsobenie textu. Petícia môže byť rozsiahla - niekoľko strán, najlepšie
                                        je však napísať výstižný, jednostránkový text</label>
                                    <textarea class="form-control" rows="25" name="details" id="summernote1"
                                        placeholder="Vložte text vašej petície, môže byť rozsiahla - niekoľko strán, najlepšie je však napísať výstižný, jednostránkový text - kliknite na text a začnite písať.">{{ strip_tags($row->details) }}</textarea>
                                </div>

                            </div>
                </section>
            </div>
            <div class="modal-footer container">
                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                    data-bs-placement="left" data-bs-content="Skôr ako toto okno zavriete, je potrebné petíciu uložiť">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zavrieť</button>
                </span>
                <button class="btn btn-primary rounded-0 me-2" type="submit">Uložiť petíciu</button>

            </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
