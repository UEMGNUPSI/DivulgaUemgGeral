<div id="negado" style="display: none;">
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
      $sql = "SELECT * from solicitacadsatro WHERE status=1 AND estado=0 ORDER BY nome ASC";
      $consulta = mysqli_query($conn, $sql);

      while ($dados = mysqli_fetch_assoc($consulta)) {
      ?>
        <tr>
          <td><?php echo $dados['nome'] . ' ' . $dados['sobrenome'] ?></td>
          <td><?php echo $dados['email'] ?></td>
          <td><?php echo $dados['cpf'] ?></td>
          <td>
            <button class="btn btn-primary mr-3" title="Excluir usuário" data-toggle="modal" data-target="#modalExcluirUsuario2 " type="button"><i class="fas fa-trash"></i></button>
            <button class="btn btn-primary mr-3" title="Permitir acesso" type="button"><i class="fas fa-check-circle"></i></button>
          </td>
        </tr>
        <div class="modal" tabindex="-1" role="dialog" id="modalExcluirUsuario2">
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