<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

{{-- @php
    $petition = DB::table('petitions')->where('user_id',Auth::user()->id)->get();
@endphp --}}
<div class="modal fade" id="staticBackdrop_zoznam_mailov" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-fullscreen p-6">
<div class="modal-content">
    <div class="modal-header container p-4">
        <h3 class="modal-title" id="staticBackdropLabel">Zoznam mailov ľudí, ktorí chcú dostávať informácie o priebehu kampane - "" </h3>
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

                      <p class="mx-3 mb-3">Táto tabuľka slúži na vyselektovanie adries ľudí, ktorí si prajú od vás dostávať informácie:<br>
                        - stlačte tlačítko "Excel", stiahnite dáta a následne ich v Exceli otvorte, <br>
                        - skopírujte stĺpec s emailami,<br>
                        - vložte ich do vášej mailovej aplikácie.<br>
                         Buďte si vedomý, že sú denné limity v počte odoslaných mailov - gmail v tejto chvíli má limit 2000. Ak chcete posielať denne viac, musíte používať platené služby - napr. Mailchimp, či Sendinblue. </p>
                      {{-- <p class="m-3">Rôzne spôsoby stiahnutia databázy podpisov</p> --}}
                      <H5 class="mx-3 mb-3">Určite píšte ľuďom o kampani. Požiadajte ich o pomoc, o zdieľanie, aj o neformálnu pozitívnu komunikáciu o kampani s ich známymi a priateľmi. Sú to ľudia rovnakej hodnotovej orientácie, sú vám otvorení, porozumejú vám.</H5>
                      <body>
                        <div class="container">
                        <div class="card p-3">
                          <table id="datatable-tabletools2" class="display" width="80%">
                            <thead>
                              <tr>
                                  <th scope="col">email</th>
                            {{--    <th scope="col">#</th>
                             <th scope="col">meno</th>
                            <th scope="col">priezvisko</th>
                            <th scope="col">dátum<br> podpisu</th> --}}
                              </tr>
                            </thead>

                            {{-- <tfoot>
                              <tr>
                                <th scope="col">#</th>
                            <th scope="col">meno</th>
                            <th scope="col">priezvisko</th>
                            <th scope="col">email</th>

                            <th scope="col">dátum<br> podpisu</th>
                              </tr>
                            </tfoot> --}}

                            <tbody class="">


                                @foreach ($sign as $row)
                              <tr>


                                @if($row->email_organizatorovi == 1)
                                <td>{{ $row->email }}</td>
                                @else
                                <td class=""></td>
                                @endif
                                {{--<td> {{ $i++}} </td>
                                 <td>{{ $row->meno}}</td>
                                <td >{{ $row->priezvisko }}</td>
                                <td>{{ $row->create_date }}</td> --}}

                              </tr>
                                @endforeach

                            </tbody>
                          </table>
                        </div>
                        </div>

                      </body>
                </div>

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

    </div>
{{-- @if($row->email_organizatorovi == 1)
                                <td> {{ $i++}} </td>
                                <td>{{ $row->meno}}</td>
                                <td>{{ $row->priezvisko }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->create_date }}</td>
                                @else
                                @endif --}}


    <!-- end of .container-->

    <div class="modal-footer container py-4 pe-5">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zavrieť</button>
    </div>

</div>
</div>
</div>

@php
//dd($post);
//dd($sign);
@endphp

