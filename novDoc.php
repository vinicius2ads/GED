<?php
    require_once('conexao.php'); 

    $nome = trim($_POST['txtNome']);
    $cpf  = trim($_POST['txtCpf']);
    $sex = trim($_POST['txtSexo']); 
    $idade = trim($_POST['txtIdade']);
    $ende = trim($_POST['txtEndereco']);
    $compl = trim($_POST['txtComplemento']);
    $bair = trim($_POST['txtBairro']);
    $cep = trim($_POST['txtCep']);
    $cid = trim($_POST['txtCidade']);
    $uf = trim($_POST['txtUf']);
    $email = trim($_POST['txtEmail']);
    $tele = trim($_POST['txtTelefone']);
    $celu = trim($_POST['txtCelular']);
    $desc = trim($_POST['txtDescricao']);
    if(!empty($nome) && !empty($cpf) && !empty($sex) && !empty($idade) && !empty($ende) && !empyt($compl) && !empyt($bair) && !empyt($cep) && !empyt($cid) && !empyt($uf) && !empyt($email) && !empyt($tele) && !empyt($celu) && !empyt($desc)){
      $con = open_database(); 
      selectDb();   
      $sql = "INSERT INTO documentos (nome, cpf, sexo, idade, endereco, complemento, bairro, cep, cidade, uf, email, telefone, celular, descricao ) VALUES ('$nome','$sex', '$idade', '$ende', '$compl', '$bair', '$cep', '$cid', '$uf', '$email', '$tele', '$celu', '$desc');";
      $ins = mysql_query($sql); 
      close_database($con); 


      if ($ins==FALSE)
         $msg = "Consulta inserir produtos deu erro..."; 
      else {
         $msg = "Foi inserido" . mysql_affected_rows() . " registros <br/>";
         unset($nome, $cpf, $sex, $idade, $ende, $compl, $bair, $cep, $cid, $uf, $email, $tele, $celu, $desc); 
      }
      echo $msg; 
    }
    header("location: listDoc.php")
?>