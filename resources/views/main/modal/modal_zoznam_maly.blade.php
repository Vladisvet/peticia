<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>


<div class="modal fade" id="staticBackdrop_zoznam_maly" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-lg p-2">
<div class="modal-content">
    <div class="modal-header container p-4">
        <h3 class="modal-title" id="staticBackdropLabel">Zoznam ľudí, ktorí podpísali petíciu - "{{ $post->title }}" </h3>
            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
            data-bs-placement="left" data-bs-content="">
            <button type="button" class="btn-close btn-primary fad fa-times fa-2x me-1" data-bs-dismiss="modal" id="close"
            aria-label="Close" ></button>
            </span></div>
            {{-- <br>
            <label for="close">zavrieť</label> --}}

    <div class="modal-body">
        <section class="pb-7 pt-4 ">

                <div class="container">

                    <table id="table_id" class=" table table-sm table-striped table-bordered  align-middle">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">meno a priezvisko</th>
                            <th scope="col">obec/mesto</th>
                            <th scope="col">dátum podpisu</th>
                          </tr>
                        </thead>
                        <tbody>

                            {{-- @if($row->anonym == 1)
                            <td><p>anonym</p></td>
                            @else --}}
{{-- @endif --}}


                            @foreach ($sign as $row)
                          <tr>

                            <td> {{ $i++}} </td>
                            @if($row->anonym == 1)
                            <td><p class="">anonymne</p></td>
                            @else
                            <td>{{ $row->meno}} {{ $row->priezvisko }}</td>
                            @endif
                            <td>{{ $row->mesto_obec }}</td>
                            <td>{{ $row->create_date }}</td>

                          </tr>
                            @endforeach


<script>
    $(document).ready( function () {
    $('#table_id').DataTable({
  "language": {
    //"sProcessing": "Traitement en cours ...",
    "sLengthMenu": "Počet _MENU_ riadkov",
    //"sZeroRecords": "Aucun résultat trouvé",
    //"sEmptyTable": "Aucune donnée disponible",
    "sInfo": "Riadky _START_ až _END_ z počtu _TOTAL_",
    //"sInfoEmpty": "Aucune ligne affichée",
    //"sInfoFiltered": "(Filtrer un maximum de_MAX_)",
    //"sInfoPostFix": "",
    "sSearch": "Vyhladávanie:",
    //"sUrl": "",
    //"sInfoThousands": ",",
    //"sLoadingRecords": "Chargement...",
    "oPaginate": {
      "sFirst": "Začiatok", "sLast": "Koniec", "sNext": "Ďalšia", "sPrevious": "Predošlá"
    },
    // "oAria": {
    //   "sSortAscending": ": Trier par ordre croissant", "sSortDescending": ": Trier par ordre décroissant"
    // }
  }
 });
});
</script>

                        </tbody>
                      </table>




                </div>

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

    </div>
    <!-- end of .container-->




    <div class="modal-footer container py-4 pe-5">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zavrieť</button>





    </div>

</div>
</div>
</div>

@php
//dd($post);
@endphp

