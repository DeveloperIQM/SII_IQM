<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><img src="<?= base_url()?>recursos/img/logo-iqm.png" style="width: 28%;"></a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-danger">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><b>Angie Godínez</b></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>En línea</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li class="active"><a href="<?=base_url('inicio_controller')?>"><em class="fa fa-home">&nbsp;</em> Inicio</a></li>
			<li><a href="<?=base_url('usuarios_controller')?>"><em class="fa fa-users">&nbsp;</em> Administrador</a></li>
			<li><a href="<?=base_url('usuarias_controller')?>"><em class="fa fa fa-female">&nbsp;</em> Usuarias IQM</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1"><em class="fa fa-clipboard">&nbsp;</em> Atención por Área <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span></a>
			  <ul class="children collapse" id="sub-item-1">
			   <li><a class="" href="#"><span class="fa fa-balance-scale">&nbsp;</span> Legal</a></li>
			   <li><a class="" href="#"><span class="fa fa-gg">&nbsp;</span> Psicología</a></li>
			   <li><a class="" href="#"><span class="fa fa-child">&nbsp;</span> Psicología Infantil</a></li>
			   <li><a class="" href="#"><span class="fa fa-object-group">&nbsp;</span> Terapía Grupal</a></li>
			  </ul>
			</li>
			<li><a href="panels.html"><em class="fa fa-sort-amount-asc">&nbsp;</em> Derivaciones</a></li>
			<li><a href="panels.html"><em class="fa fa-file-excel-o">&nbsp;</em> Base de Datos</a></li>
			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->