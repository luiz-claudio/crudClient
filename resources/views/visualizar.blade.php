@extends('layout')

@section('content')


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<h1>Atualizar Cliente</h1>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="/atualizar/{{$item->id}}" method="post">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Nome</label>
                            <input name="nome" class="form-control" value="{{ $item->nome }}" />
                        </div>
                        <div class="form-group">
                            <label>CPF</label>
                            <input name="cpf" class="form-control" value="{{$item->cpf}}" />
                        </div>
                        <div class="form-group">
                            <label>Telefone</label>
                            <input name="telefone" class="form-control" value="{{$item->telefone}}" />
                        </div>
                        <div class="form-group">
                            <label>Cep</label>
                            <input name="cep" type="text" class="form-control" id="cep" onblur="pesquisacep(this.value);"  value="{{$item->cep}}"  />


                    </div>
                    <div class="form-group">
                        <label>logradouro</label>
                        <input name="logradouro" type="text" class="form-control" id="rua"  value="{{$item->logradouro}}"  />
                    </div>

                        <div class="form-group">
                            <label>numero</label>
                            <input name="numero" class="form-control" value="{{$item->numero}}"  />

                        </div>


                        <div class="form-group">

                            <label>Complemento</label>
                            <input name="complemento" type="text" class="form-control"  value="{{$item->complemento}}" />

                        </div>
                        <div class="form-group">

                            <label>Bairro</label>
                            <input name="bairro" class="form-control" id="bairro"  value="{{$item->bairro}}"/>

                        </div>
                        <div class="form-group">

                            <label>Localidade</label>
                            <input name="localidade" class="form-control" id="cidade"  value="{{$item->localidade}}" />

                        </div>
                        <div class="form-group">

                            <label>Uf</label>
                            <input name="uf" class="form-control" id="uf"  value="{{$item->uf}}" />

                        </div>
                    <div class="form-group">

                        <label>IBGE</label>
                        <input name="ibge" type="text" class="form-control" id="ibge"  value="{{$item->ibge}}" />

                    </div>




                    <button type="submit" class="btn btn-primary">
                        Atualizar
                    </button>



                 </div>
            </form>
            </div>
        </div>
    </div>
@endsection

@section('js')

    <!-- Adicionando Javascript -->
    <script type="text/javascript" >

        function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
        }

        function meu_callback(conteudo) {
            if (!("erro" in conteudo)) {
                //Atualiza os campos com os valores.
                document.getElementById('rua').value=(conteudo.logradouro);
                document.getElementById('bairro').value=(conteudo.bairro);
                document.getElementById('cidade').value=(conteudo.localidade);
                document.getElementById('uf').value=(conteudo.uf);
                document.getElementById('ibge').value=(conteudo.ibge);
            } //end if.
            else {
                //CEP não Encontrado.
                limpa_formulário_cep();
                alert("CEP não encontrado.");
            }
        }

        function pesquisacep(valor) {

            //Nova variável "cep" somente com dígitos.
            var cep = valor.replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if(validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    document.getElementById('rua').value="...";
                    document.getElementById('bairro').value="...";
                    document.getElementById('cidade').value="...";
                    document.getElementById('uf').value="...";
                    document.getElementById('ibge').value="...";

                    //Cria um elemento javascript.
                    var script = document.createElement('script');

                    //Sincroniza com o callback.
                    script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                    //Insere script no documento e carrega o conteúdo.
                    document.body.appendChild(script);

                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        };

    </script>

@endsection
