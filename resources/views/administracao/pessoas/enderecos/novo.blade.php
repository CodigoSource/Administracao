@extends('layouts.app')

@section('content')

    <div class="container">
        <form method="POST" action="/administracao/pessoas/enderecos/gravar">
            {{ csrf_field() }}

            <div class="form-group col-md-1">
                <label for="inputId">ID</label>
                <input type="text" class="form-control" id="inputId" name="pessoa" value="{{$pessoa->id}}" disabled>
            </div>

            <div class="form-group col-md-11">
                <label for="inputName">Nome completo</label>
                <input type="text" class="form-control" id="inputName" placeholder="Nome completo" name="nome" value="{{$pessoa->nome}}" disabled>
            </div>

            <div class="row"></div>

            <div class="form-group col-md-2">
                <label for="inputCep">CEP</label>
                <input type="text" class="form-control" id="inputCep" placeholder="CEP" name="cep">
            </div>

            <div class="form-group col-md-4">
                <label for="inputRua">Rua</label>
                <input type="text" class="form-control" id="inputRua" placeholder="Rua" name="rua">
            </div>

            <div class="form-group col-md-3">
                <label for="inputBairro">Bairro</label>
                <input type="text" class="form-control" id="inputBairro" placeholder="Bairro" name="bairro">
            </div>

            <div class="form-group col-md-2">
                <label for="inputCidade">Cidade</label>
                <input type="text" class="form-control" id="inputCidade" placeholder="Cidade" name="cidade">
            </div>

            <div class="form-group col-md-1">
                <label for="inputUf">UF</label>
                <input type="text" class="form-control" id="inputUf" placeholder="UF" name="uf">
            </div>

            <div class="row"></div>

            <div class="form-group col-md-12">
                <label for="inputObservacao">Observação</label>
                <textarea class="form-control" id="inputObservacao" placeholder="Observação" name="observacao" rows="3"></textarea>
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
                    <button type="submit" class="btn btn-default">Continuar</button>
                </div>
            </div>

        </form>
    </div>
@endsection

@section('script')
    <script>
        jQuery(function ($) {
            $("#inputCep").mask("99.999-999");
        });
    </script>

    <script type="text/javascript" >

        function limpa_formulário_cep() {
            document.getElementById('inputRua').value=("");
            document.getElementById('inputBairro').value=("");
            document.getElementById('inputCidade').value=("");
            document.getElementById('inputUF').value=("");
        }

        function meu_callback(conteudo) {
            if (!("erro" in conteudo)) {
                document.getElementById('inputRua').value=(conteudo.logradouro);
                document.getElementById('inputBairro').value=(conteudo.bairro);
                document.getElementById('inputCidade').value=(conteudo.localidade);
                document.getElementById('inputUF').value=(conteudo.uf);
            }
            else {
                limpa_formulário_cep();
                alert("CEP não encontrado.");
            }
        }

        function pesquisacep(valor) {
            var cep = valor.replace(/\D/g, '');

            if (cep != "") {
                var validacep = /^[0-9]{8}$/;
                if(validacep.test(cep)) {
                    document.getElementById('inputRua').value="...";
                    document.getElementById('inputBairro').value="...";
                    document.getElementById('inputCidade').value="...";
                    document.getElementById('inputUF').value="...";

                    var script = document.createElement('script');
                    script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';
                    document.body.appendChild(script);
                }
                else {
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            }
            else {
                limpa_formulário_cep();
            }
        };
    </script>

@endsection
