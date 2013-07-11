


<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'>
<meta http-equiv='Content-Type' content='text/html; charset=ISO-8859-1'/>
<meta http-equiv='pragma' content='no-cache'/>

<html>
<head>
    <title>Associação Nacional dos Auditores de Controle Externo dos Tribunais de Contas do Brasil</title>
    <META NAME='DESCRIPTION' CONTENT=''>
    <META NAME='ABSTRACT' CONTENT=''>
    <META NAME='KEYWORDS' CONTENT=''>
    <META NAME='AUTHOR' CONTENT='http://www.controleexterno.org'>
    <META NAME='REVISIT-AFTER' CONTENT='10 Days'>
    <META NAME='ROBOT' CONTENT='Index,Follow'>
    <link rel='icon' href='favicon.ico' type='image/x-icon'>
    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>
    <link href='./admin/sag.css' rel='stylesheet' type='text/css'>
 
<style>

    body
    {
        text-align:justify;
        font-family: Arial;
    }

    .menu
    {
        font-size: 12px;
        color: #000000;
        font-family: Arial;
    }

    .rodape
    {
         font-size: 12px;
         color: #070218;
    }

    a
    {
       text-decoration: none;
    }

    a:hover
    {
        color: #000080;
        text-decoration: none;
    }

    td.hospedagem
    {
       font-family:arial;
       font-size:10;
       vertical-align:top;
    }
    
    /* MODAL */
    .load { position: absolute; top: 50%; left: 50%; width: 88px; height: 78px; margin: -39px 0 0 -44px; z-index: 99999;}
    .bg_modal { position: absolute; top: 0; left: 0; z-index: 99998; }
    .view_modal { position: absolute; left: 50%; top: 50%; text-align: left; z-index: 99998; }
    .modal { visibility: hidden; cursor:pointer; }
</style>



<script>
//--->Função para a formatação de CPF, CEP, DATA...<---
function Mascara(tipo, campo, teclaPress)
{
    if (window.event)
    {
        var tecla = teclaPress.keyCode;
    } else {
        tecla = teclaPress.which;
    }

    var s = new String(campo.value);
    // Remove todos os caracteres à seguir: ( ) / - . e espaço, para tratar a string denovo.
    s = s.replace(/(\.|\(|\)|\/|\-| )+/g,'');

    tam = s.length + 1;

    if ( tecla != 9 && tecla != 8 ) {
        switch (tipo)
        {
       case 'CPF' :
            if (tam > 3 && tam < 7)
                campo.value = s.substr(0,3) + '.' + s.substr(3, tam);
            if (tam >= 7 && tam < 10)
                campo.value = s.substr(0,3) + '.' + s.substr(3,3) + '.' + s.substr(6,tam-6);
            if (tam >= 10 && tam < 12)
                campo.value = s.substr(0,3) + '.' + s.substr(3,3) + '.' + s.substr(6,3) + '-' + s.substr(9,tam-9);
        break;

        case 'TEL' :
            if (tam > 2 && tam < 4)
                campo.value = '(' + s.substr(0,2) + ') ' + s.substr(2,tam);
            if (tam >= 7 && tam < 11)
                campo.value = '(' + s.substr(0,2) + ') ' + s.substr(2,4) + '-' + s.substr(6,tam-6);
        break;

        case 'DATA' :
            if (tam > 2 && tam < 4)
                campo.value = s.substr(0,2) + '/' + s.substr(2, tam);
            if (tam > 4 && tam < 11)
                campo.value = s.substr(0,2) + '/' + s.substr(2,2) + '/' + s.substr(4,tam-4);
        break;

        case 'CEP' :
            if (tam > 5 && tam < 7)
                campo.value = s.substr(0,5) + '-' + s.substr(5, tam);
        break;
        }
    }
}

//--->Função para verificar se o valor digitado é número...<---
function digitos(event)
{
   if (window.event)
   {
       // IE
       key = event.keyCode;
   }
   else if ( event.which )
   {
       // netscape
       key = event.which;
   }
   if ( key != 8 || key != 13 || key < 48 || key > 57 )
       return ( ( ( key > 47 ) && ( key < 58 ) ) || ( key == 8 ) || ( key == 13 ) );
   return true;
}


function validaForm1(id)
{
      if (document.inscricao.nome_completo.value=="")
      {
         alert ("O campo Nome é obrigatório. Favor preencher.");
         document.inscricao.nome_completo.focus();
         return false;
      }

      if (document.inscricao.nacionalidade.value=="")
      {
        alert ("O campo Nacionalidade é obrigatório. Favor preencher.");
        document.inscricao.nacionalidade.focus();
        return false;
      }
      
      if ( ( document.inscricao.id_sexo[0].checked == false )
      && ( document.inscricao.id_sexo[1].checked == false ) )
      {
        alert ("O campo Sexo é obrigatório. Favor preencher.");
        return false;
      }
      
      if (document.inscricao.data_nascimento.value=="")
      {
        alert ("O campo Data de Nascimento é obrigatório. Favor preencher.");
        document.inscricao.data_nascimento.focus();
        return false;
      }
      
      if (document.inscricao.endereco.value=="")
      {
        alert ("O campo Endereço é obrigatório. Favor preencher.");
        document.inscricao.endereco.focus();
        return false;
      }
      
      if (document.inscricao.cidade.value=="")
      {
        alert ("O campo Cidade é obrigatório. Favor preencher.");
        document.inscricao.cidade.focus();
        return false;
      }
      
      if (document.inscricao.id_estado.value=="")
      {
        alert ("O campo Estado é obrigatório. Favor preencher.");
        document.inscricao.id_estado.focus();
        return false;
      }

      if (document.inscricao.id_pais.value==0)
      {
        alert ("O campo País é obrigatório. Favor preencher.");

        return false;
      }
      
      if (document.inscricao.ddd.value=="")
      {
        alert ("O campo DDD é obrigatório. Favor preencher.");
        document.inscricao.ddd.focus();
        return false;
      }
      
      if (document.inscricao.telefone.value=="")
      {
        alert ("O campo Telefone é obrigatório. Favor preencher.");
        document.inscricao.telefone.focus();
        return false;
      }


           //validar email(verificao de endereco eletrônico)
          parte1 = document.inscricao.email.value.indexOf("@");
          parte2 = document.inscricao.email.value.indexOf(".");
          parte3 = document.inscricao.email.value.length;
          if (!(parte1 >= 3 && parte2 >= 1 && parte3 >= 9)) {
                    alert ("E-mail inválido. Favor verificar.");
                    document.inscricao.email.focus();
                    return false;
          }

         //validar email(verificao de endereco eletrônico)
          parte12 = document.inscricao.email2.value.indexOf("@");
          parte22 = document.inscricao.email2.value.indexOf(".");
          parte32 = document.inscricao.email2.value.length;
          if (!(parte12 >= 3 && parte22 >= 1 && parte32 >= 9)) {
                    alert ("Confirmação de E-mail inválido. Favor verificar.");
                    document.inscricao.email2.focus();
                    return false;
          }

         email = document.inscricao.email.value;
         email2 = document.inscricao.email2.value;
         if (email != email2)
         {
            alert ("Os emails digitados não são iguais. Favor corrigir.");
         }

   return true;

}

</script> 


                    <td colspan=4 style="background: #FFFFFF url('./port/certificado.jpg') no-repeat 650px bottom;">
        
                            <form name='inscricao' action='/thiago/AA_webfilers/antc/trunk/controleexterno.org/index.php?secao=inscricoes&id_idioma=&acao=cadastrar_inscricoes' method='post' onSubmit="return validaForm1()">
                            <input type=hidden name='convidado' value=''>
                                    <table cellspacing='0' cellpadding='0' align='center' width='100%' border='0' style="padding-left:auto">
                                    <tr>
                                        <td colspan=4 style="padding: 10px 34px 0px 32px; background:url('./port/topo_inscricao_conteudo.gif') no-repeat; color:black;" width='1006' height='27'>
                                            <table cellspacing='0' cellpadding='0' border=0 width=100%>
                                                <tr>
                                                    <td><font style='font-size:14px;color:white;'><b>Formulário de Inscrição</b> </font></td>
                                                    <td align=right><font style='font-size:12px;'><b></b> </font></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                        <tr valign='top'>
                                            <td style="padding: 10px 0px 0px 0px;background:url('./port/meio_inscricao_conteudo.gif') repeat-y; color:black;" width='1006' height='1'>
                                                <table width='100%' cellspacing='0' cellpadding='0' align=left  border='0'>
                                                    <tr>
                                                        <td valign='top' style="padding: 0px 0px 0px 25px;" color='#000000'>
                                                <!-- Inicio do Body Principal -->
                                                            <table align='center' border='0' width='100%' cellspacing='0' >
                                                            <tr height='5'>
                                                                <td align=center colspan='2'><font face='arial' size='2'> </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <table border='0' width='98%' cellspacing='7' style='padding: 3px 3px 3px 3px'>

                                                                        <tr>
                                                                            <td align='left' colspan=4><strong>Para se associar preencha os dados abaixo. Todos os campos são de preenchimento obrigatório.
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan=4> &nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> <strong>Dados Pessoais</strong></td> <td colspan=3> <hr> </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td align='left' width='20%'>Nome Completo</b>
                                                                            </td>
                                                                            <td align='left' class='style1'>
                                                                                <input type='text' value='' name=nome_completo style='width:167px;' maxlenght='350'>
                                                                            </td>
                                                                        <td width='20%'>Estado Civil:</td>
                                                                        
                                                                        <td align='left'>
                                                                            <select name=id_estado_civil style='width:167px;'>
                                                                                <option value='0' selected> Selecionar </option><option value='2'> Casado(a) </option> <option value='3'> Divorciado(a) </option> <option value='5'> Separado(a) </option> <option value='1'> Solteiro(a) </option> <option value='4'> Viuvo(a) </option> 
                                                                            </select>
                                                                        </td>

                                                                        
                                                                        </tr>
                                                                        <tr>
                                                                            <td align='left' width='20%' id='cpf' style='display:;'>CPF:</b></td>
                                                                            <td align='left' width='20%' class='style1' id='cpf_1' style='display:;'><input type='text'  value='' name=cpf style='width:167px;' maxlength='14' onKeyPress="return digitos(event, this);" onKeyUp="Mascara('CPF',this,event);"></td>

                                                                        <td align='left'>Data de Nascimento:</td><td align='left'><input type='text' value='dd/mm/aaaa' name=data_nascimento style='width:167px;' maxlength='10' onKeyPress="return digitos(event, this);" onclick="javascript:this.value=''" onKeyUp="Mascara('DATA',this,event);"></td>
                                                  </tr>
                                            <tr>
                                                <td align='left'>Nacionalidade</td>
                                                <td align='left'>
                                                    <input type='radio' class=radio value='1' name=nacionalidade_brasileira > Brasileira
                                                    <input type='radio' class=radio value='0' name=nacionalidade_brasileira > Outra 
                                                </td>
                                                <td align='left' colspan=2>
                                                    Especificar: <input type='text' value='' maxlength='30' name=outra_nacionalidade style='width:167px;'> 
                                                </td>
                                            </tr>                                             
                                            <tr>
                                                <td align='left'>Naturalidade</td>
                                                <td align='left'>
                                                    <input type='text' value='' maxlength='30' name=naturalidade style='width:167px;'> 
                                                </td>
                                                <td align='left'>
                                                    Sexo
                                                </td>
                                                <td align='left'>
                                                    <input class=radio type='radio' value='1' name=id_sexo > Masculino
                                                    <input class=radio type='radio' value='2' name=id_sexo > Feminino
                                                </td>
                                            </tr>
                                            
                                                <tr>
                                        <td align='left' colspan='10' style='padding-left: 209px'>
                                            <table align=left cellpadding=0 cellspacing=0 border=0>
                                                <tr>
                                                <td height='29' width='6' style="padding: 0px;background:url('./admin/imagens/esq_botao.jpg') no-repeat;"></td>
                                                <td style="width:20; padding:0px; background:url('./admin/imagens/meio_botao.jpg') repeat-x; color:black;">
                                                        <input type='submit' value=Enviar style='width: 50px;border: 0px; cursor: pointer;' name='Enviar'>
                                                    </td>
                                                    <td height='29' width='6' style="padding: 0px;background:url('./admin/imagens/dir_botao.jpg') no-repeat;"></td>
                                                    <td width='5'></td>
                                                                <td height='29' width='6' style="padding: 0px;background:url('./admin/imagens/esq_botao.jpg') no-repeat;"></td>
                                                                <td style="width:20;padding: 0px;background:url('./admin/imagens/meio_botao.jpg') repeat-x; color:black;">
                                                                    <input type='reset' value=Limpar style='width: 50px;border: 0px; cursor: pointer;' name='limpar'>
                                                                </td>
                                                                <td height='29' width='6' style="padding: 0px;background:url('./admin/imagens/dir_botao.jpg') no-repeat;"></td>
                                                            </tr>
                                                </form>
                                            <!-- Fim do Body Principal -->
                                                         </td>
                                                        </tr>
                                                </table>
                                            </td>
                                            </tr>
                                            <tr>
                                                    <td align='right' style="background:url('./port/rodape_inscricao_conteudo.gif') no-repeat; color:pink;" width='1006' height='16'>
                                                    </td>
                                            </tr>
                                           </table>
                                </td>
                        </tr>
                        <tr height='30' bgcolor='#FFFFFF'>
                <td colspan='4' valign=middle align='left' style='width:734;height:10; padding-top:1' class='menu'>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
            </tr>
                        <tr bgcolor='#062CB3'>
                                <td colspan='4' align='right' height='50' style='padding: 0px 15px 0px 0px;'>
                                        <font color=white>
ANTC | Todos os direitos reservados.
                                </td>
                        </tr>
                </table>
        </td>
    </tr>
</table>


        </body>
</html>