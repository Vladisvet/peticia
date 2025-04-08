<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog p-6">
        <div class="modal-content">
            <div class="modal-header container">
                <h4 class="modal-title" id="staticBackdropLabel">Vyhľadajte svoju petíciu podľa zaradenia do kategórie</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <section class="pb-11 pt-2 ">
                    <div class="col-10 mt-2 ms-1">
                        @foreach ($category as $row )
                        <a class="btn btn-outline-secondary mb-1" href="#!" role="button">{{ $row->category }}</a>
                        @endforeach
                    </div>
                </section>
            </div>


            <div class="modal-footer container">

                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal"  role="button">Zavrieť</button>



            </div>



    </div>
</div>

