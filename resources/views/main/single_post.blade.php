@extends('main.home_master')
@section('content')

@php
$sign = DB::table('sign_petitions')
->where('user_id', $post->id)
->orderBy('id', 'asc')
->get();
//dd($sign);

$countpet = DB::table('sign_petitions')
->where('user_id', $post->id)
->count();
@endphp
@php
    $i = 1;
@endphp
      <!-- ============================================-->
      <!-- <section> begin ============================-->
        <section class="pb-11 pt-7 bg-600">

            <div class="container">

                <div class="col-12">
                  <h5 class="font-sans-serif text-primary fw-bold">Petícia za</h5>
                <div class="row">
                  <h1 class="col-8 mb-6">{{ $post->title }}</h1>



                </div>
              </div>
            </div>
            <!-- end of .container-->

        </section>
          <!-- <section> close ============================-->
          <!-- ============================================-->

        {{-- <div class="container">
        <div class="row">
            <div class="col">

            </div>
            <div class="col">

            </div>
            <div class="col">

            </div>
        </div>
        </div> --}}


          <!-- ============================================-->
          <!-- <section> begin ============================-->
        <section style="margin-top:-21.5rem">


            <div class="container">
              <div class="row">

                    @if ($post->image == null)


                    @else
                <div class="col-md-8 ms-auto">
                    <img class=" w-100" src="{{ asset($post->image) }}" alt="..." />
                </div>
                    @endif

                <div class="col-md-4">
                    <div class="card rounded-0">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Podpísalo </strong>:
                              @php
                                  print_r($countpet);
                              @endphp <i class="fas fa-users fa-1x  ms-2"></i><i class="fas fa-users fa-1x"></i><i class="fas fa-users fa-1x"> </i></li>
                        <li class="list-group-item"><strong>Aktívna od</strong>: {{ $post->create_date }}</li>
                        <li class="list-group-item"><strong>Kategória </strong>: {{ $post->category }}</li>


                        <li class="list-group-item">
                          <p class="mb-0 mt-0"><strong>Organizátor</strong>:</p>
                          <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"  data-bs-placement="bottom"
                            data-bs-content="Kontaktujte organizátora petície">
                          <a class="btn btn-sm btn-outline-secondary px-5" href="mailto:{{ $post->email }}"> {{ $post->predseda_name }}<i class="ms-2 fas fa-envelope"></i></a>
                        </span>
                        </li>
                      </ul>
                    </div>
                </div>
              </div>
            </div>

            <!-- Nadpis a obsah peticie -->
            <div class="container">
                <h5 class="font-sans-serif text-primary fw-bold mt-6 mb-3">Dôvod petície</h5>
                  <div class="col-md-8 mb-4">{!! $post->details !!}
                    </div>
            </div>

            <!-- Button trigger Podpísať petíciu modal -->
        <div class="container">
            {{-- <div class="row"> --}}
            <div class="card col-md-6 col-sm-8 p-2 my-2 rounded-0">

                    <div class="form-group ms-0 mt-0 pe-4">
                        @if ($post->status_peticia == 1)
                        <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                            data-bs-content="Po kliknutí môžete podpísať petíciu.">
                        <button type="button" class="btn btn-lg btn-outline-primary float-start px-3" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop_signpet">
                            Pridajte sa a PODPÍŠTE našu petíciu
                        </button>
                        </span>
                        @else
                        <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                            data-bs-content="Podpisový formulár NIE je ešte PRÍSTUPNÝ. Organizátor ešte pracuje na texte petície. Po dopracovaní bude petícia plnohodnotne aktivovaná.">
                        <button type="button" class="btn btn-lg btn-outline-primary float-start  px-3" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop_signpet" disabled>
                            Pridajte sa a PODPÍŠTE petíciu
                        </button>
                        </span>
                        @endif
                    </div>


                <!-- Button trigger Zoznam podpisanych zuzeny modal -->
                    <div class=" ms-0 mt-1 mb-0">
                        <a href="#!" class="btn  btn-lg btn-light" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop_zoznam_maly">
                            ZOZNAM <i class="fas fa-users fa-1x"></i><i class="fas fa-users fa-1x"></i><i class="fas fa-users fa-1x"> </i> -ktorí už podpísali
                        </a>
                    </div>
            </div>
            <!-- Share buttons -->

            <div class="card col-md-6 col-sm-8 p-2 mt-2 mb-8 rounded-0">

                    <div class="form-group ms-2 mb-1">
                        <!-- AddToAny BEGIN -->
                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">

                        <a class="a2a_button_facebook a2a_counter"></a>
                        <a class="a2a_button_twitter a2a_counter"></a>
                        <a class="a2a_button_email a2a_counter"></a>
                        <a class="a2a_button_whatsapp a2a_counter"></a>
                        <a class="a2a_button_linkedin a2a_counter"></a>
                        <a class="a2a_dd a2a_counter" href="https://www.addtoany.com/share"></a>
                        {{-- <a class="a2a_dd" href="https://www.addtoany.com/share"></a> --}}
                        <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                    data-bs-content="Zdieľanie medzi hodnotovo podobne orientovanými ľuďmi výrazne posiľňuje úspešnosť petície. ČÍSLO zobrazuje počet zdieľaní.">
                <h5><a type="" class="bi bi-question-square  m-1" disabled>
                    </a></h5>
                    </span>
                        </div>
                        <script async src="https://static.addtoany.com/menu/page.js"></script>
                        <script>var a2a_config = a2a_config || {};
                            a2a_config.delay = 500;</script>
                        <!-- AddToAny END -->
                    </div>


                {{-- <div class="sharethis-inline-share-buttons"></div> --}}

                <div class="">
                    <h6 class=" col-md-12 col-lg-12 ms-2 mb-0 float-start">Z D I E Ľ A J T E našu petíciu s priateľmi a známymi
                    </h6>
                </div>
            </div>


            <hr style="height:1px; width:100%; border-width:0; color:rgb(206, 206, 206); background-color:">
            <hr style="height:1px; width:100%; border-width:0; color:rgb(206, 206, 206); background-color:">
           </div>
        </div>




                <!-- youtube-live-start -->
                @php
                    $livetv = DB::table('livetvs')->first();
                @endphp


                {{-- @if ($livetv->status == 1)
                <h3 class="mt-2 mb-4">Naše petičné video</h3>
                <div class="photo">
                    <div class="embed-responsive embed-responsive-16by9 embed-responsive-item" style="margin-bottom:5px;">
                        {!! $livetv->embed_code !!}
                    </div>
                    </div>
                 @endif --}}
           <!-- /.youtube a FB-live video -->
           <div class="container">


                @if ($post->embed_code == null)
                @else
                <h5 class="font-sans-serif text-primary fw-bold mt-6 mb-4">Naše petičné video</h5>
                <div class="me-0">
                    <div class="row">
                    <div class="photo">
                    <div class="embed-responsive embed-responsive-16by9 embed-responsive-item" style="margin-bottom:5px;">
                        {!! $post->embed_code !!}
                    </div>
                    </div>
                </div>
                <br>
                <hr style="height:1px; width:100%; border-width:0; color:rgb(206, 206, 206); background-color:">
                @endif
               </div>
            </div>
           <div class="container">
               <div class="row">
                @if ($post->mot_text == null)
                @else
                <br>
                <h5 class="font-sans-serif text-primary fw-bold mt-6 mb-4">Petičný článok</h5>
                <div class=" col-md-8">
                    <div class="photo">
                    <div class="embed-responsive embed-responsive-16by9 embed-responsive-item" style="margin-bottom:5px;">
                        {!! $post->mot_text !!}
                    </div>
                    </div>
                </div>
                </div>
                @endif
            </div>









          </section>



<!-- ZACIATOK -->
<!-- Modal zoznam maly podpisanych -->
@include('main.modal.modal_signpet_singlepost')
<!-- Modal zoznam maly podpisanych -->
<!-- Modal na vytvorenie petície -->
@include('main.modal.modal_zoznam_maly')
<!-- Modal na vytvorenie petície -->
<!-- KONIeC -->
@endsection
