<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function jogadores(Request $request){
        $quantidade = $request->input('quantidade');
        $jogadores = array(
            $request->input('jog1'),
            $request->input('jog2'),
            $request->input('jog3'), 
            $request->input('jog4'), 
            $request->input('jog5'), 
            $request->input('jog6'), 
            $request->input('jog7'), 
            $request->input('jog8'), 
            $request->input('jog9'), 
            $request->input('jog10'));
        $separacao = array_rand($jogadores, $quantidade);
        $time = array_values( array_intersect_key( $jogadores, array_flip( array_rand( $jogadores, $quantidade ) ) ) );
        $time2 = array_values( array_intersect_key( $jogadores, array_flip( array_rand( $jogadores, $quantidade ) ) ) );
        $conversao = implode(" | ", $time);
        $conversao2 = implode(" | ", $time2);

        return view('resultado',compact('conversao','conversao2'));


    }
}
