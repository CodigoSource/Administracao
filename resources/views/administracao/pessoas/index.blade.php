@extends('layouts.app')

@section('content')
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Projetos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contratos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Financeiro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Fiscal</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Código Source</h5>
                        <p class="card-text">Situação: Online</p>
                        <p class="card-text">Acessos: 5</p>
                        <p class="card-text"><small class="text-muted">Ultima atualização 3 minutos atrás.</small></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">MProtect</h5>
                        <p class="card-text">Situação: Online</p>
                        <p class="card-text">Acessos: 47</p>
                        <p class="card-text"><small class="text-muted">Ultima atualização 2 minutos atrás.</small></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Contabilidade Starosky</h5>
                        <p class="card-text">Situação: Online</p>
                        <p class="card-text">Acessos: 30</p>
                        <p class="card-text"><small class="text-muted">Ultima atualização 5 minutos atrás.</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
