<div class="listar">
         @yield('listar')
        <table class="table table-striped">
            <thead>
              <tr>
                <th width='10%'>Código</th>
                <th width='20%'>Nome</th>
                <th width='10%'>CPF</th>
                <th width='10%'>Dt. Nasc.</th>
                <th width='15%'>E-mail</th>
                <th width='10%'>Telefone</th>
                <th width='20%'>Endereço</th>
                <th width='3%' align='center'>#</th>
              </tr>
            </thead>
            <tbody class='bDinamica' id="dinamica">
              
            </tbody>
          </table>
</div>
<script  type="text/javascript" >
    //validações
    window.onload = function(){
        desabilitaBtnSalvar();
        habilitaBtnSalvar();        
    }
    function desabilitaBtnSalvar(){
        $("#pesquisar").click(function(){
            $("#salvar").hide();
            $("#id_cliente").prop("disabled", false);
            pesquisar();
        });
        
    }
    function habilitaBtnSalvar(){
        $("#novo").click(function(){
            $("#salvar").show();
            $("#id_cliente").prop("disabled", true);
        });
    }
    function pesquisar(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        //pega o valor das variaveis
        var token       = $("input[type=hidden][name=_token]").val();
        var id_cliente  = $("#id_cliente").val();
        var nome        = $("#nome").val();
        var cpf         = $("#cpf").val();
        var data_nasc   = $("#data_nasc").val();
        var email       = $("#email").val();
        var telefone    = $("#telefone").val();
        var endereco    = $("#endereco").val();
        
        $.ajax({
                type:"post",
                url:"{!! URL::to('cliente/pesquisar') !!}",
                dataType: 'JSON',
                data: {
                    '_token': token,
                    'id_cliente': id_cliente,
                    'nome': nome,
                    'cpf': cpf,
                    'data_nasc': data_nasc,
                    'email': email,
                    'telefone': telefone,
                    'endereco': endereco
                },
                success:function(data){   
                    $(".remove").each(function(){
                        $(this).remove();
                    });
                    for (var i = 0; i < data.length; i++) {
                        
                        var linha = $('<tr>');
                        var ancora = $("<a>");                        
                        linha.prop("class", "remove editar");
                        
                        var stringCodigo = "<a href="+ data[i].id + "/edit>"+ data[i].id+" </a>";
                        var colunaCodigo = $('<td>').html(stringCodigo);
                        
                        var stringNome = "<a href=" + data[i].id + "/edit>" + data[i].nome + " </a>";
                        var colunaNome = $('<td>').html(stringNome);
                        
                        var stringCpf = "<a href=" + data[i].id + "/edit>" + data[i].cpf + " </a>";
                        var colunaCpf = $('<td>').html(stringCpf);
                        
                        var stringData = "<a href=" + data[i].id + "/edit>" + data[i].data_nasc + " </a>";
                        var colunaData = $('<td>').html(stringData);
                        
                        var stringEmail = "<a href=" + data[i].id + "/edit>" + data[i].email + " </a>";
                        var colunaEmail = $('<td>').html(stringEmail);
                        
                        var stringTelefone = "<a href=" + data[i].id + "/edit>" + data[i].telefone + " </a>";
                        var colunaTelefone = $('<td>').html(stringTelefone);
                        
                        var stringEndereco = "<a href=" + data[i].id + "/edit>" + data[i].endereco + " </a>";
                        var colunaEndereco = $('<td>').html(stringEndereco);
                                                
                        linha.append(colunaCodigo);
                        
                        linha.append(colunaNome);
                        linha.append(colunaCpf);
                        linha.append(colunaData);
                        linha.append(colunaEmail);
                        linha.append(colunaTelefone);
                        linha.append(colunaEndereco);
                        
                        $('#dinamica').append(linha);
                    }
    
                },
                error:function(){                    
                        alert("Ocorreu algum problema entre em contato como suporte");                    
                }
            });
    }   
 </script>   

