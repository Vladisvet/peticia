<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    function search(Request $request)
    {
        if (isset($_GET['nazov']) && strlen($_GET['nazov']) > 2) {

            $search_text = $_GET['nazov'];
            $title = DB::table('petitions')->where('title', 'LIKE', '%' . $search_text . '%')->paginate(1);
            $title->appends($request->all());

            return view('main.home', ['title' => $title],  compact('title', 'search_text'));
        }
        // if(isset($_GET['kategoria']) && strlen($_GET['kategoria']) > 2){

        //     $search_kategoria = $_GET['kategoria'];
        //     $petcategory = DB::table('categories')
        //         ->join('petitions', 'categories.id', '=', 'petitions.category_id')->where('category','LIKE','%'.$search_kategoria.'%')->paginate(1);
        //     $petcategory -> appends($request->all());

        //     return view('main.home',['category'=>$petcategory],  compact('petcategory','search_kategoria'));
        // }

        else {
            return view('main.home');
        }
    }
}
