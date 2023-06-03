<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\valor_nv1;
use Illuminate\Support\Facades\Auth;




class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


     function ShowNivel1()
    {
        $user = Auth::user();
        $data = valor_nv1::all()->where('ID_MASTER','=', $user->id);
        
        return view('layouts/nivel1', ['valor_nv1'=>$data]);
        
    }

    function show()
    {
        $user = Auth::user();
        $data = valor_nv1::where('ID_MASTER','=', $user->id)->get();
        return view('layouts/nivel1', ['valor_nv1'=>$data, 'Auth'=>$user]);
        
    }
    
    
   
}
