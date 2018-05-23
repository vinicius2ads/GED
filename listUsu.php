<?php
     session_start();
     require_once('conexao.php'); // conectando ao bancou
     $con = open_database();
     selectDb();
     $rs = mysql_query("SELECT * FROM usuarios;"); 
     close_database($con); 
?>
<html>
<?php include("nav.html"); ?>
    <head>
        <body background="gear-set-white-background-18981081.jpg">
        <meta charset="UTF-8">
        <title >Usuarios</title>
    </head>
    <body class="container"> <!-- arrumar isso -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
         <link rel="stylesheet" href="css/estilos.css">
        <h1>Usuarios</h1>
        <br/>
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
                 <th>Nome</th>
                 <th>Email</th>    
                 <th></th>
                 <th></th>
            </tr>
            <?php while ($row = mysql_fetch_array($rs)) { ?>
                <tr>
                   <td><?php echo $row['nome'] ?></td>
                   <td><?php echo $row['email'] ?></td>
    
                   <td>
                      <button type="button" class="btn btn-primary" 
                         onclick="javascript: location.href='frmEdtDoc.php?id=' +
                         <?php echo $row['id'] ?>">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                      </button>
                   </td>
                   <td>
                      <button type="button" class="btn btn-danger" 
                         onclick="javascript: location.href='frmRemDoc.php?id=' +
                         <?php echo $row['id'] ?>">
                        <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
                      </button>
                   </td>
                </tr>
            <?php } ?>  
        </table>
     </div>
    </body>
</html>