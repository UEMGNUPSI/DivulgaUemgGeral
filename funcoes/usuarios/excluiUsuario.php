<?php

include_once('../conexao.php');
$id = $_GET['id'];
$nome_banner = $_GET['banner'];

$sql = "DELETE FROM solicitacadsatro WHERE id = '$id'";
$query = mysqli_query($conn, $sql);
$mensagem = 'Excluido com sucesso!';
$erro = 'Erro ao excluir usuário';
if ($query) {
  header('Location: ../../view/consultaUsuario.php?banner=' . $nome_banner .  '&mensagem=' . $mensagem . '');
} else {
  header('Location: ../view/consultaUsuario.php?message=Erro ao excluir usuário');
}
