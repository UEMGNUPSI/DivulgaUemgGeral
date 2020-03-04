<?php
session_start();
$nomeBanner = $_GET['banner'];
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
  <title>Comunica Uemg</title>
  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
    <link href="../img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icom" />

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
 
</head>
<body id="page-top">
  
<?php include_once "sidebar.php";?>
<?php include_once "../funcoes/conexao.php";?>

<?php
$sql = "SELECT * FROM unidades WHERE unidades = $nomeBanner";
$consulta = mysqli_query($conn, $sql);
$dados = mysqli_fetch_assoc($consulta);  

  $nome_banner = $_GET['banner'];
  $id_banner = $dados['id'];
  $caminho = '../documentos/' . $nome_banner . '/';
  $img = glob($caminho . '*{jpg,png,gif}', GLOB_BRACE);
  $contador = count($img);
  $numImagem = 4;
  if ($contador == $numImagem) {
    $disabled = 'disabled';
  } else {
    $disabled = "";
  }
  ?>
  <div class="col-12 text-center my-5">
    <h1 style="font-weight: 330; color:#4F4F4F">Imagens Banner</h1>
    <h2 style="font-weight:200; color:#A9A9A9;font-size:25px">(Realize o upload das imagens para o banner)</h2>
        <?php

$caminho = '../documentos/' . $nome_banner . '/';
$img = glob($caminho . '*{jpg,png,gif}', GLOB_BRACE);
$contador = count($img);

$loopHorizontal = 4;

?>
<form id="ExcluirImg" class="ml-4">
  <div class="form-row" style="justify-content:left;margin-top:50px;margin-left: 10px;">
<?php
   $unidade = '1';
   $sql = "SELECT * FROM caminho_imagem WHERE unidade_id = $unidade";
   $consulta = mysqli_query($conn, $sql);
   $dados = mysqli_fetch_assoc($consulta);
  

    if($contador == 0){
      echo "<div style='margin: 0 auto;color: FireBrick;font-weight: bold;'>
                <p>Ainda não foram cadastrados imagens neste banner!</p>
            </div>";
     
          
    }   

  for ($i = 0; $i < $contador; $i++) {
    echo "   
      <div class='modal fade' id='excluirImagem$i' role='dialog'>
        <div class='modal-dialog modal-md'>
          <div class='modal-content'>
            <div class='modal-body'>
                <p> Deseja mesmo remover esta imagem?</p>
            </div>
            <div class='modal-footer'>
              <a class='btn btn-danger' href='../funcoes/apagarImagem.php?imagem=" . $img[$i] . "&banner=" . $nome_banner . "&id_banner=" . $id_banner . "'>Sim, eu quero!</a>
              <button type='button' data-dismiss='modal' class='btn btn-primary ml-auto'>Ops! Não quero!</button>
              </div>
          </div>
        </div>
      </div>";         
      ?>
      <div id='mostrarImagem' class='form-row ml-4' style='width: 150px; height: 150px;display: block;border-radius: 5px;align-items: center;margin-right: 2%;'>          
    <a > <img  src='<?php echo $dados['caminho'].$dados['nome_imagem']; ?>' style='width:150px;height: 150px;border-width: 6px;border-style: dashed;border-color: #FF0000;' /> </a>
   </div>
   <?php
    if ($contador <= $loopHorizontal) {

      echo "
<div id='mostrarImagem' class='form-row ' style='display: block;border-radius: 5px;margin-right: 4.5rem'>          
<a data-toggle='modal' data-target='#excluirImagem$i' class='imagem fechar'> <img  src='$img[$i]' style='width:150px;height: 150px;border-width: 6px;border-style: dashed;border-color: #428bca;' /> </a>
</div>
";
    } else if ($contador = $loopHorizontal) {
      echo "       
  <div id='mostrarImagem' class='form-row ml-4' style='width: 150px; height: 150px;display: block;border-radius: 5px;align-items: center;margin-right: 2%;'>          
  <a data-toggle='modal' data-target='#excluirImagem$i' class='imagem fechar'> <img  src='$img[$i]' style='width:150px;height: 150px;border-width: 6px;border-style: dashed;border-color: #428bca;' /> </a>
</div>
";
    }
  }
   ?>
  </div>
</form>
<form method="POST" id="excluirTodasImagens">
  <input type="hidden" name="banner" value="<?php echo $caminho; ?>">
  <input type="hidden" name="nomebanner" value="<?php echo $nome_banner; ?>">
  <input class="btn float-right my-5  mr-5" type="button" value="Salvar" style="background-color: #3b6e8f; color: #FFFFFF; width: 110px;" data-toggle="modal" data-target="#salvar" />
  <input 

</body>
</html>