<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Comunica UEMG</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />

	<link href="../assets/css/demo.css" rel="stylesheet" />
</head>

<body>    
<?php include_once "../funcoes/conexao.php"; ?>
<div class="image-container set-full-height" style="background-color: #3c6178;">

    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

      
            <div class="wizard-container">

                <div class="card wizard-card" data-color="orange" id="wizardProfile">
                    <form action="../funcoes/cadastroPessoa.php" method="post">
              
                    	<div class="wizard-header">
                        	<h3>
                        	   <b>Comunica</b> UEMG <br>
                        	   <small>Solicite seu cadastro para poder acesso  aos banners de sua unidade!</small>
                        	</h3>
                    	</div>

						<div class="wizard-navigation">
							<ul>
	                            <li><a href="#about" data-toggle="tab">Sobre</a></li>
	                            <li><a href="#account" data-toggle="tab">Cargo</a></li>
	                            <li><a href="#address" data-toggle="tab">Unidade</a></li>
	                        </ul>

						</div>

                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                              <div class="row">
                                  <h4 class="info-text"> Informe primeiramente seus dados pessoais!</h4>
                                  <div class="col-sm-5 col-sm-offset-1">
                                  <div class="form-group">
                                        <label>Nome <small>*</small></label>
                                        <input name="nome" type="text" class="form-control" placeholder="">
                                      </div>
                                  </div>
                                  <div class="col-sm-5">                                      
                                      <div class="form-group">
                                        <label> Sobrenome</label> <small>*</small></label>
                                        <input name="sobrenome" type="text" class="form-control" placeholder=".">
                                      </div>
                                  </div>
                                  <div class="col-sm-5 col-sm-offset-1">
                                  <div class="form-group">
                                        <label>CPF <small>*</small></label>
                                        <input name="cpf" type="text" class="form-control" placeholder="">
                                      </div>
                                  </div>
                                  <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Email <small>*</small></label>
                                          <input name="email" type="email" class="form-control" placeholder="">
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="account">
                                <h4 class="info-text"> Quem é você? </h4>
                                <div class="row">

                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-checkbox">
                                                <input type="checkbox" name="tipo" value="estagiario">
                                                <div class="icon">
                                                    <i class="fas fa-user-graduate"></i>
                                                </div>
                                                <h6>Estagiário</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-checkbox">
                                                <input type="checkbox" name="tipo" value="professor">
                                                <div class="icon">
                                                <i class="fas fa-chalkboard-teacher"></i>
                                                </div>
                                                <h6>Professor</h6>
                                            </div>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-checkbox">
                                                <input type="checkbox" name="tipo" value="servidor">
                                                <div class="icon">
                                                 <i class="fas fa-university"></i>
                                                </div>
                                                <h6>Servidor</h6>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="address">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Por que devo ter um cadastro? </h4>
                                    </div>                                 
                                    <div class="col-sm-7 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>Unidade</label><br>
                                             <select name="unidade" class="form-control">
                                             <option selected>Selecione...</option>
                                                    <?php 

                                                    $sql = "SELECT * FROM unidade WHERE id != 1";
                                                    $consulta = mysqli_query($conn, $sql);

                                                    while ($dados = mysqli_fetch_assoc($consulta)) {

                                                        echo "<option>" . $dados['unidades'] . "</option>";
                                                    }
                                                    ?>
                                            </select>
                                          </div>
                                    </div>
                                </div>
                                <div class="row">                                   
                                    <div class="col-sm-10 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>Setor: </label>
                                            <input type="text" class="form-control" placeholder="" name="setor">
                                          </div>
                                    </div>                                                                 
                                </div>
                                <div class="row">                                   
                                    <div class="col-sm-10 col-sm-offset-1">
                                         <div class="form-group">
                                            <label for="textarea1">Motivos para se ter um cadatro; </label>
                                            <textarea class="form-control" id="textarea1" rows="3" name="descricao"></textarea>
                                          </div>
                                    </div>                                                                 
                                </div>


                            </div>
                        </div>
                        <div class="wizard-footer height-wizard">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Próximo' />
                                <!-- <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Solicitar' /> -->
                                <button type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Solicitar' formaction="../funcoes/cadastroPessoa.php">Solicita Cadastro</button> 

                            </div>

                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Voltar' />
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div> 
        </div>
        </div>
    </div> 

   

</div>

</body>

	<!--   Core JS Files   -->
	<script src="../assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="../assets/js/gsdk-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="../assets/js/jquery.validate.min.js"></script>

</html>
