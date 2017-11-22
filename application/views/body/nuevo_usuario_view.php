<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>$titulo</title>
  <link href="<?=base_url() ?>recursos/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url() ?>recursos/css/datepicker3.css" rel="stylesheet">
  <link href="<?=base_url() ?>recursos/css/styles.css" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>
<?php
  //input nombre completo
  $nombre = array(  'name' => 'nombre', 
                    'placeholder' => 'Escribe nombre completo',
                    'class' => 'form-control',
                    'value' => set_value('nombre'));
  //opciones select profesion
  $profesion = array( 'NULL' => 'Elige una opción',
                      'Psicologia'  => 'Psicologia',
                      'Abogada'  => 'Abogada',
                      'Coordinadora'  => 'Coordinadora',
                      'Planeacion'  => 'Planeacion' 
                    );
  //opciones select perfil
  $perfil = array(  'NULL' => 'Elige una opción',
                    'Administrador'  => 'Administrador',
                    'Profesionista'  => 'Profesionista',
                    'Coordinacion'  => 'Coordinacion'
                  );
  //opciones select area
  $area = array(  'NULL' => 'Elige una opción',
                  'CAE'  => 'CAE (Centro de Atencion Externa)',
                  'CJM'  => 'CJM (Centro de Justicia de las Mujeres)',
                  'M FIJO'  => 'Módulo Fijo'
                );
  //input usuario
  $usuario = array( 'name' => 'usuario', 
                    'placeholder' => 'usuarito',
                    'class' => 'form-control',
                    'value' => set_value('usuario'));


  $estilo = array('class' => 'form-control');

  //input contrasena
  $contrasena = array(  'name' => 'contrasena', 
                        'placeholder' => '********',
                        'class' => 'form-control',
                        'value' => set_value('contrasena'));
  //btn guardar
  $guardar = array( 'name' => 'submit', 
                    'value' => 'Guardar', 
                    'title' => 'Guardar',
                    'class' => 'btn btn-primary  btn-block');
  //btn cancelar
  $cancelar = array(  'name' => 'submit', 
                      'value' => 'Cancelar', 
                      'title' => 'Cancelar',
                      'class' => 'btn btn-warning  btn-block');
?>
<body>
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#">
          <em class="fa fa-users bread"></em>
        </a></li>
        <li class="active">Administrador de Usuarios</li>
        <li class="active">Agregar nuevo usuario</li>
      </ol>
      <div class="col-md-12">
        <h1 class="">Agregar nuevo usuario</h1>
      </div>
    </div><!--/.row-->

  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <div class="login-panel panel panel-default">
        <div class="panel-body ">
         <form method="post" action="<?= base_url()?>usuarios_controller/insertarUsuario">
            <fieldset>
              <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                      <label>Nombre completo: *</label>
                      <div class="form-group">
                          <?=form_input($nombre)?>
                          <span><?=form_error('nombre')?></span>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-6 col-md-4 col-lg-4">
                    <label>Profesión: *</label>
                    <div class="form-group">
                        <?=form_dropdown('profesion', $profesion,  $arrayName = array('class' => 'form-control'))?>
                        <span><?=form_error('profesion')?></span>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4">
                    <label>Perfil: *</label>
                    <div class="form-group">
                        <?=form_dropdown('perfil', $perfil, $arrayName = array('class' => 'form-control' ))?>
                        <span><?=form_error('perfil')?></span>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4">
                      <label>Área: *</label>
                      <div class="form-group">
                          <?=form_dropdown('area', $area, $arrayName = array('class' => 'form-control' ))?>
                          <span><?=form_error('area')?></span>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <label>Usuario: *</label>
                    <div class="form-group">
                        <?=form_input($usuario)?>
                        <span><?=form_error('usuario')?></span>
                    </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <label>Contraseña: *</label>
                    <div class="form-group">
                        <?=form_password($contrasena)?>
                        <span><?=form_error('contrasena')?></span>
                        <p>La contraseña debe tener al menos 8 caracteres </p>
                    </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12 col-md-2 col-md-offset-8 col-lg-2 col-lg-offset-8">
                    <div class="form-group">
                      <div class="form-group">
                      <?php echo anchor('usuarios_controller', 'Cancelar ', $cancelar);?>
                    </div>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-2 col-lg-2">
                    <?= form_submit($guardar); ?>
                  </div>
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


