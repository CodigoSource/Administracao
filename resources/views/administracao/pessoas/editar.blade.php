@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <form method="POST" action="/administracao/pessoas/alterar">
            {{ csrf_field() }}
            <div class="form-row">
                <div class="form-group col-md-1">
                    <label for="inputID">ID</label>
                    <input type="text" id="inputID" name="id" class="form-control" readonly value="{{$pessoa->id}}">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputName">Nome</label>
                    <input type="text" id="inputName" name="nome" class="form-control" required value="{{$pessoa->nome}}">
                </div>

                <div class="form-group col-md-2">
                    <label for="inputDocumento">Documento</label>
                    <input type="text" id="inputDocumento" name="registro" class="form-control" required value="{{$pessoa->registro}}">
                </div>

                <div class="form-group col-md-2">
                    <label for="inputCpf">CPF</label>
                    <input type="text" id="inputCpf" name="cpfcnpj" class="form-control" required value="{{$pessoa->cpfcnpj}}">
                </div>

                <div class="form-group col-md-2">
                    <label for="inputTelefone">Telefone</label>
                    <input type="tel" id="inputTelefone" name="telefone" class="form-control" value="{{$pessoa->telefone}}">
                </div>

                <div class="form-group col-md-2">
                    <label for="inputCelular">Celular</label>
                    <input type="tel" id="inputCelular" name="celular" class="form-control" required value="{{$pessoa->celular}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail">E-mail principal</label>
                    <input type="email" id="inputEmail" name="email" class="form-control" required value="{{$pessoa->email}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmailSec">E-mail secundario</label>
                    <input type="email" id="inputEmailSec" name="emailsec" class="form-control" value="{{$pessoa->emailsec}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="sexo">Genero</label>
                    <select class="form-control" id="sexo" name="sexo" size="3" required>
                        <option value="F" @if ($pessoa->sexo == 'F') echo selected @endif >Feminino</option>
                        <option value="M" @if ($pessoa->sexo == 'M') echo selected @endif>Masculino</option>
                        <option value="O" @if ($pessoa->sexo == 'O') echo selected @endif>Outro</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="sexo">Abrangencia</label>
                    <br>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary @if ($pessoa->ehcliente == 'S') echo active @endif">
                            <input type="checkbox" value="S" name="ehcliente" @if ($pessoa->ehcliente == 'S') echo checked="checked" @endif > Cliente
                        </label>
                        <label class="btn btn-secondary @if ($pessoa->ehfuncionario == 'S') echo active @endif " >
                            <input type="checkbox" value="S" name="ehfuncionario" @if ($pessoa->ehfuncionario == 'S') echo checked="checked" @endif > Funcionário
                        </label>
                        <label class="btn btn-secondary @if ($pessoa->ehfornecedor == 'S') echo active @endif" >
                            <input type="checkbox" value="S" name="ehfornecedor" @if ($pessoa->ehfornecedor == 'S') echo checked="checked" @endif > Fornecedor
                        </label>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="informacaoPessoa">Complemento da pessoa</label>
                    <textarea class="form-control" id="informacaoPessoa" name="complemento" rows="3">{{$pessoa->complemento}}</textarea>
                </div>
            </div>
            <div class="btn-group col-md-12" role="group">
                <a href="{{url('/administracao/pessoas')}}" class="btn btn-danger mb-2 col-md-6">Voltar</a>
                <a href="{{url('/administracao/pessoas/enderecos/novo/'.$pessoa->id)}}" class="btn btn-info mb-2 col-md-6">Adicionar Endereço</a>
                <button type="submit" class="btn btn-primary mb-2 col-md-6">Salvar</button>
            </div>
            <div class="form-row">
                @foreach($enderecos as $endereco)
                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            {{$endereco->cidade}} - {{$endereco->uf}}
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{$endereco->rua}}</li>
                            <li class="list-group-item">{{$endereco->bairro}}</li>
                            <li class="list-group-item">{{$endereco->numero}}</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">Editar</a>
                            <a href="#" class="card-link">Cancelar</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </form>
    </div>
@endsection