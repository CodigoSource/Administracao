@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row" id="row-main">
            <div class="col-md-2" id="sidebar">

                <div class="panel panel-default">
                    <div class="panel-heading">Opções</div>
                    <div class="panel-body">
                        <div class="btn-group-vertical" role="group" aria-label="...">
                            <a type="button" class="btn btn-default" href="{{route('nova_pessoa')}}" role="group">Nova pessoa</a>
                            <a type="button" class="btn btn-default" role="group">Novo contrato</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-10" id="content">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Pessoas</div>
                    <!-- Table -->
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Opções</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pessoas as $pessoa)
                            <tr>
                                <th scope="row">{{$pessoa->id}}</th>
                                <td>{{$pessoa->nome}}</td>
                                <td>{{$pessoa->email}}</td>
                                <td>{{$pessoa->telefone}}</td>
                                <td>{{$pessoa->celular}}</td>
                                <td>
                                    <a href="{{url('administracao/pessoas/consultar/'.$pessoa->id)}}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                    <a href="{{url('administracao/pessoas/contato/'.$pessoa->id)}}"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a>
                                    <a href="{{url('administracao/pessoas/contratos/'.$pessoa->id)}}"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span></a>
                                </td>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
