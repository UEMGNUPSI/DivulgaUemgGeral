<?php
include_once '../conexao.php';
session_start();
$requestData = $_REQUEST;

$columns = array(
    0 => "nome",
    1 => "email",
    2 => "cpf",
    3 => "botao",
);

$unidade = $_SESSION['banner'];
$unidades = "SELECT * from unidade where unidades ='$unidade'";
$_executa = mysqli_query($conn, $unidades);

while ($resultado = mysqli_fetch_assoc($_executa)) {
    $idUnidade = $resultado['id'];
    $nomeUnidade = $resultado['unidades'];
    if ($nomeUnidade == $unidade) {
        $sql = "SELECT COUNT(*) from solicitacadsatro WHERE status=1
            AND estado=1
            AND unidade_id = '$idUnidade'
            ";
        $consulta = mysqli_query($conn, $sql);

        $result_usuarios = "SELECT * from solicitacadsatro WHERE status=1
            AND estado=1
            AND unidade_id = '$idUnidade'";
    }
}
$qnt_linhas = mysqli_fetch_assoc($consulta);



if (!empty($requestData['search']['value'])) {   // se houver um parâmetro de pesquisa, $requestData['search']['value'] contém o parâmetro de pesquisa
    $result_usuarios .= " AND ( nome LIKE '%" . $requestData['search']['value'] . "%' ";
    $result_usuarios .= " OR sobrenome LIKE '%" . $requestData['search']['value'] . "%' ";
    $result_usuarios .= " OR cpf LIKE '%" . $requestData['search']['value'] . "%' ";
    $result_usuarios .= " OR email LIKE '%" . $requestData['search']['value'] . "%' )";
}

$resultado_usuarios = mysqli_query($conn, $result_usuarios);
$totalFiltered = mysqli_num_rows($resultado_usuarios);

//Ordenar o resultado
$result_usuarios .= " ORDER BY " . $columns[$requestData['order'][0]['column']] . "   " . $requestData['order'][0]['dir'] . "  LIMIT " . $requestData['start'] . " ," . $requestData['length'] . "   ";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);

$dados = array();
while ($row_usuarios = mysqli_fetch_array($resultado_usuarios)) {
    $dado = array();
    $dado[] = $row_usuarios["nome"] .' '. $row_usuarios["sobrenome"];
    $dado[] = $row_usuarios["email"];
    $dado[] = $row_usuarios["cpf"];

    $btnExcluir =  '<button class="btn btn-primary mr-3 text-white" title="Excluir usuário" data-toggle="modal"
data-target="#modalExcluirUsuario" value="'.$row_usuarios["id"].'" type="button"><i class="fas fa-trash"></i></button>';
$btnNegarPermissao = '<button class="btn btn-primary mr-3 text-white" title="Negar permissão" data-toggle="modal"
data-target="#modalNegarUsuario" type="button">
<i class="fas fa-user-times"></i></button>';
    $dado[] = $btnExcluir . $btnNegarPermissao;
    $dados[] = $dado;
}

$json_data = array(
    "draw" => intval($requestData['draw']), //para cada requisição é enviado um número como parâmetro
    "recordsTotal" => intval($qnt_linhas), //Quantidade de registros que há no banco de dados
    "recordsFiltered" => intval($totalFiltered), //Total de registros quando houver pesquisa
    "data" => $dados   //Array de dados completo dos dados retornados da tabela 
);

echo json_encode($json_data);  //enviar dados como formato json