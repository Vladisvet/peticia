<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Image;
use App\Models\Petition;
use App\Models\User;
//use Illuminate\Support\Facades\Session;

class PetitionController extends Controller
{
    // public function __construct(){
    // 	$this->middleware('auth');
    // }

    public function Index()
    {
        $category = DB::table('categories')->get();
        $petition = DB::table('petitions')->where('user_id', Auth::user()->id)
            //->join('users', 'id', 'petitions.user_id')
            ->get();
        $countPetition = DB::table('petitions')->where('user_id', Auth::user()->id)->get('id')->count();

        $role = Auth::user()->role;
        if ($role == '1') {
            return view('admin.index', compact('category'));
        } else {
            return view('user.index', compact('category', 'petition', 'countPetition'));
        }
    }

    public function StorePetition(Request $request)
    {
        $request->validate([
            //'category_id' => 'required',
            'user' => 'required',
            'subdomain' => 'required|unique:posts|max:255|regex:/^[a-z0-9\-]/',
            'predseda_name' => 'required|max:255',
            'title' => 'required|unique:posts|max:255',
            'details' => 'required|unique:posts|max:255',
        ]);

        $data = array();
        $data['user_id'] = Auth::id();
        $data['subdomain'] = $request->subdomain;
        $data['predseda_name'] = $request->predseda_name;
        $data['vybor_names'] = $request->vybor_names;
        $data['title'] = $request->title;
        $data['category_id'] = $request->category_id;
        $data['details'] = $request->details;
        $data['embed_code'] = $request->embed_code;
        $data['mot_text'] = $request->mot_text;
        $data['create_date'] = date('d-m-Y');

        $image = $request->image;
        if ($image) {
            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1500, 900)->save('image/petitionimg/' . $image_one);
            $data['image'] = 'image/petitionimg/' . $image_one;
            DB::table('petitions')->insert($data);
            $dataCount['user_id'] = Auth::id();

            $notification = array(
                'message' => 'Petícia bola úspešne uložená',
                'alert-type' => 'success',
            );

            return Redirect()->route('user.index')->with($notification);
        } else {
            $data['image'] = 'image/defaultimg/awards.png';
            DB::table('petitions')->insert($data);
            $dataCount['user_id'] = Auth::id();
            return Redirect()->route('user.index');
        }

        //Count user_id->id


    }

    public function EditPetition($id)
    {
        // $petition = DB::table('petitions')->where('id',$id)->first();
        $petition = DB::table('petitions')->where('user_id', Auth::user()->id)->get();
        $category = DB::table('categories')->get();
        return view('user.index', compact('category', 'petition'));
        return view('user.index.modal_upravit', compact('category', 'petition'));
    }

    public function UpdatePetition(Request $request, $id)
    {
        $request->validate([
            //     'category_id' => 'required',
            //     'user' => 'required',
            //'subdomain' => 'required|unique:petitions,subdomain|max:255|regex:/^[a-z0-9\-]/',
            //     'predseda_name' => 'required|max:255',
            //     'title' => 'required|unique:petitions,title|max:255',
            //     'details' => 'required|unique:petitions,details|max:255',
        ]);
        //$validate =

        $data = array();
        $data['user_id'] = Auth::id();
        $data['subdomain'] = $request->subdomain;
        $data['predseda_name'] = $request->predseda_name;
        $data['vybor_names'] = $request->vybor_names;
        $data['title'] = $request->title;
        $data['category_id'] = $request->category_id;
        $data['details'] = $request->details;
        $data['embed_code'] = $request->embed_code;
        $data['mot_text'] = $request->mot_text;
        $data['status_peticia'] = $request->status_peticia;
        $data['create_date'] = date('d-m-Y');

        $oldimage = $request->oldimage;
        $image = $request->image;
        if ($image) {
            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1500, 900)->save('image/petitionimg/' . $image_one);
            $data['image'] = 'image/petitionimg/' . $image_one;
            DB::table('petitions')->where('id', $id)->update($data);
            if ($oldimage) {
                unlink($oldimage);
            }



            $notification = array(
                'message' => 'Petícia bola upravená a úspešne uložená',
                'alert-type' => 'success',
            );
            return Redirect()->route('user.index')->with($notification);
        } else {
            $data['image'] = $oldimage;
            DB::table('petitions')->where('id', $id)->update($data);
            $notification = array(
                'message' => 'Petícia bola upravená a úspešne uložená',
                'alert-type' => 'success',
            );
            return Redirect()->route('user.index')->with($notification);
        }
    }

    public function DeletePetition($id)
    {
        $petition = DB::table('petitions')->where('id', $id)->first();
        unlink($petition->image);
        DB::table('petitions')->where('id', $id)->delete();

        $notification = array(
            'message' => 'Petícia bola vymazaná',
            'alert-type' => 'error',
        );

        return Redirect()->route('user.index')->with($notification);
    }



    //Single Petition Post Page Controller
    public function SinglePost($subdomain)
    {
        $post = DB::table('petitions')
            ->join('categories', 'petitions.category_id', 'categories.id')
            ->join('users', 'petitions.user_id', 'users.id')
            ->select('petitions.*', 'categories.category', 'users.name', 'users.email', 'users.id')
            ->where('petitions.subdomain', $subdomain)
            ->first();

        return view('main.single_post', compact('post'));
        //return view('livewire.home-searchliwe', compact('post'));
        //dd($post);
    }


    //Podpisovy harok
    public function SignPetition(Request $request)
    {

        $data = array();
        $data['user_id'] = $request->user_id;
        $data['petition_id'] = $request->petition_id;
        $data['meno'] = $request->meno;
        $data['priezvisko'] = $request->priezvisko;
        $data['email'] = $request->email;
        $data['ulica_cislo'] = $request->ulica_cislo;
        $data['mesto_obec'] = $request->mesto_obec;
        $data['psc'] = $request->psc;
        $data['stat'] = $request->stat;
        $data['meno_zastupcu'] = $request->meno_zastupcu;
        $data['priezvisko_zastupcu'] = $request->priezvisko_zastupcu;
        $data['sedemnast_aviac'] = $request->sedemnast_aviac;
        $data['pravidla_pouzivania'] = $request->pravidla_pouzivania;
        $data['anonym'] = $request->anonym;
        $data['spracovanie_udajov'] = $request->spracovanie_udajov;
        $data['email_organizatorovi'] = $request->email_organizatorovi;
        $data['nazov_prav_osoba'] = $request->nazov_prav_osoba;
        $data['sidlo_prav_osoba'] = $request->sidlo_prav_osoba;
        $data['create_date'] = date('d-m-Y');
        DB::table('sign_petitions')->insert($data);



        $notification = array(
            'message' => 'Poslali sme vám potvrdzovací mail',
            'alert-type' => 'info',
        );

        return Redirect()->back()->with($notification);
    }

    public function Zoznam()
    {
        return view('zoznam');
    }
}
