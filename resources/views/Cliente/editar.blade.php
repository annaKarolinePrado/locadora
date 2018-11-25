@extends("template.app")
@section("content")
<link type="text/css" rel="stylesheet" href = {{ url('css/styleCliente.css') }} >
<div class = "cliente" >
    <form action= {{ url('cliente/salvar')}} method="post">
        {{csrf_field()}}
        <div class = "subMenu">            
            <button type="button" id="pesquisar" class="btn btn-primary btn-subMenu btn-md">Pesquisar</button>
            <button type="button" id="novo" class="btn btn-primary btn-subMenu btn-md">Novo</button>
            <button type="submit" id="salvar"class="btn btn-primary btn-subMenu btn-md">Salvar</button>
        </div>
        <div class="cadastro">
            <table class="table">
                <tbody>
                    <tr>
                        <td class="tamanhoTD">
                            <label class="label-form ordenacao">Código:</label>
                            <span class="spam-form ordenacao"><input type="text" disabled="true" class="form-control" id="id_cliente" name="id_cliente"></span>
                        </td>
                        <td  class="tamanhoTD">
                            <label class="label-form">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome">
                        </td>
                        <td  class="tamanhoTD">
                            <label class="label-form">CPF:</label>
                            <span class="spam-form"><input type="text" class="form-control" id="cpf" name="cpf"></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="tamanhoTD">
                            <label class="label-form ordenacao">Data de nascimento:</label>
                            <span class="spam-form ordenacao"><input type="date" class="form-control" id="data_nasc" name="data_nasc"></span>
                        </td>
                        <td class="tamanhoTD">
                            <label class="label-form">E-mail:</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </td> 
                        <td class="tamanhoTD">
                            <label class="label-form">Telefone:</label>
                            <span class="spam-form"><input type="text" class="form-control" id="telefone" name="telefone"></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="tamanhoTD"> &nbsp; </td>                        
                        <td class="tamanhoTD">
                            <label class="label-form">Endereço:</label>
                            <input type="text" class="form-control" id="endereco" name="endereco">
                        </td> 
                        <td class="tamanhoTD"> &nbsp; </td>
                    </tr>                  
                </tbody>
            </table>
        </div>        
    </form>
    
    <div class="listar">
        @include('cliente.listar')
    </div>
</div>
@endsection
