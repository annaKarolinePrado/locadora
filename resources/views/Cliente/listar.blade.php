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
            <tbody class='bDinamica'>
              <tr>
              </tr>
                
              <tr>                
              </tr>
              
              <tr>                
              </tr>
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
                    alert("Deu certo");
                },
                error:function(){                    
                        alert("Ocorreu algum problema entre em contato como suporte");                    
                },
            });
    }   
 </script>   

