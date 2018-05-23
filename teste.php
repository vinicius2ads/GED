<?php
     $conexao = mysql_connect("localhost", "root", ""); 
     if (!$conexao){
        echo "Erro ao conectar no banco MySql...";
        exit;  
     }
     $banco = mysql_select_db("tcc2018"); 
     if (!$banco){
         echo "Banco lp2017 não foi conectado com sucesso...";
         exit; 
     }
     $rs = mysql_query("SELECT * FROM documentos;"); 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Listar Produtos</title>
    </head>
    <body class="container">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	    <link href="bootstrap/css/style.css" rel="stylesheet">
        <h1>Manter Dados de Produtos</h1>
        <br/>
         <input id="bt_ins" class="btn btn-primary" 
             type="button"  value="Novo"
                 onclick="javascript:location.href='inserir.html'">
                 
         <br/>  <br/>
        <div class="row col-md-7">
        <table  class="table table-striped table table-hover">
            <tr>
                 <th>ID</th>
                 <th>Descrição</th>
                 <th>Unidade</th>
                 <th>Quantidade</th>
                 <th>Valor R$</th>  
                 <th></th>
                 <th></th>
            </tr>
            <?php while ($row = mysql_fetch_array($rs)) { ?>
                <tr>
                   <td><?php echo $row['id'] ?></td>
                   <td><?php echo $row['nome'] ?></td>
                   <td><?php echo $row['idade'] ?></td>
                   
                   <td>
                      <button type="button" class="btn btn-warning" 
                         onclick="javascript: location.href='frmEdtPro.php?id=' +
                         <?php echo $row['id'] ?>">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                      </button>
                   </td>
                </tr>
            <?php } ?>  
        </table>
     </div>
    </body>
</html>

