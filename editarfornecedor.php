<?php
  include 'conexao.php';
  $id = $_GET['id'];
 ?>

 <!DOCTYPE html>
 <html lang="pt-br">
   <head>
     <meta charset="utf-8">
     <title>Editar Fornecedor</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="css/estilizar.css">
     <link rel="shortcut icon" href="favicon.ico" />
   </head>
   <body>
     <div id="tm_cont" class="container">

       <div class="list-back">
         <a href="listar_categoria.php" id="bt-back" role="button" class="btn bt btn-primary">Voltar</a>
       </div>

         <form action="_update_fornecedor.php" method="post">
           <?php

            $sql = "SELECT * FROM `fornecedor` WHERE id_forn = $id";
            $buscar = mysqli_query($conexao, $sql);
            while ($array = mysqli_fetch_array($buscar)) {

              $id_forn = $array['id_forn'];
              $nome_forn = $array['nome_forn'];

           ?>
             <div class="mb-3">
               <label>Nome do Fornecedor</label>
                 <input type="text" class="form-control" name="fornecedor" value="<?php echo $nome_forn ?>">
                 <input type="text" class="form-control editID" name="id" value="<?php echo $id_forn ?>">
             </div>


             <div class="bt-cad">
               <button type="submit" id="bt-cad" class="btn bt" name="button">Atualizar</button>
             </div>

             <?php } ?>

         </form>
     </div>

     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
   </body>
 </html>
