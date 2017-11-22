<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-users bread"></em>
				</a></li>
				<li class="active">Administrador de Usuarios</li>
			</ol>
			<div class="col-md-12">
				<h1 class="">Administrador de usuarios</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-2 col-md-offset-9">
				<a href="usuarios_controller/nuevoUsuario" class="btn btn-success"><i class="fa fa-user-plus" aria-hidden="true"></i> Nuevo usuario </a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="container-fluid">
				    <div class="panel panel-success">
				      <div class="panel-heading">
				        <div class="row">
				          <div class="col-xs-4 col-sm-4 col-md-4">
				            <div class="input-group">
						      <input type="text" class="form-control" placeholder="Buscar por..." aria-label="Search for...">
						      <span class="input-group-btn">
						        <button class="btn btn-secondary" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
						      </span>
						    </div>
				          </div>
				        </div>
				      </div>
				      <div class="panel-body table-responsive">
				        <table class="table table-hover">
				          <thead>
				            <tr>
				              <th class="text-center" width="10%"> No. </th>
				              <th class="text-center" width="40%"> Nombre Completo </th>
				              <th class="text-center" width="40%"> Perfil </th>
				              <th class="text-center" width="10%"> Opciones </th>
				            </tr>
				          </thead>
				          <tbody>
				          	<?php 
				          	foreach ($consulta -> result() as $row){
				          	?>
				          	<tr class="edit" id="detail">
				              <td id="numero" class="text-center"> <?php echo $row->id_usuario ?> </td>
				              <td id="name" class="text-center"> <?php echo $row->nombre_completo; ?> </td>
				              <td id="mobile" class="text-center"> <?php echo $row->perfil; ?> </td>
				              <td id="mail" class="text-center" style="letter-spacing:3px;">
				                <i class="fa fa-pencil update" aria-hidden="true"></i>
				                <i class="fa fa-trash delete " aria-hidden="true"></i>
				              </td>
				            </tr>
				          	<?php	
				          	}
				          	?>
				          </tbody>
				        </table>
				      </div>

				      <div class="panel-footer">
				        <div class="row">
				          <div class="col-lg-12">
				            <div class="col-md-8">
				              </div>
				              <div class="col-md-4">
				              
				            </div>
				          </div>
				        </div>
				      </div>
				    </div>
  				</div>
			</div>
		</div><!--/.row-->
		<br>
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-6">
			</div><!--/.col-->
			<div class="col-md-6">
			</div><!--/.col-->
			<div class="col-sm-12">
				
			</div>
		</div><!--/.row-->
		
	
	