<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contacts;

class IndexController extends Controller
{
    public function index()
    {
        $authUser = Auth::user();
        $contacts = Contacts::find(1);

        if($authUser){
            return view('index')->with([
                'authUser' => $authUser,
                'contacts' => $contacts,
            ]);
        }else{
            return view('index')->with([
                'contacts' => $contacts,
            ]);
        }
    }
}
