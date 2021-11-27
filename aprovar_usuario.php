<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Aprovar Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilizar.css">
    <link rel="shortcut icon" href="favicon.ico" />
    <script src="https://kit.fontawesome.com/a922503613.js" crossorigin="anonymous"></script>
  </head>
  <body>

    <div class="container">

      <div class="list-back">
        <a href="menu.php" id="bt-back" role="button" class="btn bt btn-primary">Voltar</a>
      </div>

      <h3>Aprovação de Usuários</h3>

          <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">Nome</th>
                  <th scope="col">E-mail</th>
                  <th scope="col">Nível</th>
                  <th scope="col">Ação</th>
                </tr>
              </thead>

              <?php
              include 'conexao.php';
              $sql = "SELECT * FROM usuarios WHERE status = 'Inativo'";
              $busca = mysqli_query($conexao,$sql);

              while ($array = mysqli_fetch_array($busca)) {
                $id_usuario = $array['id_usuario'];
                $nome_usuario = $array['nome_usuario'];
                $mail_usuario = $array['mail_usuario'];
                $nivel = $array['nivel_usuario'];
               ?>


                <tr>
                  <td><?php echo $nome_usuario ?></td>
                  <td><?php echo $mail_usuario ?></td>
                  <td><?php echo $nivel ?></td>

                  <td>
                    <a class="btn btn-dark btn-sm btedit" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=1" role="button"><i class="fas fa-user-cog"></i> Administrador</a>
                    <a class="btn btn-success btn-sm btedit" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=2" role="button"><i class="fas fa-users"></i> Apoio</a>
                    <a class="btn btn-info btn-sm btedit" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=3" role="button"><i class="far fa-comment-dots"></i> Consulta</a>
                    <a class="btn btn-danger btn-sm btedit" href="deleteusuario.php?id=<?php echo $id_usuario ?>" role="button"><i class="far fa-trash-alt"></i> Excluir</a>
                  </td>
                </tr>

                  <?php }   ?>
                </tr>

          </table>

    </div>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  </body>
</html>
