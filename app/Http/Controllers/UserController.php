<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Username;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function userPanel() {
        return view('user/userPanel');
    }

    public function editUser(Request $request) {
        $user = User::find(Auth::id());
        $user->username()->create([
            'username'=>$request->username,
        ]);
        
        //  ↑ Sono equivalenti sopra la BP ↓
        
        // $username = Username::create([
        //     'username' => $request->username,
        //     'user_id' => Auth::id(),
        // ]);
        return redirect(route('homepage'))->with('message', Auth::user()->name." Il tuo profilo è stato aggiornato");
    }
}
