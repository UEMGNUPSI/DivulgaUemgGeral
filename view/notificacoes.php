<!DOCTYPE html>
<html lang="pt">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Banner</title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">

  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Signika+Negative:300" rel="stylesheet">

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <style>
    body {
      background-image: linear-gradient(rgba(254, 254, 254, 0.4), rgba(254, 254, 254, 0.4)), url('../img/uemgfrutal2.svg');
      background-repeat: no-repeat;
      background-size: cover;
      opacity: 1;
      filter: alpha(opacity=100);
    }
  </style>
</head>

<?php include_once "../funcoes/conexao.php"; ?>


<div class="container no">
  <div class="col-12">

    <nav class="navbar navbar-inverse navbar-custom  navbar-fixed-top nav-color">
      <div class="container">
      <?php
        // Selecionando os id das unidaDes status=0
        $sql = "SELECT count(*) as s from solicitacadsatro WHERE status = 0";
        $sql = $conn->query($sql);
        $sql = $sql->fetch_assoc();
        $total = $sql['s'];
      ?>
        

        <div class="navbar-header">
          <a href="index.php" class="navbar-brand">
            <span class="img-logo">UEMG </span>
          </a>

        </div>

        <div class="collapse navbar-collapse" id="barra-navegacao">
          <ul class="nav navbar-nav">
            <li class='active'><a href="inicioReitoria.php">Inicio</a></li>
            
          </ul>

    </nav>

    <div class="row" style="margin-top:50px;" id="resultado">
      <div class="col-12">
        
       <section class='col-lg-12 atividades' style="border: 1px rgba(183,183,183,0.4) solid; box-shadow: 5px 5px 5px rgba(0,0,0,0.5); background: white;">
           <header class='row titulo' style="background: rgba(60, 110, 143, 0.96);">
               <div class="col-lg-10"><h3 style="color: white">UEMG Frutal</h3></div>
        </header>
               <div class='row corpo'>
                <figure class='col-md-3' style='margin-top: 3.571%;'>
                    <img class='img-atividade middleX' src="../img/logo@2x.png">
                </figure>
            <div class='col-md-9'>
                <div class='row'>
                    <div class='col-md-9' style='margin-right: 2.8%'>
                    <div class='item-info'><p class='item-label text-red'><span class='glyphicon glyphicon-calendar'	></span> Data</p><h4 style='margin: 0;'>
                    <p>Solicitado em 22 de Janeiro de 2020</p>
                    </h4>
                </div>
            </div>
            <div class='col-md-2 vagas-corpo sem-vagas visible-md-inline visible-lg-inline'>
                <h4><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#autorizarAcesso">Autorizar</button></h4>
                <p><button type="button"class="btn btn-danger" data-toggle="modal" data-target="#negarAcesso">Negar</button></p></div></div>

                <section class='row'>
                        <div class='col-xs-6'><p class='item-info text-red'><span class='glyphicon glyphicon-user'	></span> Nome</p>
                    <p class='item-info' style='text-transform: capitalize'>Pedro Henrique de Souza Ferreira</p></div>
                </section>    
            <section class='row'>
                <div class='col-xs-6'>
                    <div class='item-info'>
                        <p class='item-label text-red'>
                            <span class='glyphicon glyphicon-envelope'></span> Email</p><p>pedro@gmail.com</p>
                        </div>
                    </div>
                <div class='col-xs-6'>
                    <div class='item-info'><p class='item-label text-red'><span class='glyphicon glyphicon-home'></span> Setor</p><p>Nupsi</p>
                    </div>
                </div>
            </section>
            <section class='row'>
                <div class='col-md-6'>
                    <div class='item-info'><p class='item-label text-red'><span class='glyphicon glyphicon-certificate'	></span> cpf</p><p>111.111.111-11</p>
                </div>
            </div>
                <div class='col-md-6'>
                    <div class='item-info'><p class='item-label text-red'><span class='icon glyphicon glyphicon-asterisk'	></span> Cargo</p><p>Estagiário</p>
                </div>
                </div>
            </section>
            </div>
        </div>
        <section class='row descricao'><h4>Descrição</h4><p align='justify'>Necessito do cadastro para cadastrar imagens para poder fazer uso do sistema de bannes da unidade</p>
    </section>

          </form>
        </button>
      </div>

    </div>
  </div>

  <div id="autorizarAcesso" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Autorizar Acesso ao sistema</h4>
      </div>
      <div class="modal-body">
        <p>Deseja mesmo autorizar o acesso de "Pedro Henrique de Souza Ferreira" ao sistema?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" >Autorizar</button>
      </div>
    </div>

  </div>
</div>

<div id="negarAcesso" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Negar Acesso ao sistema</h4>
      </div>
      <div class="modal-body">
        <p>Deseja mesmo negar o acesso de "Pedro Henrique de Souza Ferreira" ao sistema?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-danger">Negar</button>
      </div>
    </div>

  </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>

</html>