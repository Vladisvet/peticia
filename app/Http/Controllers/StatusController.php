<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StatusController extends Controller
{
        //Controller for status_petition
        public function StatusPetition(Request $request )
        {
            $data = array();
            $data['user_id'] = Auth::user()->id;
            $data['status_petition'] = $request->status_petition;
            DB::table('status_petitions')->insert($data);

            $notification = array(
                'message' => 'Petícia bola aktivovaná',
                'alert-type' => 'success',
            );
            return Redirect()->route('user.index')->with($notification);
        }
}
