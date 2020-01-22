<div id="pendente" style="display: none;">
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
      $sql = "SELECT * from solicitacadsatro WHERE status=0 AND estado=0 ORDER BY nome ASC";
      $consulta = mysqli_query($conn, $sql);

      while ($dados = mysqli_fetch_assoc($consulta)) {
      ?>
        <tr>
          <td><?php echo $dados['nome'] . ' ' . $dados['sobrenome'] ?></td>
          <td><?php echo $dados['email'] ?></td>
          <td><?php echo $dados['cpf'] ?></td>
          <td>
            <button class="btn btn-primary mr-3" title="Excluir solicitação" data-toggle="modal" data-target="#modalExcluirUsuario3" type="button"><i class="fas fa-trash"></i></button>
            <button class="btn btn-primary mr-3" title="Negar solicitação" data-toggle="modal" data-target="#modalNegarUsuario2" type="button"><i class="fas fa-user-times"></i></button>
            <button class="btn btn-primary mr-3" title="Aceitar solicitação" data-toggle="modal" data-target="#modalPermitirUsuario2" type="button"><i class="fas fa-check-circle"></i></button>
          </td>
        </tr>

        <!-- Modal de excluir usuário -->
        <div class="modal" tabindex="-1" role="dialog" id="modalExcluirUsuario3">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Deseja realmente excluir esta solicitação de usuário?</h5>
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

        <!-- Modal de tirar permissão -->
        <div class="modal" tabindex="-1" role="dialog" id="modalNegarUsuario2">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Deseja negar este solitante?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Solicitante: <? echo $dados['nome'] . ' ' . $dados['sobrenome'] ?></p>
              </div>
              <div class="modal-footer">
                <a type="button" class="btn btn-primary text-white" href="../funcoes/usuarios/negaUsuario.php?banner=<? echo $nome_banner ?>&id=<? echo $dados['id'] ?>">Sim</a>
                <a type="button" class="btn btn-secondary text-white" data-dismiss="modal">Não</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal de alterar Permissão -->
        <div class="modal" tabindex="-1" role="dialog" id="modalPermitirUsuario2">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Deseja dar permissão a este solicitante?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Solicitante: <? echo $dados['nome'] . ' ' . $dados['sobrenome'] ?></p>
              </div>
              <div class="modal-footer">
                <a type="button" class="btn btn-primary text-white" href="../funcoes/usuarios/permiteUsuario.php?banner=<? echo $nome_banner ?>&id=<? echo $dados['id'] ?>">Sim</a>
                <a type="button" class="btn btn-secondary text-white" data-dismiss="modal">Não</a>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>

    </tbody>
  </table>
</div>