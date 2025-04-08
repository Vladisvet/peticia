<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function __construct(){
		$this->middleware('auth');
	}

    public function Index(){
        $category = DB::table('categories')->orderBy('id', 'desc')->paginate(30);
        return view('backend.category.index', compact('category'));
    }

    public function AddCategory(){
        return view('backend.category.create');
    }

    public function StoreCategory(Request $request){
        $validated = $request->validate([
            'category' => 'required|unique:categories|max:255',
        ]);

        $data = array();
        $data['category'] = $request->category;
        DB::table('categories')->insert($data);

        $notification = array(
            'message'=>'Kategória bola úspešne pridaná',
            'alert-type'=>'success',
        );

        return Redirect()->route('categories')->with($notification);
    }

    public function EditCategory($id){
        $category = DB::table('categories')->where('id', $id)->first();
        return view('backend.category.edit', compact('category'));
    }

    public function UpdateCategory(Request $request, $id){
        $validated = $request->validate([
            // 'category' => 'required|unique:categories|max:255',
        ]);

        $data = array();
        $data['category'] = $request->category;
        DB::table('categories')->where('id',$id)->update($data);

        $notification = array(
            'message'=>'Kategória bola úspešne zmenená',
            'alert-type'=>'success',
        );

        return Redirect()->route('categories')->with($notification);
    }

    public function DeleteCategory($id){
        DB::table('categories')->where('id',$id)->delete();
        $notification = array(
            'message'=>'Kategória bola úspešne vymazaná',
            'alert-type'=>'success',
        );
        return Redirect()->route('categories')->with($notification);
    }

//SEO setting
    public function SeoSetting(){
        $seo = DB::table('seos')->first();
        return view('backend.seo.seo_update', compact('seo'));
    }

    public function SeoUpdate(Request $request, $id){
        $data = array();
        $data['meta_author'] = $request->meta_author;
        $data['meta_title'] = $request->meta_title;
        $data['meta_keyword'] = $request->meta_keyword;
        $data['meta_description'] = $request->meta_description;
        $data['google_analytics'] = $request->google_analytics;
        $data['google_verification'] = $request->google_verification;
        $data['alexa_analytics'] = $request->alexa_analytics;

        DB::table('seos')->where('id',$id)->update($data);

        // $notification = array(
        //     'message'=>'Seo bolo úspešne zmenené',
        //     'alert-type'=>'success',
        // );
        // return Redirect()->route('seo.setting')->with($notification);
        return Redirect()->route('seo.setting');
    }




}
