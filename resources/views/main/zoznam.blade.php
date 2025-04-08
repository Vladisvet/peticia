@extends('main.home_master')
@section('content')

@php

    //$petitions = DB::table('petitions')->orderBy('id', 'desc')->get();
    //$petcat = DB::table('categories')
    //->join('petitions', 'categories.id', '=', 'petitions.category_id')->paginate(2);
    $categories = DB::table('categories')->get();



    //dd($petitions);
 @endphp


@livewire('zoznam-searchliwe')

@endsection
