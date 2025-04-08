<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Petition;
use DB;
use Image;

class AdminController extends Controller
{
    public function __construct(){
		$this->middleware('auth');
	}

    public function Logout(){
    Auth::logout();
    Return Redirect()->route('login');
    }

    public function BackendPetitions()
    {
        return view('backend.petitions.backend-petitions');
    }

    public function AdmineditPetition($id){
        return view('backend.petitions.edit', compact('id'));
    }

    public function UpdateBackendPetition(Request $request, $id)
    {
        $petitions = DB::table('petitions')
        ->where('id',$id)
        ->first();

        $data = array();
        $data['id'] = $request->id;
        $data['subdomain'] = $request->subdomain;
        $data['predseda_name'] = $request->predseda_name;
        $data['vybor_names'] = $request->vybor_names;
        $data['title'] = $request->title;
        $data['category_id'] = $request->category_id;
        $data['details'] = $request->details;
        $data['embed_code'] = $request->embed_code;
        $data['status_video'] = $request->status_video;
        $data['status_peticia'] =$request->status_peticia;



        $oldimage = $request->oldimage;
        $image = $request->image;
        if ($image) {
            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1500, 900)->save('image/petitionimg/' . $image_one);
            $data['image'] = 'image/petitionimg/' . $image_one;
            DB::table('petitions')->where('id', $id)->update($data);
            if ($oldimage !== null )
            unlink($oldimage);


            $notification = array(
                'message' => 'Petícia bola úspešne upravená',
                'alert-type' => 'success',
            );

            return Redirect()->route('backend-petitions')->with($notification);
        } else {
            $data['image'] = $oldimage;
            DB::table('petitions')->where('id', $id)->update($data);
            $notification = array(
                'message' => 'Petícia bola úspešne upravená',
                'alert-type' => 'success',
            );
            // $notificationTitle = array(
            //     'title' => 'HURRA',
            // );
            return Redirect()->route('backend-petitions')->with($notification);
         }

    }

    public function AdmindeletePetition($id){
        $petitions = DB::table('petitions')
        ->where('id',$id)
        ->first();
        unlink($petitions->image);
        DB::table('petitions')->where('id', $id)->delete();

        $notification = array(
            'message' => 'Petícia bola úspešne vymazaná',
            'alert-type' => 'error',
        );
        return Redirect()->route('backend-petitions')->with($notification);
    }

    public function AdmindeleteUser($id){
        DB::table('users')->where('id', $id)->delete();
        $notification = array(
            'message' => 'User bol úspešne vymazaný',
            'alert-type' => 'error',
        );
        return Redirect()->back()->with($notification);

    }

    // function getData(){
    //     return Petition::all();
    // }

}
