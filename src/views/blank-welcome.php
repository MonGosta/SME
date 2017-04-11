<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />

	<title>Bienvenido <?=$client->getNombre();?></title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
	<link rel="stylesheet" href="../public/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="../public/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../public/css/bootstrap.css">
	<link rel="stylesheet" href="../public/css/xenon-core.css">
	<link rel="stylesheet" href="../public/css/xenon-forms.css">
	<link rel="stylesheet" href="../public/css/xenon-components.css">
	<link rel="stylesheet" href="../public/css/xenon-skins.css">
	<link rel="stylesheet" href="../public/css/custom.css">

	<script src="../public/js/jquery-1.11.1.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body">

	<div class="settings-pane">

		<a href="#" data-toggle="settings-pane" data-animate="true">
			&times;
		</a>

		<div class="settings-pane-inner">

			<div class="row">


				<div class="col-md-8 link-blocks-env">

					<div class="links-block left-sep">
						<h4>
							<span>Notifications</span>
						</h4>


					</div>

					<div class="links-block left-sep">
						<h4>
							<a href="#">
								<span>Help Desk</span>
							</a>
						</h4>

						<ul class="list-unstyled">
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Terms of Service
								</a>
							</li>
						</ul>
					</div>

				</div>

			</div>

		</div>

	</div>

	<nav class="navbar horizontal-menu navbar-fixed-top navbar-minimal"><!-- set fixed position by adding class "navbar-fixed-top" -->

		<div class="navbar-inner">

			<!-- Navbar Brand -->
			<div class="navbar-brand">
				<a href="../../index.php" class="logo">
					<img src="mongosta/public/images/logoCasfid.png" width="80" alt="" class="hidden-xs" />
					<img src="mongosta/public/images/logoCasfid2.png" width="80" alt="" class="visible-xs" />
				</a>
				<a href="#" data-toggle="settings-pane" data-animate="true">
					<i class="linecons-cog"></i>
				</a>
			</div>

			<!-- Mobile Toggles Links -->
			<div class="nav navbar-mobile">

				<!-- This will toggle the mobile menu and will be visible only on mobile devices -->
				<div class="mobile-menu-toggle">
					<!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
					<a href="#" data-toggle="settings-pane" data-animate="true">
						<i class="linecons-cog"></i>
					</a>

					<a href="#" data-toggle="user-info-menu-horizontal">
						<i class="fa-bell-o"></i>
						<span class="badge badge-success">7</span>
					</a>

					<!-- data-toggle="mobile-menu-horizontal" will show horizontal menu links only -->
					<!-- data-toggle="mobile-menu" will show sidebar menu links only -->
					<!-- data-toggle="mobile-menu-both" will show sidebar and horizontal menu links -->
					<a href="#" data-toggle="mobile-menu-horizontal">
						<i class="fa-bars"></i>
					</a>
				</div>

			</div>

			<div class="navbar-mobile-clear"></div>



			<!-- main menu -->

			<ul class="navbar-nav">
				<li>
					<a href="user/index.php">
						<i class="linecons-cog"></i>
						<span class="title">Inicio</span>
					</a>
					<ul>
						<li>
							<a href="skin-generator.html">
								<span class="title">Skin Generator</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="../event/index">
						<i class="linecons-desktop"></i>
						<span class="title">Eventos</span>
					</a>
				</li>
				<li>
					<a href="../client/index">
						<i class="linecons-params"></i>
						<span class="title">Clientes</span>
					</a>
				</li>
				<li>
					<a href="">
						<i class="linecons-diamond"></i>
						<span class="title">A pagar a pagar</span>
					</a>
				</li>
			</ul>


			<!-- notifications and other links -->
			<ul class="nav nav-userinfo navbar-right">

				<li class="dropdown user-profile">
					<a href="#" data-toggle="dropdown">
						Aqui si queremos ponemos una foto
						<span>
							Aqui un insertar el nombre de usuario

						</span>
					</a>


				</li>
			</ul>

		</div>

	</nav>

	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

		<div class="main-content">

			<h3>Here starts everything&hellip;</h3>
			<br />

			<ul>
     <p> Usuario </p>
	<li><?= $user->getUsuario(); var_dump($user)  ?> </li>
    <p> Cliente </p>
	<li><?php $client->getNombre(); var_dump($client) ?> </li>
	 <p> Eventos</p>
	<li><?= $event->getNombre(); ?> </li>

	<?php
	foreach ($event as $ev) {

		?>
         <li><?= $ev->get(); ?> </li>
   <?php
	}

    ?>

</ul>

<a href="../event/register"> <button> Nuevo Evento </button> </a>
<a href="../user/register"> <button> Nuevo Usuario </button> </a>

			<!-- Main Footer -->
			<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
			<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
			<!-- Or class "fixed" to  always fix the footer to the end of page -->
			<footer class="main-footer sticky footer-type-1">

				<div class="footer-inner">

					<!-- Add your copyright text here -->
					<div class="footer-text">
						&copy; 2014
						<strong>Xenon</strong>
						theme by <a href="http://laborator.co" target="_blank">Laborator</a> - <a href="http://themeforest.net/item/xenon-bootstrap-admin-theme/9059661?ref=Laborator" target="_blank">It's Free! <strong>0.00$</strong></a>
					</div>


					<!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
					<div class="go-up">

						<a href="#" rel="go-top">
							<i class="fa-angle-up"></i>
						</a>

					</div>

				</div>

			</footer>
		</div>
	</div>






	<!-- Bottom Scripts -->
	<script src="../public/js/bootstrap.min.js"></script>
	<script src="../public/js/TweenMax.min.js"></script>
	<script src="../public/js/resizeable.js"></script>
	<script src="../public/js/joinable.js"></script>
	<script src="../public/js/xenon-api.js"></script>
	<script src="../public/js/xenon-toggles.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="../public/js/xenon-custom.js"></script>

</body>
</html>