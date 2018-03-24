@extends('layouts.app')

@section('content')

    <div class="container">
        <form method="POST" action="/administracao/pessoas/alterar">
            {{ csrf_field() }}

            <div class="form-group col-md-1">
                <label for="inputCodigo">Código</label>
                <input type="text" class="form-control" id="inputCodigo" name="id" value="{{$pessoa->id}}" readonly>
            </div>

            <div class="form-group col-md-11">
                <label for="inputName">Nome completo</label>
                <input type="text" class="form-control" id="inputName" placeholder="Nome completo" name="nome" value="{{$pessoa->nome}}" required>
            </div>

            <div class="row"></div>

            <div class="form-group col-md-2">
                <label for="inputDocumento">RG/IE</label>
                <input type="text" class="form-control" id="inputDocumento" placeholder="RG/IE" name="registro" value="{{$pessoa->registro}}" required>
            </div>

            <div class="form-group col-md-2">
                <label for="inputCpf">CPF/CNPJ</label>
                <input type="text" class="form-control" id="inputCpf" placeholder="CPF/CNPJ" name="cpfcnpj" value="{{$pessoa->cpfcnpj}}" required>
            </div>

            <div class="form-group col-md-2">
                <label for="inputTelefone">Telefone</label>
                <input type="tel" class="form-control" id="inputTelefone" placeholder="Telefone" name="telefone" value="{{$pessoa->telefone}}" required>
            </div>

            <div class="form-group col-md-2">
                <label for="inputCelular">Celular</label>
                <input type="tel" class="form-control" id="inputCelular" placeholder="Celular" name="celular" value="{{$pessoa->celular}}" required>
            </div>

            <div class="form-group col-md-4">
                <label for="inputEmail">E-mail</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="E-mail" name="email" value="{{$pessoa->email}}" required>
            </div>

            <div class="row"></div>

            <div class="form-group col-md-4">
                <label for="inputSexo">Sexo: </label>
                <label class="radio-inline"><input type="radio" id="inputSexo" name="sexo" value="M" @if ($pessoa->sexo == 'M') echo checked @endif>Masculino</label>
                <label class="radio-inline"><input type="radio" id="inputSexo" name="sexo" value="F" @if ($pessoa->sexo == 'F') echo checked @endif>Feminino</label>
                <label class="radio-inline"><input type="radio" id="inputSexo" name="sexo" value="O" @if ($pessoa->sexo == 'O') echo checked @endif>Outro</label>
            </div>

            <div class="form-group col-md-8">
                <label for="inputAbrangencia">Abrangência: </label>
                <label class="radio-inline"><input type="radio" id="inputAbrangencia" name="abrangencia" value="A" @if ($pessoa->abrangencia == 'A') echo checked @endif>Cliente</label>
                <label class="radio-inline"><input type="radio" id="inputAbrangencia" name="abrangencia" value="B" @if ($pessoa->abrangencia == 'B') echo checked @endif>Concorrente</label>
                <label class="radio-inline"><input type="radio" id="inputAbrangencia" name="abrangencia" value="C" @if ($pessoa->abrangencia == 'C') echo checked @endif>Funcionario</label>
                <label class="radio-inline"><input type="radio" id="inputAbrangencia" name="abrangencia" value="D" @if ($pessoa->abrangencia == 'D') echo checked @endif>Fornecedor</label>
            </div>
            <div class="row"></div>

            <div class="form-group col-md-12">
                    <label for="inputObservacao">Observação</label>
                    <textarea class="form-control" id="inputObservacao" placeholder="Observação" name="observacao" rows="3">{{$pessoa->observacao}}</textarea>
            </div>

            <div class="row"></div>

            <div class="btn-group btn-group-justified col-md-12" role="group" aria-label="...">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">Cancelar</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="reset" class="btn btn-default">Limpar</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="submit" class="btn btn-default">Alterar</button>
                </div>
            </div>

        </form>
    </div>
@endsection

@section('script')
    <script>
        jQuery(function ($) {
            $("#inputDocumento").mask("9.999.999");
            $("#inputCpf").mask("999.999.999-99");
            $("#inputTelefone").mask("(99) 9999-9999");
            $("#inputCelular").mask("(99) 99999-9999");
            $("#inputCep").mask("99.999-999");
        });
        $('#myTabs a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
    </script>
@endsection
