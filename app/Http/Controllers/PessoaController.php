<?php

namespace App\Http\Controllers;

use App;
Use DB;
use Illuminate\Http\Request;
use Mockery\Exception;

class PessoaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas = App\Pessoa::all();
        return view('administracao.pessoas.index')->with(compact('pessoas','pessoas'));

    }

    public function nova()
    {
        return view('administracao.pessoas.nova');
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
        $dados = $request->all();
        $pessoa = App\Pessoa::create($dados);
        //$dados['pessoa'] = $pessoa->id;
        //App\PessoaEndereco::create($dados);

        return redirect()->route('pessoas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $pessoa = App\Pessoa::find($id);
        $enderecos = App\PessoaEndereco::where('pessoa',$id)->get();
        return view('administracao.pessoas.editar')->with(compact('pessoa','pessoa', 'enderecos', 'enderecos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        if (!($cliente = App\Pessoa::find($request->id))) {
            throw new ModelNotFoundException("Pessoa não encontrada.");
        }
        $pessoa = Pessoa::find($request->id);
        $pessoa->fill($request->all());
        $pessoa->save();

        return redirect()->route('pessoas');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, App\Pessoa $pessoa)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(App\Pessoa $pessoa)
    {
        //
    }
}
