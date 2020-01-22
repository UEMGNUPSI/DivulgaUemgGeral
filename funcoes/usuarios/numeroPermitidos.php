<?php
include_once("../funcoes/conexao.php");
$query = "SELECT COUNT(*) AS id from solicitacadsatro WHERE status = 1 and estado = 1";
$executa = mysqli_query($conn, $query);
$quantidade = mysqli_fetch_assoc($executa);
echo $quantidade['id'];
