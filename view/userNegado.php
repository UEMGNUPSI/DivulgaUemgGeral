
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
    
    while( $dados = mysqli_fetch_assoc($consulta)){                                                                
        ?>   
        <tr>
            <td><?php echo $dados['nome'].' '.$dados['sobrenome'] ?></td>
            <td><?php echo $dados['email'] ?></td>            
            <td><?php echo $dados['cpf'] ?></td>
            <td>
                <button class="btn btn-primary  mr-3" type="button"><i class="fas fa-trash"></i></button>             
                <button class="btn btn-primary mr-3" type="button"><i class="fas fa-check-circle"></i></button>
            </td>


        </tr>

    <?php } ?>       
   
  </tbody>
</table>

</div>