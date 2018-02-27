@extends('layouts.app')

@section('content')
    <div class="row">
        <form method="POST" action="/administracao/pessoas/gravar" class="col s12">
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s12 m12">
                    <input id="nome" name="nome" type="text" class="validate">
                    <label for="nome">Nome</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6">
                    <input id="documento" name="registro" type="text" class="validate">
                    <label for="documento">Documento</label>
                </div>
                <div class="input-field col s12 m6">
                    <input id="CPFCNPJ" type="text" name="cpfcnpj" class="validate">
                    <label for="CPFCNPJ">CPF/CNPJ</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6">
                    <input id="telefone" name="telefone" type="tel" class="validate">
                    <label for="telefone">Telefone</label>
                </div>
                <div class="input-field col s12 m6">
                    <input id="celular" name="celular" type="tel" class="validate">
                    <label for="celular">Celular</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6">
                    <input id="email" type="email" name="email" class="validate">
                    <label for="email">E-mail</label>
                </div>
                <div class="input-field col s12 m6">
                    <input id="emailsec" type="email" name="emailsec" class="validate">
                    <label for="emailsec">E-mail secundário</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m12">
                    <textarea id="observacao" type="text" name="observacao" class="materialize-textarea"></textarea>
                    <label for="observacao">Obervação</label>
                </div>
            </div>
            <div class="row">
                <button class="btn waves-effect amber darken-2 col m3 s3" name="action">Voltar
                    <i class="material-icons right">undo</i>
                </button>
                <div class="col s1 m1"></div>
                <button class="btn waves-effect red col m4 s4 " type="reset" name="action">Limpar
                    <i class="material-icons right">clear</i>
                </button>
                <div class="col s1 m1"></div>
                <button class="btn waves-effect waves-light col m3 s3" type="submit" name="action">Cadastrar
                    <i class="material-icons right">send</i>
                </button>
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
