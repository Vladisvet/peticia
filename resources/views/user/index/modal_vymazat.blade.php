<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen p-6">
        <div class="modal-content">
            <div class="modal-header container py-4">
                <div class="row">
                <h3 class="modal-title" id="staticBackdropLabel">Vymazanie vašej petície
                {{-- <span class="d-inline-block " tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                    data-bs-content="">
                    <a type="" class="bi bi-question-square  m-1 " disabled>
                    </a>
                </span> --}}
                </h3>
                </div>

                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                data-bs-placement="left" data-bs-content="Kliknutím zavriete okno">
                <button type="button" class="btn-close btn-primary fad fa-times fa-2x mx-1" data-bs-dismiss="modal" id="close"
                aria-label="Close" ></button>
                </span>
            </div>
            <div class="modal-body">
                <section class="pb-11 pt-7 ">

                    @foreach ($petition as $pet)
                    <form class="forms-sample" action="{{ route('delete.petition', $pet->id)}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="container">
                            <div class="row">
                                <div class="form-group col-10 mb-6">
                                    {{-- <h6 class="font-sans-serif text-primary fw-bold">Course detail</h6> --}}
                                    <label for="exampleInputName1">NÁZOV vašej petície</label>
                                    {{-- textový editor vám umožní zvoliť, čo potrebujete --}}
                                    <input type="text" class="form-control" id="" name="title" value="{{ $pet->title}}"
                                        placeholder="">
                                    {{-- <textarea class="form-control" rows="25" name="title"
                                        id="summernoteTitl"></textarea> --}}
                                </div>

                                <div class="form-group col-10 mb-2">
                                    <label for="exampleInputName1">Organizátor petície</label>
                                    <input type="text" class="form-control" id="exampleInputName2" name="predseda_name"
                                        placeholder="" value="{{ $pet->predseda_name}}">
                                </div>
                                <div class="form-group col-10 mb-2">
                                    <label for="exampleInputName1">Mená členov organizačného
                                        výboru</label>
                                    <input type="text" class="form-control" id="exampleInputName3" name="vybor_names"
                                        placeholder="" value="{{ $pet->vybor_names}}">
                                </div>
                                <div class="form-group col-10 mb-6">
                                    <label for="exampleInputName1">Názov vašej subdomény</label>
                                    <input type="text" class="form-control" id="exampleInputName31" name="subdomain"
                                        placeholder="" value="{{ $pet->subdomain}}">
                                </div>

                                <div class="row">
                                    <div class="form-group col-10 mb-6">
                                        <label for="exampleInputName4">KKategória vašej
                                            petície</label>
                                        <select class="form-select" name="category">
                                            <option disabled="" selected=""
                                            @foreach($category as $row)
                                            value="{{ $row->id }}">{{ $row->category }}
                                                -aktuálne vybraná kategória</option>
                                                @endforeach
                                            @foreach($category as $row)
                                            <option value="{{ $row->id }}">{{ $row->category}}</option>
                                            @endforeach

                                        </select>
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
                            <div class="col-md-8">
                            {{-- <div class="col-md-8"><img class="w-100"
                                    src="{{ asset('backend_user/assets/img/gallery/ux-designer.png') }}" alt="..." />
                                --}}

                                <div class="mt-4">
                                    <label for="formFileLg" class="form-label">Ak potrebujete vyberte iný
                                        obrázok</label>
                                    <input class="form-control form-control-lg btn btn-primary" id="formFileLg"
                                        type="file" name="image">
                                </div>
                                <div class="mt-4">
                                    <label for="formFileLg" class="form-label">Aktuálne zvolený obrázok</label><br>
                                    <img src="{{ URL::to($pet->image) }}" style="width: 280px; height: 200px" alt="">
                                    <input class="form-control form-control-lg btn btn-primary" type="hidden"
                                        name="oldimage" value="{{ $pet->image }}">
                                </div>
                            </div>
                            <hr class="mt-4">

                            <h1 class="my-4"></h1>

                            <div class="row">
                                <div class="form-group col-md-12 mb-4">
                                    <label for="exampleInputName4">TU môžete upraviť TEXT vašej petície</label>
                                    <textarea class="form-control" rows="25" name="details" id="summernoteUpr"
                                        placeholder="Vložte text vašej petície, môže byť rozsiahla - niekoľko strán, najlepšie je však napísať výstižný, jednostránkový text - kliknite na text a začnite písať.">{{ strip_tags($pet->details) }}</textarea>
                                </div>

                            </div>
                </section>

            </div>
            <div class="modal-footer container">
                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" title="" data-bs-trigger="hover focus"
                    data-bs-placement="left" data-bs-content="Zavrie sa bez zmeny">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zavrieť</button>
                </span>
                {{-- <a href="{{ route('delete.petition', $pet->id) }}"
                    onclick="return confirm('Ste si istý, že chcete petíciu vymazať?')"
                    class="btn btn-primary rounded-0 me-2" type="submit">Vymazať petíciu</a> --}}

                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                    data-bs-placement="top" title="" data-bs-content="Vymažete vašu petíciu. Údaje a dáta budú stratené. Budete musieť začať odznova." >
                    <a class="btn btn-primary order-1 order-lg-0" role="button" href="" data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target="#logoutModalVymaz">Vymazať petíciu</a>
                    </span>




            </div>


            </form>

<!-- Delete Modal-->
<div class="modal fade" id="logoutModalVymaz" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
             <div class="modal-content shadow-lg">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Ste si istý, že chcete petíciu vymazať?</h5>
                     <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">×</span>
                     </button>
                 </div>
                 <div class="modal-body">Zvoľte "ÁNO, vymazať" v prípade, že ste sa tak skutočne rozhodli</div>
                 <div class="modal-footer">
                     <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">NIE</button>
                     <a class="btn btn-primary" href="{{ route('delete.petition', $pet->id) }}">ÁNO, vymazať</a>
                 </div>
             </div>
         </div>
         </div>



            @endforeach
        </div>
    </div>
</div>



