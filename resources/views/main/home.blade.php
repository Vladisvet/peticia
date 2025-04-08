@extends('main.home_master')
@section('content')



@php

    //$petitions = DB::table('petitions')->orderBy('id', 'desc')->get();
    //$petcat = DB::table('categories')
    //->join('petitions', 'categories.id', '=', 'petitions.category_id')->paginate(2);
    $categories = DB::table('categories')->get();



    //dd($petitions);
 @endphp

<section class="pt-4 bg-600 px-0 pb-5" id="">
    <div class="container">
      <div class="row align-items-center">
        {{-- <div class="col-md-6 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 ps-lg-9 pt-md-0 w-100" src="{{ asset('backend_user/assets/img/gallery/hero-header.png')}}" width="470" alt="hero-header"></div> --}}
        <div class="col-md-6 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 ps-xlg-9 pe-0 pt-md-0 ms-4 w-100" src="{{ asset('backend_user/assets/img/gallerymy/peticia-dav.png')}}" width="800" alt="peticia-dav"></div>
        <div class="col-md-6 col-lg-5 text-md-start text-center pt-6 pb-3">
          <h5 class="fw-bold font-sans-serif">Aktívny občan</h5>
         <h2 class="fs-4 fs-xl-7 mb-4 ">Presaďte Váš názor prostredníctvom petície</h2>
         <p>Svet sa neustále mení. Menia ho ľudia tak, aby bol krajší, prívetivejši a v neposlednom rade SPRAVODLIVEJŠÍ. Človek vníma, chápe, vo svojej mysli projektuje budúcnosť.</p><p> V demokratických spoločnostiach je petičná činnosť podstatným nástrojom k dosahovaniu žiadúcich zmien. Vytvorením petície vyzvete ľudí, aby podporovali vášu snahu o dosiahmutie zmien vo svete. Pripojte sa k ľuďom, ktorí menia svet k lepšiemu.</p>
         <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
         data-bs-placement="right" data-bs-content="Na vytvorenie petície sa po kliknutí musíte najskôr zaregistrovať. Celý proces je intuitívne jednoduchý a priehľadný.">
         <a href="{{url('/register')  }}" type="button" class="btn btn-outline-secondary float-start mt-2" ><i class="fa fa-globe me-2" aria-hidden="true"></i>Vytvorte petíciu - svet treba zmeniť</a>
        </span>
        </div>
      </div>
<!-- Zdielanie BEGIN -->
    <div class="row">
        <div class="form-group col-md-12 col-lg-12 ms-0 mb-1">
            <!-- AddToAny BEGIN -->
            <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
            <a class="a2a_button_facebook a2a_counter"></a>
            <!--<a class="a2a_button_twitter a2a_counter"></a> -->
            <a class="a2a_button_x a2a_counter"></a>
            <a class="a2a_button_email a2a_counter"></a>
            <a class="a2a_button_whatsapp a2a_counter"></a>
            <a class="a2a_button_linkedin a2a_counter"></a>
            {{-- <a class="a2a_dd a2a_counter" href="https://www.addtoany.com/share"></a> --}}
            <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
            </div>
            <script async src="https://static.addtoany.com/menu/page.js"></script>
            <script>var a2a_config = a2a_config || {};
                a2a_config.delay = 500;</script>
            <!-- AddToAny END -->
        </div>
    </div>

    <div class="row">
        <h6 class=" col-md-5 col-lg-5 mb-5 ms-1 float-start">ZDIEĽAJTE našu petíčnú stránku s priateľmi a známymi
        <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
        data-bs-content="Zdieľanie medzi hodnotovo podobne orientovanými ľuďmi výrazne zlepšuje povedomie o našej stránke. Zdieľať môžete aj jednotlivé petície - otvorte jej stránku a ZDIEĽAJTE.">
    <h5><a type="" class="bi bi-question-square  m-1" disabled>
        </a></h5>
        </span></h6>
    </div>
<!-- Zdialania END -->

    <hr style="height:1px; width:100%; border-width:0; color:rgb(206, 206, 206); background-color:">
    <hr style="height:1px; width:100%; border-width:0; color:rgb(206, 206, 206); background-color:">
    </div>


</section>





@livewire('home-searchliwe')



          <!-- <section> close ============================-->
          <!-- ============================================-->








          {{-- <!-- ============================================-->
          <!-- <section> begin ============================-->
          <section>


            <!-- end of .container-->

          </section>
          <!-- <section> close ============================-->
          <!-- ============================================--> --}}

          <!-- ZACIATOK -->
<!-- Modal na zobrazanie katogorii -->
{{-- @include('main.modal.modal_kategorie') --}}
<!-- KONIeC -->
<!-- Modal na vytvorenie petície -->


@endsection


