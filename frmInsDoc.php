<!DOCTYPE html>
<?php
    /*session_start();
    if (!isset($_SESSION['user'])) //AND (!isset($_SESSION[nome])) ) 
        Header("Location: index.html"); */

     require_once('conexao.php'); // conectando ao bancou
     $con = open_database();
     selectDb();
     $rs = mysql_query("SELECT * FROM documentos;"); 
     close_database($con); 
?>
 <?php include("nav.html"); ?>
<html>
 <head>
 <title> Novo Doc </title>
 <meta name="description" content="Aprenda a criar um site completo que usa formulários em HTML">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body id="cor">
  <div id="interface">
  <form action="insDoc.php" method="post">
  <div class="card flex-md-row mb-4 box-shadow h-md-250">
  <div class="card-body d-flex flex-column align-items-start">
  <h1> Enviar documento</h1> 
  <h2> Preencha o formulário abaixo</h2><br />
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/button.css">
  <script>
    function mensagem() {
      alert("Enviado com sucesso !");
    }
    function alerta() {
      alert ("Os campos foram limpos ")
    }
  </script>
<!-- DADOS PESSOAIS-->
<fieldset>
 <legend><p> Dados Pessoais</p></legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="txtNome"> Nome: </label>
   </td>
   <td align="left">
    <input type="text" name="txtNome">
   </td>
   <td>
    <label for="txtSobre">&nbsp Sobrenome: &nbsp</label>
   </td>
   <td align="left">
    <input type="text" name="txtSobre">
   </td>
  </tr>
  <tr>
   <td>
    <label for="txtNasc">Nascimento: &nbsp &nbsp </label>
   </td>
   <td align="left">
    <input type="date" placeholder="dia/mes/ano" />
   </td>
  </tr>
  <tr>
   <td>
    <label for="txtRg">RG: </label>
   </td>
   <td align="left">
    <input type="text" name="txtRg" size="13" maxlength="13"> 
   </td>
  </tr>
  <tr>
   <td>
    <label>CPF:</label>
   </td>
   <td align="left">
    <input type="text" name="txtCpf" size="9" maxlength="9"> - <input type="text" name="cpf2" size="2" maxlength="2">
   </td>
  </tr>
 </table>
</fieldset>
<br />
<!-- ENDEREÇO -->
<fieldset>
 <legend>Dados de Endereço <br /><br></legend>
 <table cellspacing="10">

  <tr>
   <td>
    <label for="rua"> Rua:</label>
   </td>
   <td align="left">
    <input type="text" name="txtRua">
   </td>
   <td>
    <label for="numero"> &nbsp Numero: &nbsp</label>
   </td>
   <td align="left">
    <input type="text" name="numero" size="4">
   </td>
  </tr>
  <tr>
   <td>
    <label for="bairro">Bairro: </label>
   </td>
   <td align="left">
    <input type="text" name="txtBai">
   </td>
  </tr>
  <tr>
   <td>
    <label for="estado">Estado: &nbsp</label>
   </td>
   <td align="left">
    <select name="txtUf"> 
    <option value="ac">Acre</option> 
    <option value="al">Alagoas</option> 
    <option value="am">Amazonas</option> 
    <option value="ap">Amapá</option> 
    <option value="ba">Bahia</option> 
    <option value="ce">Ceará</option> 
    <option value="df">Distrito Federal</option> 
    <option value="es">Espírito Santo</option> 
    <option value="go">Goiás</option> 
    <option value="ma">Maranhão</option> 
    <option value="mt">Mato Grosso</option> 
    <option value="ms">Mato Grosso do Sul</option> 
    <option value="mg">Minas Gerais</option> 
    <option value="pa">Pará</option> 
    <option value="pb">Paraíba</option> 
    <option value="pr">Paraná</option> 
    <option value="pe">Pernambuco</option> 
    <option value="pi">Piauí</option> 
    <option value="rj">Rio de Janeiro</option> 
    <option value="rn">Rio Grande do Norte</option> 
    <option value="ro">Rondônia</option> 
    <option value="rs">Rio Grande do Sul</option> 
    <option value="rr">Roraima</option> 
    <option value="sc">Santa Catarina</option> 
    <option value="se">Sergipe</option> 
    <option value="sp">São Paulo</option> 
    <option value="to">Tocantins</option> 
   </select>
   </td>
  </tr>
  <tr>
   <td>
    <label for="cidade">Cidade: &nbsp</label>
   </td>
   <td align="left">
    <input type="text" name="txtCid">
   </td>
  </tr>
  <tr>
   <td>
    <label for="cep">CEP: </label>
   </td>
   <td align="left">
    <input type="text" name="txtCep" size="5" maxlength="5"> - <input type="text" name="txtCep" size="3" maxlength="3">
   </td>
  </tr>
 </table>
</fieldset>
<br />
<br />
<!-- DADOS DO DOCUMENTOS -->
<fieldset>
 <legend>Dados do documento</legend><br />
 <table cellspacing="10">
  <tr>
   <td>
    <label for="secretaria">Secretaria:</label>
   </td>
   <td align="left">
    <select name="txtSec"> 
    <option value="Secretaria Administrativa e finanças">Secretaria Administrativa e finanças</option> 
    <option value="Secretaria Planejamento Gestão e Tecnologia">Secretaria Planejamento Gestão e Tecnologia</option> 
    <option value="Secretaria Agricultura e Meio Ambiente">Secretaria Agricultura e Meio Ambiente</option> 
    <option value="Secretaria Obras e Serviços">Secretaria Obras e Serviços</option> 
    <option value="Secretaria Promoção e Assistênte Social">Secretaria Promoção e Assistênte Social</option> 
    <option value="Secretaria Saúde">Secretaria Saúde</option> 
    <option value="Secretaria Educação, Cultura, Esporte e Lazer">Secretaria Educação, Cultura, Esporte e Lazer</option> 
   </select>
   </td>
  </tr>
  <tr>
   <td>
    <label for="text">Assunto: </label>
   </td>
   <td align="left">
    <input type="text" name="txtAssu">
   </td>
  </tr>
  <tr>
   <td>
    <label for="imagem">Arquivo ou foto: &nbsp</label>
   </td>
   <td>
    <input type="file" name="txtArq" >
   </td>
  </tr>
  <tr>
   <td>
    <label for="msg">Comentário</label>
   </td> <br />
   <td align="left">
   <input type="text" name="txtCom">
    <textarea rows="10" cols="40" maxlength="500" value="descricao"></textarea>
   </td>
  </tr>
 </table>
</fieldset>
<br />
<p>
<input name="bt_cad" id="bt_cad" class="btn btn-success" type="submit" value="Enviar" onclick="mensagem()">
<input name="bt_limpar" id="bt_limpar" class="btn btn-danger" type="reset" value="Limpar" onclick="alerta()">
</p>
</form>
</div>
</div>
</form>
 </body>
</html>