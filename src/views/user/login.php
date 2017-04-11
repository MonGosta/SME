<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="Mongosta" />

	<title>Xenon - Login</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
	<link rel="stylesheet" href="/Mongosta/public/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="/Mongosta/public/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/Mongosta/public/css/bootstrap.css">
	<link rel="stylesheet" href="/Mongosta/public/css/xenon-core.css">
	<link rel="stylesheet" href="/Mongosta/public/css/xenon-forms.css">
	<link rel="stylesheet" href="/Mongosta/public/css/xenon-components.css">
	<link rel="stylesheet" href="/Mongosta/public/css/xenon-skins.css">
	<link rel="stylesheet" href="/Mongosta/public/css/custom.css">

	<script src="/Mongosta/public/js/jquery-1.11.1.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body login-page">

	
	<div class="login-container">
	
		<div class="row">
	
			<div class="col-sm-6">
	
				<script type="text/javascript">
					jQuery(document).ready(function($)
					{
						// Reveal Login form
						setTimeout(function(){ $(".fade-in-effect").addClass('in'); }, 1);
	
	
						
	
						// Set Form focus
						$("form#login .form-group:has(.form-control):first .form-control").focus();
					});
				</script>
	
				<!-- Errors container -->
				<div class="errors-container">
	
					
				</div>
	
				<!-- Add class "fade-in-effect" for login form effect -->
				<form method="post" role="form" id="login" class="login-form fade-in-effect">
	
					<div class="login-header">
							<img src="/Mongosta/public/images/logoCasfid2.png" alt="" width="80" />
					</div>
					
						<h3>Login</h3>
						<br>
						
					<div class="form-group">
						
						<input type="text" class="form-control input-dark" name="email" id="email" autocomplete="off" value="<?=$user->getEmail(); ?>" placeholder="Email"/>
					</div>
	
					<div class="form-group">
						<input type="password" class="form-control input-dark" name="contrasena" id="contrasena" autocomplete="off" value="<?=$user->getContrasena(); ?>" placeholder="Contraseña"/>
					</div>
					
	
					<div class="form-group">
						<button type="submit" class="btn btn-dark  btn-block text-left">
							<i class="fa-lock"></i>
							Log In
						</button>
					</div>
					<div class="login-footer">
				
	
					</div>
	
				</form>

				</div>
	
			</div>
	
		</div>



	<!-- Bottom Scripts -->
	<script src="/Mongosta/public/js/bootstrap.min.js"></script>
	<script src="/Mongosta/public/js/TweenMax.min.js"></script>
	<script src="/Mongosta/public/js/resizeable.js"></script>
	<script src="/Mongosta/public/js/joinable.js"></script>
	<script src="/Mongosta/public/js/xenon-api.js"></script>
	<script src="/Mongosta/public/js/xenon-toggles.js"></script>
	<script src="/Mongosta/public/js/jquery-validate/jquery.validate.min.js"></script>
	<script src="/Mongosta/public/js/toastr/toastr.min.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="Mongosta/public/js/xenon-custom.js"></script>

</body>
</html>