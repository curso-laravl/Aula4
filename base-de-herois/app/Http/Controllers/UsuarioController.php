<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{

    public function __construct()
    {
    //    $this->middleware('auth');
    }
    //
    public function index(Request $req)
    {
        $req->validate([
            'nome' => 'nullable|alpha|min:3|max:255'
        ]);

        $userParam=$req->nome;

        if(!$userParam){
            $users = DB::table('users')->get(); 
        }else{
            $users = DB::table('users')->where("name", "like","%$userParam%")
            ->get();
        }

        
       
        //dd($users );
        return view('usuario', ['users' => $users]);
    }

    public function index2(Request $req){
        $userParam=$req->nome;
        $req->validate([
            'nome' => 'nullable|alpha|min:3|max:255'
        ]);

        $qb =User::select();

       if($req->nome){
           $qb->where("name", "like","%$userParam%");
        }
        
        $users=$qb->get();


        return view('usuario', ['users' => $users]);
    }
}
