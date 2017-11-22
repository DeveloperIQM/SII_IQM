<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Administrador</title>
  <link href="<?=base_url() ?>recursos/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url() ?>recursos/css/datepicker3.css" rel="stylesheet">
  <link href="<?=base_url() ?>recursos/css/styles.css" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>
 <body>
 <div class="container">
 <div class="col-md-12">
 <h1 class="text-center">Bienvenido de nuevo <?=$this->session->userdata('perfil')?></h1>
 <?=anchor(base_url().'login_controller/cerrarSesion', 'Cerrar sesión')?>
 </div>
 </div> 
 </body>
</html>