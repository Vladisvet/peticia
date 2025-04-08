@extends('admin.admin_master')
@section('admin')
@php

// $petitions = DB::table('petitions')->where('subdomain','LIKE',$searchpet)
//         ->orWhere('predseda_name','LIKE',$searchpet)
//         ->orWhere('vybor_names','LIKE',$searchpet)
//         ->orWhere('title','LIKE',$searchpet)
//         ->orderBy('id','ASC')
//         ->paginate(2);
    // $petitions = Petition::where('subdomain','LIKE',$searchpet)
        // ->orWhere('predseda_name','LIKE',$searchpet)
        // ->orWhere('vybor_names','LIKE',$searchpet)
        // ->orWhere('title','LIKE',$searchpet)
        // ->orderBy('id','ASC')
        // ->paginate(2);



//dd($petitions);
@endphp
<div class="container mt-4">
    <div class="row">
        <div> <a class="mt-2 me-3 py-2 px-4 btn  btn-outline-primary" style="float:right;" href="{{ url('/') }}">Späť na hlavnú stránku</a></div><br>
    </div>
</div>
        @livewire('backend-petitionsliwe')


@endsection

