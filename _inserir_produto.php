<?php

include 'conexao.php';

$numeroproduto = $_POST['numeroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];
$responsavel = $_POST['responsavel'];

$sql = "INSERT INTO `estoque`( `numeroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`, `responsavel`) VALUES ($numeroproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor','$responsavel')";

$inserir = mysqli_query($conexao, $sql);

 ?>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="css/estilizar.css">
 <link rel="shortcut icon" href="favicon.ico" />

 <div class="container inserirProduto">
    <center>
       <h4>Produto Adicionado</h4>
       <p>Não garanto, acho melhor conferir no banco de dados.</p>

       <div class="bt-inserir">
         <a href="adicionar.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Ítem</a>
       </div>
    </center>
 </div>
