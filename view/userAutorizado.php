<?php
if (isset($_GET['mensagem']))
  echo
    '<div class="alert alert-success"role="alert">' . $_GET["mensagem"] . '
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>'
?>
<div id="autorizado" style="display: none;">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Cpf</th>
        <th scope="col">Ação</th>
      </tr>
    </thead>
    <tbody>

      <?php

      $sql = "SELECT * from solicitacadsatro WHERE status=1 AND estado=1 ORDER BY nome ASC";
      $consulta = mysqli_query($conn, $sql);

      while ($dados = mysqli_fetch_assoc($consulta)) {
      ?>
        <tr>
          <td><?php echo $dados['nome'] . ' ' . $dados['sobrenome'] ?></td>
          <td><?php echo $dados['email'] ?></td>
          <td><?php echo $dados['cpf'] ?></td>
          <td>
            <button class="btn btn-primary mr-3 text-white" data-toggle="modal" data-target="#modalExcluirUsuario" type="button"><i class="fas fa-trash"></i></button>
            <a class="btn btn-primary mr-3 text-white" href="" type="button">
              <i class="fas fa-user-times"></i></a>
          </td>
        </tr>

        <div class="modal" tabindex="-1" role="dialog" id="modalExcluirUsuario">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Deseja realmente excluir esse usuário?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Usuário: <? echo $dados['nome'] . ' ' . $dados['sobrenome'] ?></p>
              </div>
              <div class="modal-footer">
                <a type="button" class="btn btn-primary text-white" href="../funcoes/usuarios/excluiUsuario.php?banner=<? echo $nome_banner ?>&id=<? echo $dados['id'] ?>">Sim</a>
                <a type="button" class="btn btn-secondary text-white" data-dismiss="modal">Não</a>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>

    </tbody>
  </table>
</div>