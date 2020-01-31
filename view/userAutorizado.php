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
      $unidade = $_GET['banner'];
      $unidades = "SELECT * from unidade where unidades ='$unidade'";
      $_executa = mysqli_query($conn, $unidades);
      
      while($resultado = mysqli_fetch_assoc($_executa)){
          $idUnidade = $resultado['id'];
          $nomeUnidade = $resultado['unidades'];
          if ($nomeUnidade == $unidade) {
            $sql = "SELECT * from solicitacadsatro WHERE status=1
            AND estado=1
            AND unidade_id = '$idUnidade' 
            ORDER BY nome ASC
            ";
            $consulta = mysqli_query($conn, $sql);
        }
      }


      while ($dados = mysqli_fetch_assoc($consulta)) {
      ?>
        <tr>
          <td><?php echo $dados['nome'] . ' ' . $dados['sobrenome'] ?></td>
          <td><?php echo $dados['email'] ?></td>
          <td><?php echo $dados['cpf'] ?></td>
          <td>
  
            <button class="btn btn-primary mr-3 text-white" title="Excluir usuário" data-toggle="modal" data-target="#modalExcluirUsuario" type="button"><i class="fas fa-trash"></i></button>
            <button class="btn btn-primary mr-3 text-white" title="Negar permissão" data-toggle="modal" data-target="#modalNegarUsuario" type="button">
              <i class="fas fa-user-times"></i></button>
          </td>
        </tr>
        <?
        include("modalExcluirUsuario.php");
        include("modalNegarPermissao.php")
        ?>

      <?php } ?>

    </tbody>
  </table>
</div>