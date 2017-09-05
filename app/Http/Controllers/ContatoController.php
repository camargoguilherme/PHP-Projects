<?php
/**
 * Created by PhpStorm.
 * User: guilherme
 * Date: 19/08/17
 * Time: 19:22
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index(){
        $contatos = [
            (object) ["nome"=>"Kleber","tel"=>"4333333333"],
            (object) ["nome"=>"Joao","tel"=>"43311223322"],
            (object) ["nome"=>"Ana Clara","tel"=>"4333654787"],
            (object) ["nome"=>"Lian","tel"=>"4398763545"],

        ];

        $contato = new Contato();
        $con = $contato->lista();
        dd($con->nome);

        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $req){
        dd($req->all());
        return "Esse é o criar de ContatoController";
    }

    public function editar(){
        return "Esse é o editar de ContatoController";
    }
}