
@php
// $petitions = DB::table('petitions')
// ->join('categories', 'categories.id', '=', 'petitions.category_id')
// ->paginate(2);
//->join('sign_petitions', 'sign_petitions.user_id', '=', 'petitions.user_id')
//->select('petitions.*', 'categories.*', 'sign_petitions.user_id','sign_petitions.email')
// ->orderBy('id', 'desc')
//->paginate(2);
// $petcat = DB::table('categories')
// ->join('petitions', 'categories.id', '=', 'petitions.category_id')->get();
//$categories = DB::table('categories')->get();
//dd($petitions);
//$sign_petitions = DB::table('sign_petitions')->get();
//dd($sing_petitions);
//dd($petitions);
@endphp

{{-- @foreach ( $petitions as $row )
@php
$countpetns = DB::table('sign_petitions')
    ->join('users', 'sign_petitions.user_id', 'users.id')
    ->where('user_id','=', $row->id)
    ->count();
@endphp
@endforeach --}}

@php
//dd($countpetns);
@endphp




{{-- nasleduje div, ktore ma par nakonci --}}
<div>

<!-- ============================================-->
  <!-- <section> begin ============================-->
    <section class="pb-4 pt-8 bg-600">

        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="mb-2">Zoznam všetkých petícií</h1>
              <hr style="height:1px; width:100%; border-width:0; color:rgb(206, 206, 206); background-color:" >
            <h5 class="font-sans-serif text-primary fw-bold pt-4">Vyhľadávanie - filter</h5>


            {{-- <div class="" data-bs-toggle="buttons">
                <div name="" id="searchCategory">
                <option value="">Vyberte s kategóriu</option>
                @foreach ($categories as $cat)
                  <label class="btn btn-outline-secondary">
                  <input wire:model="searchCategory" class="btn btn-check"  type="checkbox" autocomplete="off" value="{{$cat -> category }}"  id="searchCategory" > {{$cat -> category }}
                @endforeach
                </div>
             </div> --}}




        {{-- @foreach  ($categories as $cat)
            <div data-bs-toggle="buttons" class="check form-check-inline">

                <label id="searchCategory" class="btn btn-outline-secondary">
                <input wire:model="searchCategory" type="checkbox" value="{{$cat -> category }}"> {{$cat -> category }}
                </label>
            </div>
        @endforeach --}}



            {{-- <select wire:model="searchCategory"  type="button" class="form-select border border-secondary rounded-1 ">
                <option value="">Vyberte kategóriu</option>
            @foreach ($categories as $cat)
              <option value="{{$cat->category}}">{{$cat->category }}</option>
            @endforeach
            </select> --}}

</div>

{{-- id:{{ $searchCategory }}
id:{{ $searchTitle }}
id:{{ $searchName }}
id:{{ $sortBy }} --}}

<div class="container">
<div class="row mt-4 mb-2">
    <div class="col-3 col-md-3">
          <label class="form-label ps-2" for="">Kategórie</label>
      {{-- <div class="mt-0 form-check"></div> --}}


        <select wire:model="searchCategory"  type="button" class="form-select border border-secondary rounded-1 ">
            <option value="">Všetky kategórie</option>
        @foreach ($categories as $cat)
         <option value="{{$cat->category}}">{{$cat->category }}

            {{-- {{$cat
            //->collection
            //->goupBy('category_id')
            //->join('petitions','categories.id', '=', 'petitions.category_id')
            -> count('categories.category_id') }} --}}
        </option>
        @endforeach
        </select>
        @php
        //dd($cat);
        @endphp


            {{-- @foreach ($categories as $cat)
              <input class="btn-check" type="checkbox" value="{{$cat -> category }}" id="searchCategory" wire:model="searchCategory"/>
              <label class="btn btn-outline-secondary" for="searchCategory"> {{$cat -> category }} </label>
              @endforeach --}}

    </div>
    <div class="col-3 col-md-3">
        <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
        data-bs-placement="top" data-bs-content="Zadajte ktorúkoľvek časť NÁZVU petície. Ak už máte uskutočnenú selekciu, názov sa bude vyhľadávať len v rámci danej selekcie.">
        <label class="form-label ps-2 " for="">Podľa názvu</label>
        <input type="text" class="form-control border border-secondary rounded-1 pe-6" placeholder="Vyhľadaj..." wire:model.debounce.500ms="searchTitle"/>
        </span>
    </div>
    <div class="col-3 col-md-3">
        <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
        data-bs-placement="top" data-bs-content="Zadajte ktorúkoľvek časť MENA organizátora petície. Ak už máte uskutočnenú selekciu, meno sa bude vyhľadávať len v rámci danej selekcie.">
        <label class="form-label ps-2 " for="">Podľa mena</label>
        <input type="text" class="form-control border border-secondary rounded-1 pe-6" placeholder="Vyhľadaj..." wire:model.debounce.500ms="searchName"/>
        </span>
    </div>
    <div class="sort-item ps-2 col-3 col-md-3">
        <label class="form-label ps-2 " for="">Zoradenie</label>
        <select name="sortBy" class="chosen form-select form-control border border-secondary rounded-1 pe-6" wire:model="sortBy">
            <option value="default" selected="selected">Zoradiť od...</option>
            <option value="latest">od najnovších</option>
            <option value="oldest">od najstarších</option>
            <option value="najviac_pod">s najviac podpismi</option>
            <option value="najmenej_pod">s najmenej podpismi</option>
        </select>
    </div>
    {{-- <div class="sort-item ps-2 col-3 col-md-3 ms-2">
        <label class="form-label ps-2 " for="">Podľa úspešnosti</label>
        <select name="sortByAmountSigns" class="chosen form-select form-control border border-secondary rounded-1 pe-6" wire:model="sortByAmountSigns">
            <option value="default" selected="selected">Najskôr s...</option>
            <option value="najviac_pod">s najviac podpismi</option>
            <option value="najmenej_pod">s najmenej podpismi</option>
        </select>
    </div> --}}
</div>
</div>


</div>
<hr style="height:1px; width:100%; border-width:0; color:rgb(206, 206, 206); background-color:" >

        <div class="row pt-4">
                {{-- (count($title)>0) --}}
            {{-- @if (isset($title))
                @if (count($title)>0)
                    @foreach ($petitions as $row)
                    <div class="col-md-4 mb-4">
                      <div class="card h-100">
                          <img class="card-img-top w-100 rounded-0" src="{{ asset($row->image)}}" alt="courses" />
                        <div class="card-header">
                        <a class="text-dark fs--1 stretched-link text-decoration-none" href=""><i class="fa fa-user me-1" aria-hidden="true"></i> {{ $row->predseda_name }}</a>
                        </div>
                        <div class="card-body">
                          <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1 lh-1">{{ $row->title }}</h5>
                        </div>

                        <div class="card-header">
                            <a value="{{$row->category_id}}" class="text-dark fs--1 stretched-link text-decoration-none rounded-0" href="{{ URL::to($row->subdomain.'.peticia.org') }} "><i class="fa fa-search me-1" aria-hidden="true"></i>
                                {{ $row->category}}
                            </a>
                        </div>
                      </div>
                    </div>
                    <div class="pagination-block">
                        {{ $petitions->links('pagination-linkslw') }}
                        {{-- {{ $petitions->links('layouts.paginationlinks') }} --}}
                    {{-- </div>
                    @endforeach
                @else
                        <h4> Vyhľadávanie je bez výsledkov. Upravte vašu voľbu.</h4>
                @endif
                 @else --}}

                @foreach ($petitions as $row )
                    <div class="col-md-4 mb-4">

                      <div class="card btn-outline-primary border-start-0 border-top-0 border-5 h-100 rounded-0">
                            <div class="card-header pt-2 pb-1 rounded-0">
                                <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1 lh-1">{{ $row->title }}</h5>
                            </div>

                        <div class="card-header pt-2 pb-1 rounded-0" >

                                <h1 class="font-sans-serif fs--1 lh-1">{{ Str::limit($row->details, 200) }}
                                </h1>
                        </div>

                        @empty ( $row->image)
                        <img class="card-img-top w-75 h-100 rounded-0 mx-auto bg-none"  src="{{ asset('backend_user\assets\img\gallerymy\peticia-dav.png')}}"alt="PETICIA BEZ OBRÁZKA" />
                        @else
                        <img class="card-img-top rounded-0 mx-auto" src="{{ asset($row->image)}}" alt="PETICIA OBRÁZOK" />
                        @endempty

                        <div class="card-header">
                        <a class="text-dark fs--1 stretched-link text-decoration-none" href="{{ URL::to($row->subdomain.'.peticia.org') }}"><i class="fa fa-user me-1" aria-hidden="true"></i> {{ $row->predseda_name }}</a>
                        </div>


                        <div class="card-header">
                          <div class="row">

                            <a value="{{$row->category_id}}" class="text-dark fs--1 stretched-link text-decoration-none" href="{{ URL::to($row->subdomain.'.peticia.org') }}">
                                <i class="fa fa-search me-1 mt-1 float-start" aria-hidden="true"></i>

                            <div class="float-start text-dark fs--1 stretched-link text-decoration-none">{{ $row->category}}</div>
                            <div class="float-end text-dark fs--1 stretched-link text-decoration-none">
                                podpísalo:
                            @php
                            $countpet = DB::table('sign_petitions')
                            ->where('user_id','=', $row->user_id)
                            ->count('user_id')
                            ;
                            @endphp
                            {{ $countpet }}
                            {{-- {{ $countcat }} --}}
                            <i class="fas fa-users fa-1x  ms-1"></i></div></a>



                          </div>
                        </div>
                      </div>
                    </div>
                @endforeach


                <div class="pagination-block">
                    {{ $petitions->links('pagination-linkslw') }}
                    {{-- {{ $petitions->links('layouts.paginationlinks') }} --}}
                </div>

            {{-- @endif --}}
              </div>
            </div>
            <!-- end of .container-->
          </section>
          <!-- <section> close ============================-->
          <!-- ============================================-->
</div>

@php
//dd($countpet);
//dd($petitions);
//dd($cat);
@endphp

<script>
$(".btn").click(function(){
$(".btn").css("background-color", "");
$(this).css("background-color", "red");
});
</script>



