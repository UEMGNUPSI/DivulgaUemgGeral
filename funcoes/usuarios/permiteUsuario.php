<?php

include_once("../conexao.php");
$id = $_GET['id'];
$nome_banner = $_GET['banner'];

$sql = "UPDATE solicitacadsatro SET estado = 1, status = 1 WHERE id = '$id'";

$executa = mysqli_query($conn, $sql);
$mensagem = 'Permissão alterada com sucesso!';
$erro = 'Erro ao tentar alterar as permissões!';
if (mysqli_affected_rows($conn) > 0) {
  header('Location: ../../view/consultaUsuario.php?banner='
    . $nome_banner .  '&mensagem=' . $mensagem . '');
} else {
  header('Location: ../../view/consultaUsuario.php?banner='
    . $nome_banner .  '&erro=' . $erro . '');
}
