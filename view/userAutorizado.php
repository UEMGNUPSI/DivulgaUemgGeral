<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<div id="autorizado" class="mt-3" style="display: none;">
  <div class="col-12">
    <table class="table" style="width:100%" id="listarUsuarioAutorizado">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col">Cpf</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
<?php
  echo $_SESSION['banner'];
    include("modalExcluirUsuario.php");
    include("modalNegarPermissao.php")
?>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js "></script>
<script>
$(document).ready(function() {
  $('#listarUsuarioAutorizado').DataTable({
    "processing": true,
    "serverSide": true,
    "ajax": {
      "url": "../funcoes/usuarios/listarUsuariosAutorizados.php",
      "type": "POST"
    },
  });
});
</script>