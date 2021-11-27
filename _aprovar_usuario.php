<?php
  include 'conexao.php';

  $id = $_GET['id'];
  $nivel = $_GET['nivel'];

  //IF

  if ($nivel == 1){
    $update = "UPDATE usuarios SET status = 'Ativo', nivel_usuario = 1 WHERE id_usuario = $id";
    $atualizacao = mysqli_query($conexao, $update);
    $msg = "Administrador Aprovado!";
  }
  if ($nivel == 2){
    $update = "UPDATE usuarios SET status = 'Ativo', nivel_usuario = 2 WHERE id_usuario = $id";
    $atualizacao = mysqli_query($conexao, $update);
    $msg =  "Apoio Aprovado";
  }
  if ($nivel == 3){
    $update = "UPDATE usuarios SET status = 'Ativo', nivel_usuario = 3 WHERE id_usuario = $id";
    $atualizacao = mysqli_query($conexao, $update);
    $msg = "Consulta Aprovado";
  }


 ?>
 <!DOCTYPE html>
 <html lang="pt-br">
   <head>
     <meta charset="utf-8">
     <title>Aprovado | Estoque OpenStorage</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="css/estilizar.css">
     <link rel="shortcut icon" href="favicon.ico" />
     <script src="https://kit.fontawesome.com/a922503613.js" crossorigin="anonymous"></script>
   </head>
   <body>


       <div  class="container aproveUser">
         <center>
         <h3> <?php echo $msg  ?> </h3>
         <a href="aprovar_usuario.php" id="bt-back" role="button" class="btn bt btn-primary">Voltar</a>
         </center>
       </div>

     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
   </body>
</html>
