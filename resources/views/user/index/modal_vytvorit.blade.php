<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen p-6">
        <div class="modal-content">
            <div class="modal-header container">
                <h3 class="modal-title" id="staticBackdropLabel">Vytvorte vašu petíciu a uložte ju</h3>

                <div class="card pt-2 pe-2">
                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                data-bs-placement="left" data-bs-content="Kliknutím zavriete okno. Skôr ako toto okno zavriete, je potrebné petíciu uložiť.">
                <button type="button" class="btn-close btn-primary fad fa-times fa-2x" data-bs-dismiss="modal" id="close"
                aria-label="Close" ></button>
                </span>
                </div>
            </div>

           <div class="modal-body">
             <section class="pb-11 pt-7 ">


              <form class="forms-sample" action="{{ route('store.petition') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="form-group col-10 mb-6">
                                    <label for="exampleInputName1">TU vložte NÁZOV vašej petície - keď sa zobrazí, bude
                                        vyzerať pekne</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="title"
                                        placeholder="">
                                </div>

                                <div class="form-group col-10 mb-2">
                                    <label for="exampleInputName1">Organizátor petície</label>
                                    <input type="text" class="form-control" id="exampleInputName2" name="predseda_name"
                                        placeholder="">
                                </div>
                                <div class="form-group col-10 mb-2">
                                    <label for="exampleInputName1">Mená členov organizačného výboru</label>
                                    <input type="text" class="form-control" id="exampleInputName3" name="vybor_names"
                                        placeholder="">
                                </div>
                                <div class="form-group col-10 mb-6">
                                    <label >Názov vašej subdomény - malé písmená bez diakritiky spojte spojovníkom</label>
                                    <input type="text" class="form-control"  name="subdomain"
                                        placeholder="">
                                </div>

                                <div class="row">
                                    <div class="form-group col-10 mb-6">
                                        <label for="exampleInputName4">Vyberte kategóriu vašej petície</label>
                                        <select class="form-select" name="category_id">
                                            <option disabled="" selected="">--Vyberte kategóriu--</option>

                                            @foreach($category as $row)
                                            <option value="{{ $row->id }}">{{ $row->category}}</option>
                                            @endforeach

                                        </select>
                                        <select class="invisible"> name="" id="">
                                            <div @foreach($category as $row)>
                                                <option> value="{{ $row->id }}">{{ $row->category}}</option>
                                            </div>
                                            @endforeach
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

                                <div class="mt-4">
                                    <label for="formFileLg" class="form-label">Vyber obrázok</label>
                                    <input class="form-control form-control-lg btn btn-primary" id="formFileLg"
                                        type="file" name="image">
                                </div>
                            </div>
                            <hr class="mt-2">

                            <h1 class="my-4"></h1>

                            <div class="row">
                                <div class="form-group col-md-12 mb-4">
                                    <label for="exampleInputName4">
                                         {{--TU vložte TEXT vašej petície
                                         - použite textový editor
                                        na prispôsobenie textu.
                                         Petícia môže byť rozsiahla - niekoľko strán, najlepšie
                                        je však napísať výstižný, jednostránkový text--}}</label>
                                    <textarea class="form-control" rows="25" name="details" id="summernote_vyt"
                                        placeholder="Vložte text vašej petície, môže byť rozsiahla - niekoľko strán, najlepšie je však napísať výstižný, jednostránkový text - kliknite na text a začnite písať."></textarea>
                                </div>

                            </div>

                <div class="modal-footer container">
                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                        data-bs-placement="left" data-bs-content="Skôr ako toto okno zavriete, je potrebné petíciu uložiť">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zavrieť</button>
                    </span>
                    <button class="btn btn-primary rounded-0 me-2" type="submit">Uložiť petíciu</button>
                </div>
            </form>
           </section>
          </div>
        </div>
    </div>
</div>

<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote_vyt').summernote({
        toolbar: [
  ['style', ['style']],
  ['font', ['bold', 'underline', 'clear']],
  ['fontname', ['fontname']],
  ['color', ['color']],
  ['para', ['ul', 'ol', 'paragraph']],
  //['table', ['table']],
  //['insert', ['link', 'picture', 'video']],
  //['view', ['fullscreen', 'codeview', 'help']],
],
        height: 400
    });
</script>
