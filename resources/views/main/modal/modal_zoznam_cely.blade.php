

{{-- @php
    $petition = DB::table('petitions')->where('user_id',Auth::user()->id)->get();
@endphp --}}
<div class="modal fade" id="staticBackdrop_zoznam_cely" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-fullscreen p-6">
<div class="modal-content">
    <div class="modal-header container p-4">
        <h3 class="modal-title" id="staticBackdropLabel">Zoznam ľudí, ktorí podpísali petíciu - "" </h3>
 {{-- {{$row -> title}}  --}}
            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
            data-bs-placement="left" data-bs-content="Kliknutím zavriete okno">
            <button type="button" class="btn-close btn-primary fad fa-times fa-2x mx-1" data-bs-dismiss="modal" id="close"
            aria-label="Close" ></button>
            </span>
    </div>
    <div class="modal-body">
        <section class="pb-4 pt-4 mt-0 ">
            <div id="container_wrapper" class="container mt-5">

                      <p class="m-3">Rôzne spôsoby stiahnutia databázy podpisov</p>
                      <body>
                        <div class="container">
                          <table id="datatable-tabletools" class="display" width="80%">
                            <thead>

                                <tr class="display  mt-4">
                                    <th colspan="10">Názov petície: <b></b></th>
                                    {{-- {{ $row->title }} --}}
                                </tr>

                              <tr>
                                <th scope="col">#</th>
                            <th scope="col">meno</th>
                            <th scope="col">priezvisko</th>
                            <th scope="col">email</th>
                            <th scope="col">ulica-čislo</th>
                            <th scope="col">mesto/<br>obec</th>
                            <th scope="col">psc</th>
                            <th scope="col">štát</th>
                            <th scope="col">meno<br> štatutara</th>
                            <th scope="col">priezvisko<br> štatutara</th>
                            <th scope="col">názov<br> prav osoby</th>
                            <th scope="col">sídlo<br> prav osoby</th>
                            <th scope="col">dátum<br> podpisu</th>
                              </tr>
                            </thead>

                            {{-- <tfoot>
                              <tr>
                                <th scope="col">#</th>
                            <th scope="col">meno</th>
                            <th scope="col">priezvisko</th>
                            <th scope="col">email</th>
                            <th scope="col">ulica-čislo</th>
                            <th scope="col">mesto/<br>obec</th>
                            <th scope="col">psc</th>
                            <th scope="col">štát</th>
                            <th scope="col">meno<br> štatutara</th>
                            <th scope="col">priezvisko<br> štatutara</th>
                            <th scope="col">názov<br> prav osoby</th>
                            <th scope="col">sídlo<br> prav osoby</th>
                            <th scope="col">dátum<br> podpisu</th>
                              </tr>
                            </tfoot> --}}

                            <tbody class="">


                                @foreach ($sign as $row)
                              <tr>
                                <td> {{ $i++}} </td>
                                <td>{{ $row->meno}}</td>
                                <td>{{ $row->priezvisko }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->ulica_cislo }}</td>
                                <td>{{ $row->mesto_obec }}</td>
                                <td>{{ $row->psc }}</td>
                                <td>{{ $row->stat }}</td>
                                <td>{{ $row->meno_zastupcu }}</td>
                                <td>{{ $row->priezvisko_zastupcu }}</td>
                                <td>{{ $row->nazov_prav_osoba }}</td>
                                <td>{{ $row->sidlo_prav_osoba }}</td>
                                <td>{{ $row->create_date }}</td>
                              </tr>
                                @endforeach

                            </tbody>
                          </table>
                        </div>


                      </body>
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


    <meta charset=utf-8 />



