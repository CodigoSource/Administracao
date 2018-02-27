@extends('layouts.app')

@section('content')
    <table class="table table-bordered">
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
                <a href="{{url('administracao/pessoas/consultar/'.$pessoa->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                <a href="{{url('administracao/pessoas/contato/'.$pessoa->id)}}"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                <a href="{{url('administracao/pessoas/contratos/'.$pessoa->id)}}"><i class="fa fa-address-card" aria-hidden="true"></i></a>
            </td>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    <div class="fixed-action-btn">
        <a class="btn-floating btn-large light-blue darken-4 waves-effect" href="{{route('nova_pessoa')}}">
            <i class="large material-icons">add_box</i>
        </a>
    </div>
@endsection
