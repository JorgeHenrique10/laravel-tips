<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function session()
    {
        //usando Facades com array add
        Session::put(['nome' => 'Jorge', 'sobrenome' => 'Silva', 'email' => 'jorge@gmail.com']);
        Session::put('idade', 32);
        Session::put('deletar', 'nao vou existir');
        Session::put('comparar', null);

        //usando helper add
        session()->put(['carrinho' => [['id' => 1, 'produtoName' => 'Celular', 'qtd' => '1', 'valor' => 999]]]);
        session()->push('carrinho', ['id' => 2, 'produtoName' => 'Celular', 'qtd' => '1', 'valor' => 999]);

        echo "<h1>Nome: " . Session::get('nome') . " e Email: " . session()->get('email') . "</h1>";

        //deletando a variavel
        Session::forget('deletar');

        //comparacao
        if (Session::has('comparar')) {
            echo '<h1>Existe tem valor na variavel</h1>';
        } else {
            echo '<h1>Nao tem valor na variavel</h1>';
        }

        if (Session::exists('comparar')) {
            echo '<h1>Existe a variavel</h1>';
        } else {
            echo '<h1>Nao existe a variavel</h1>';
        }

        echo '<pre>';
        var_dump(Session::all());
    }
}
