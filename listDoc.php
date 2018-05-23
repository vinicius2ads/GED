<?php
     session_start();
     require_once('conexao.php'); // conectando ao bancou
     $con = open_database();
     selectDb();
     $rs = mysql_query("SELECT * FROM documentos;"); 
     close_database($con); 
?>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Acervo</title>
    </head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
         <link rel="stylesheet" href="css/fontello.css">
         <link rel="stylesheet" href="css/estilos.css">
         <link rel="stylesheet" type="text/css" href="css/carrossel.css">
         <link rel="stylesheet" href="css/teste.css" />
         <meta name="GENERATOR" content="Microsoft FrontPage 6.0">
         <?php include("nav.html"); ?>
         <body> <!-- arrumar isso -->
        <h1>Usuarios</h1>
        <br />
         <input id="bt_ins" class="btn btn-success" 
             type="button"  value="Novo"
                 onclick="javascript:location.href='inserir.html'">
                 
         <input name="bt_voltar" id="bt_voltar" class="btn btn-primary" type="button" value="Voltar"
                 onclick="javascript:location.href='menu.html'">

         <input id="bt_logout" class="btn btn-danger" 
             type="button"  value="Sair"
                 onclick="javascript:location.href='logout.php'">
               
         <br/>  <br/>
        <div class="row col-md-7">
        <table  class="table table-striped table table-hover">
            <tr>
                 <th>id</th>
                 <th>Nome</th> 
                 <th>Cpf</th>  
                 <th>Cidade</th>
                 <th>Estado</th>
                 <th>Secretaria</th>                 
                 <th></th>
            </tr>
            <?php while ($row = mysql_fetch_array($rs)) { ?>
                <tr>
                   <td><?php echo $row['id'] ?></td>
                   <td><?php echo $row['nome'] ?></td>
                   <td><?php echo $row['cpf'] ?></td>
                   <td><?php echo $row['cidade'] ?></td>
                   <td><?php echo $row['uf'] ?></td>
                   <td><?php echo $row['secretaria'] ?></td>

                </tr>
            <?php } ?>  
        </table>
     </div>
    </body>
</html>