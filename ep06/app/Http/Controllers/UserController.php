<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->first();

        echo "<h1>Informações do Usuário</h1>";
        echo "Nome: {$user->name} <br/> Email: {$user->email} <br/>";

        $endereco = $user->endereco()->first();

        if ($endereco) {

            echo "<h1>Informações Endereço</h1>";
            echo "Rua: {$endereco->rua} <br/> Bairro: {$endereco->bairro} <br/> Cidade: {$endereco->cidade} <br/>";
        }

        $artigos = $user->artigo()->get();

        if ($artigos) {
            echo "<h1>Informações Artigo</h1>";
            foreach ($artigos as $artigo) {
                echo "Titulo: {$artigo->titulo} <br/> Conteúdo: {$artigo->conteudo} <br/>";
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
