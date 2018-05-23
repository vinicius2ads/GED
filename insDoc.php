<?php
    require_once('conexao.php'); 

    $nome = trim($_POST['txtNome']);
    $sobre  = trim($_POST['txtSobre']);
    $nasc  = trim($_POST['txtNasc']);
    $rg  = trim($_POST['txtRg']);
    $cpf  = trim($_POST['txtCpf']);
    $rua  = trim($_POST['txtRua']);
    $bai  = trim($_POST['txtBai']);
    $uf  = trim($_POST['txtUf']);
    $cid  = trim($_POST['txtCid']);
    $cep  = trim($_POST['txtCep']);
    $sec  = trim($_POST['txtSec']);
    $assu  = trim($_POST['txtAssu']);
    $arq  = trim($_POST['txtArq']);
    $com  = trim($_POST['txtCom']);

    if(!empty($nome) && !empty($sobre) && !empty($nasc) && !empty($rg) && !empty($cpf) && !empty($rua) && !empty($bai) && !empty($uf) && !empty($cid) && !empy($cep) && !empty($sec) && !empty($assu) && !empty($arq) && !empty($com) ){
      $con = open_database(); 
      selectDb();   
      $sql = "INSERT INTO documentos (nome, sobrenome, nascimento, rg, cpf, rua, bairro, uf, cidade, cep, secretaria, assunto, arquivo, comercio ) VALUES  ('$nome','$sobre', '$nasc', '$rg', '$cpf', '$rua', '$bai', '$uf', '$cid', '$cep', '$sec', '$assu', '$arq', '$com');";
      $ins = mysql_query($sql); 
      close_database($con); 


      if ($ins==FALSE)
         $msg = "Consulta inserir produtos deu erro..."; 
      else {
         $msg = "Foi inserido" . mysql_affected_rows() . " registros <br/>";
         unset($nome, $sobre, $nasc, $rg, $cpf, $rua, $bai, $uf, $cid, $cep, $sec, $assu, $arq, $com); 
      }
      echo $msg; 
    }
    header("location: listDoc.php")
?>