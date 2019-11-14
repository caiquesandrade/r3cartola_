<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\ResetPasswordController;
use App\Usuario;
use Illuminate\Http\Request;

class TimesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }
    public function login()
    {
        return view('login');
    }
    public function pesquisaTime()
    {
        return view('pesquisaTime');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario;
        $usuario->nome        = $request->nome;
        $usuario->celular   = $request->celular;
        $usuario->email    = $request->email;
        $usuario->cpf       = $request->cpf;
        $usuario->password  =   $request->password;
        $usuario->save();

        return redirect()->route('login')->with('alert-success', 'Seu cadastro foi realizado com sucesso !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return redirect()->route('welcome.index')->with('alert-success','Usuário deletado com sucesso !');
    }

    public function criarLogin()
    {
        return view('criarLogin');
    }

    public function buscarTime(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $time = $request->name;

        $response = $client->request('GET', 'https://api.cartolafc.globo.com/times?q='.$time);
        $time = $response->getBody();
        return $time;

    }
}
