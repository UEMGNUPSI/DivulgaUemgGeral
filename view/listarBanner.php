<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Banner</title>
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script type="text/javascript" src="../js/buscaCategoriaBanner.js"></script>
</head>

<?php include_once "sidebar.php"; ?>
<?php include_once "../funcoes/conexao.php"; ?>


<div class="col-12 text-center my-5">

    <h1 style="font-weight: 330; color:#4F4F4F">Banners</h1>
    <h2 style="font-weight:200; color:#A9A9A9;font-size:25px">(Escolha o banner para ser exibido)</h2>


    <div class="row">

        <div class="col-12  ">

            <form class="form-inline mb-3 ">
                <input class="form-control ml-5" type="search" placeholder="Buscar..." id="buscanome" onkeyup="buscarCategoriaBanner(this.value)">
            </form>

            <div class="row" id="resultado">

                <?php


                $sql = "SELECT * FROM categoria_banner";
                $consulta = mysqli_query($conn, $sql);

                while ($dados = mysqli_fetch_assoc($consulta)) {
                    ?>
                    <form action="post" class="col-5">
                        <input type="hidden" name="banner" value="<?php echo $dados['categoria_banner']; ?>">
                        <button type="submit" class="btn btn-primary ml-5 mb-3" formaction="caroussel.php" style="width: 100%;background-color: #3b6e8f; color: #FFFFFF"><?php echo $dados['categoria_banner']; ?></button>
                    </form>
                <?php } ?>

            </div>

        </div>

    </div>

</div>

</div>
<?php include_once  "footer.php"; ?>