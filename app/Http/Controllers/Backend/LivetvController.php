<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class LivetvController extends Controller
{
    public function __construct(){
		$this->middleware('auth');
	}

    //LiveTV setting
    public function LiveTvSetting(){
        $petition = DB::table('petitions')->where('user_id',Auth::user()->id)->get();
        return view('user.index', compact('petition'));
        return view('user.index.modal_livetv', compact('petition'));
    }

    public function LiveTvUpdate(Request $request, $id){
        $data = array();
        $data['user_id'] = Auth::id();
        $data['embed_code'] = $request->embed_code;

        DB::table('petitions')->where('id',$id)->update($data);

        // $notification = array(
        //     'message'=>'LiveTv bolo úspešne zmenené',
        //     'alert-type'=>'success',
        // );
        // return Redirect()->route('seo.setting')->with($notification);
        return Redirect()->route('user.index');
    }

    public function LiveTvActive(Request $request, $id){
        DB::table('petitions')->where('id', $id)->update(['status_video'=>1]);

        $notification = array(
        'message'=>'Video bolo úspešne aktivované',
        'alert-type'=>'success',
        );
        return Redirect()->back()->with($notification);
    }
    public function LiveTvDeActive(Request $request, $id){
        DB::table('petitions')->where('id', $id)->update(['status_video'=>0]);

        $notification = array(
        'message'=>'Video bolo úspešne deaktivované',
        'alert-type'=>'success',
        );
        return Redirect()->back()->with($notification);
    }



}
