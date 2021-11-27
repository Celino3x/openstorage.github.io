<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Formulário de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilizar.css">
    <link rel="shortcut icon" href="favicon.ico" />
  </head>
  <body>
    <div id="tm_cont" class="container">

      <div class="list-back">
        <a href="menu.php" id="bt-back" role="button" class="btn bt btn-primary">Voltar</a>
      </div>

      <h3>Cadastrar Produto</h3>
        <form action="_inserir_produto.php" method="post">
            <div class="mb-3">
              <label>Número do Produto</label>
                <input type="number" class="form-control" name="numeroproduto" placeholder="insira o número do produto" required autocomplete="off">
            </div>
            <div class="mb-3">
              <label>Nome do Produto</label>
                <input type="text" class="form-control" name="nomeproduto" placeholder="insira o nome do produto" required autocomplete="off">
            </div>

              <label>Categoria</label>

              <select class="form-select" name="categoria">

                <?php
                include 'conexao.php';

                $sql = "SELECT * FROM categoria order by categoria ASC";
                $buscar = mysqli_query($conexao,$sql);

                while ($array = mysqli_fetch_array($buscar)) {

                  $id_categoria = $array['id_categoria'];
                  $nome_categoria = $array['categoria'];

                  ?>
                <option><?php echo $nome_categoria ?></option>

                <?php } ?>
              </select>

            <div class="mb-3">
              <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" placeholder="insira a quantidade" required autocomplete="off">
            </div>

            <label>Fornecedor</label>

            <select class="form-select" name="fornecedor">
              <?php
              include 'conexao.php';

              $query = "SELECT * FROM fornecedor";
              $buscar2 = mysqli_query($conexao, $query);

              while ($array2 = mysqli_fetch_array($buscar2)){
                $id_fornecedor = $array2['id_forn'];
                $nome_fornecedor = $array2['nome_forn'];

              ?>
              <option><?php echo $nome_fornecedor ?></option>
              <?php   } ?>
            </select>

            <div class="mb-3">
              <label>Responsável</label>
                <input type="text" class="form-control" name="responsavel" placeholder="insira o nome do Responsável" required autocomplete="off">
            </div>

            <div class="bt-cad">
              <button type="submit" id="bt-cad" class="btn bt" name="button">Cadastrar</button>
            </div>

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  </body>
</html>
