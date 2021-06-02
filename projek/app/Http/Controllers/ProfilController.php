<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $user = User::where('id', Auth::user()->id)->first();
        return view('profilsaya', compact('user'));
    }

    public function update(Request $request){
        
        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->nim = $request->nim;
        $user->jurusan = $request->jurusan;
        $user->email = $request->email;
        if(!empty($request->password))
        {
            $user->password = bcrypt($request->password);
        }
        $user->update();
        return redirect('profilsaya');
    }
}
