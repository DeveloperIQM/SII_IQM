<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SII IQM - Login</title>
  <link href="<?=base_url() ?>recursos/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url() ?>recursos/css/datepicker3.css" rel="stylesheet">
  <link href="<?=base_url() ?>recursos/css/styles.css" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>
<?php

  $usuario = array( 
    'name' => 'usuario', 
    'placeholder' => 'Escribe tu usuario...',
    'class' => 'form-control',
    'value' => 'admin'
    );
  $contrasena = array(
    'name' => 'contrasena', 
    'placeholder' => 'Escribe tu contraseña...',
    'class' => 'form-control',
    'value' => '12345'
  );
  $submit = array(
    'name' => 'submit', 
    'value' => 'Iniciar sesión', 
    'title' => 'Iniciar sesión',
    'class' => 'btn btn-primary'
  );

    $btn_login = array(
    'name' => 'Login', 
    'value' => 'Iniciar sesión', 
    'title' => 'Iniciar sesión',
    'class' => 'btn btn-primary'
  );

?>
<body>
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="panel-body text-center">
          <?=form_open('login_controller/abrirSesion') ?>
            <fieldset>
              <img src="<?= base_url()?>recursos/img/logo-iqm.png" class="img-responsive logo-log">
              <div class="form-group">
                  <?=form_input($usuario)?>
                  <span><?=form_error('usuario')?></span>
              </div>
              <div class="form-group">
                  <?=form_password($contrasena)?>
                  <span><?=form_error('contrasena')?></span>
              </div>
              <div class="form-group">
                <?=form_hidden('token',$token)?>
                <!--<?=form_submit($submit)?>-->
                <?php echo anchor('inicio_controller', 'Iniciar Sesión', $btn_login);?>
              </div>
             </fieldset>
          <?=form_close()?>
          <?php 
            if($this->session->flashdata('usuario_incorrecto')){
          ?>
              <p><?=$this->session->flashdata('usuario_incorrecto')?></p>
          <?php
            }
          ?>
        </div>
      </div>
    </div><!-- /.col-->
  </div><!-- /.row -->  
  

<script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>


