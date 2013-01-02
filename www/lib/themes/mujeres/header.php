<?php
	if(!defined("_access")) {
		die("Error: You don't have permission to access here...");
	}
?>
<!DOCTYPE html>
<html lang="<?php echo _get("webLang"); ?>">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<?php echo $this->getMeta(); ?>
	
	<title><?php echo $this->getTitle(); ?></title>
	
    <link rel="stylesheet" href="<?php echo path("www/lib/css/default.css", TRUE); ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo $this->themePath; ?>/css/style.css" type="text/css">
	<link rel="shortcut icon" href="<?php echo $this->themePath; ?>/images/favicon.ico">

	<?php 
		echo $this->getCSS(); 
	 	
	 	echo $this->js("jquery", NULL, TRUE);   
	?>

	<script type="text/javascript" src="<?php echo $this->themePath; ?>/js/porlets.js"></script>
        
    <script type="text/javascript">
		var PATH = "<?php print path(); ?>";
		
		var URL  = "<?php print _get('webURL'); ?>";
	</script>

	<link href="http://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="<?php echo $this->themePath; ?>/js/flexslider/flexslider.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="<?php echo $this->themePath; ?>/js/flexslider/jquery.flexslider.min.js"></script>

	<script type="text/javascript" charset="utf-8">
		$(function() {
	    	$('.flexslider').flexslider();
	  	});
	</script>
</head>

<body>	
<div id="topbar-wrapper">
			<div id="topbar">
				<nav>
					<ul>
						<li><a href="<?php echo path(__("_kitchen"), FALSE, FALSE); ?>" title="<?php echo __("Kitchen"); ?>"><?php echo __("Kitchen"); ?></a></li>
						<li><a href="<?php echo path(__("_beauty"), FALSE, FALSE); ?>" title="<?php echo __("Beauty"); ?>"><?php echo __("Beauty"); ?></a></li>
						<li><a href="<?php echo path(__("_home"), FALSE, FALSE); ?>" title="<?php echo __("Home"); ?>"><?php echo __("Home"); ?></a></li>
						<li><a href="<?php echo path(__("_family"), FALSE, FALSE); ?>" title="<?php echo __("Family"); ?>"><?php echo __("Family"); ?></a></li>
						<li><a href="<?php echo path(__("_health"), FALSE, FALSE); ?>" title="<?php echo __("Health"); ?>"><?php echo __("Health"); ?></a></li>
						<li><a href="<?php echo path(__("_sexuality"), FALSE, FALSE); ?>" title="<?php echo __("Sexuality"); ?>"><?php echo __("Sexuality"); ?></a></li>
						<script type="text/javascript">
							if((screen.width > 800) && (screen.height > 600)) {
								document.write('<li><a href="#" title="<?php echo __("Forums"); ?>"><?php echo __("Forums"); ?></a></li> <li><a href="#" title="<?php echo __("Feedback"); ?>"><?php echo __("Feedback"); ?></a></li>');
							}
						</script>				
					</ul>
				</nav>

				<div id="top-box-register" class="toggle">
					<span class="bold"><?php echo __("Are you new?, Register!"); ?></span><br />

					<form action="es/users/register" method="post" class="form-register">
						<fieldset>
							<input id="register-name" name="name" class="register-input" type="text" required placeholder="<?php echo __("Full Name"); ?>" /> <br />
							<input id="register-email" name="email" class="register-input" type="email" required placeholder="Email" /> <br />
							<input id="register-password" name="password" class="register-input" type="password" required placeholder="<?php echo __("Password"); ?>" /> <br />
							<input name="register" class="register-submit" type="submit" value="¡Regístrate!" />
						</fieldset>
					</form>
				</div>

				<div id="top-box-login" class="toggle">
					<span class="bold"><?php echo __("Have an account?, Connect!"); ?></span><br />

					<form action="http://www.codejobs.biz/es/users/login" method="post" class="form-login">
						<fieldset>
							<input id="login-username" name="username" class="login-input" type="text" required placeholder="<?php echo __("Username or Email"); ?>" /> <br />
							<input id="login-password" name="password" class="login-input" type="password" required placeholder="<?php echo __("Password"); ?>" /> 
							<br />
							<a href="http://www.codejobs.biz/es/users/recover"><?php echo __("Forgot your password?"); ?></a>

							<input name="login" class="login-submit" type="submit" value="<?php echo __("Login"); ?>" />
						</fieldset>
					</form>
				</div>

				<div id="top-box-profile" class="toggle">
					<div class="top-box-profile">
						<div style="float: left; width: 90px;">
							<img src="http://www.codejobs.biz/www/lib/files/images/users/" alt="" />
						</div>

						<div style="float: left; width: 170px; line-height: 15px;">
							<span class="bold"></span> <br />
							<span class="small grey"><a href="#">Ver mi página de perfil</a></span><br />

							<div style="width: 170px; border-top: 1px dotted #CCC; margin-top: 5px; margin-bottom: 5px;"></div>
							
							<span class="small grey"><a href="#">Mensajes Directos</a></span><br />
							<span class="small grey"><a href="#">Ayuda</a></span><br />

							<div style="width: 170px; border-top: 1px dotted #CCC; margin-top: 5px; margin-bottom: 5px;"></div>

							<span class="small grey"><a href="http://www.codejobs.biz/es/blog/admin"><strong>Mis publicaciones</strong>: 0</a></span><br />
							<span class="small grey"><a href="http://www.codejobs.biz/es/codes/admin"><strong>Mis códigos</strong>: 0</a></span><br />
							<span class="small grey"><a href="http://www.codejobs.biz/es/bookmarks/admin"><strong>Mis marcadores</strong>: 0</a></span><br />
							<!--span class="small grey"><strong>Mis empleos</strong>: <a href="#">0</a></span><br />
							<span class="small grey"><strong>Mis cursos</strong>: <a href="#">0</a></span><br />
							<span class="small grey"><strong>Mis puntos</strong>: 0</span><br /-->

							<div style="width: 170px; border-top: 1px dotted #CCC; margin-top: 5px; margin-bottom: 5px;"></div>

							<span class="small grey bold"><a href="http://www.codejobs.biz/es/codes/add">Publicar un código</a></span><br />
							<span class="small grey"><a href="#">Publicar un empleo</a></span><br />
							<span class="small grey bold"><a href="http://www.codejobs.biz/es/bookmarks/add">Publicar un marcador</a></span><br />
							<span class="small grey"><a href="#">Publicar una entrada</a></span><br />

							<div style="width: 170px; border-top: 1px dotted #CCC; margin-top: 5px; margin-bottom: 5px;"></div>

							<span class="small grey"><a href="#">Actualizar mi currículum</a></span><br />

							<div style="width: 170px; border-top: 1px dotted #CCC; margin-top: 5px; margin-bottom: 5px;"></div>

							<span class="small grey"><a href="http://www.codejobs.biz/es/cpanel">Ir al Panel de Control</a></span><br />
								
							<span class="small grey"><a href="http://www.codejobs.biz/es/users/logout">Desconectar</a></span><br />
						</div>

						<div class="clear"></div>
					</div>
				</div>

				<div id="top-box">
					<ul class="top-box-ul">
						<li class="float-right">
							<a id="display-login" href="#" title="Conectar">
								<?php echo __("Login"); ?> <img class="noborder" src="http://www.codejobs.biz/www/lib/themes/newcodejobs/images/arrow-down.png" class="noborder" />
							</a>
						</li>
						
						<li class="float-right">
							<a id="display-register" href="#" title="Regístrar">
								<?php echo __("Register"); ?> <img class="noborder" src="http://www.codejobs.biz/www/lib/themes/newcodejobs/images/arrow-down.png" class="noborder" />
							</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="clear"></div>
		</div>

		<div class="container">
			<header>
				<a href="<?php echo path(); ?>" title="<?php echo __("Women in the Kitchen"); ?>"><img class="logo noborder" src="<?php echo $this->themePath; ?>/images/logo.png" alt="Mujeres en la Cocina" /></a>
			
				<nav class="menu">
					<ul>
						<li><a href="http://www.codejobs.biz/es/codes"><?php echo __("Appetizers"); ?></a></li>
						<li><a href="http://www.codejobs.biz/es/jobs"><?php echo __("Poultry"); ?></a></li>
						<li><a href="http://www.codejobs.biz/es/forums"><?php echo __("Meat"); ?></a></li>
						<li><a href="http://www.youtube.com/codejobs" target="_blank"><?php echo __("Salads"); ?></a></li>
						<li><a href="http://www.codejobs.biz/es/bookmarks"><?php echo __("Seafood"); ?></a></li>
						<li><a href="http://www.codejobs.biz/es/bookmarks"><?php echo __("Desserts"); ?></a></li>							
						<li><a href="http://www.codejobs.biz"><?php echo __("Sushi"); ?></a></li>
						<li><a href="http://www.codejobs.biz"><?php echo __("Vegetables"); ?></a></li>
						<li><a href="http://www.codejobs.biz"><?php echo __("Others"); ?></a></li>	
						<script type="text/javascript">
							if(screen.width > 800) {
								var social = '<li class="social"><a href="#" title="Facebook"><img class="down noborder" src="<?php echo $this->themePath; ?>/images/social/facebook.png" alt="Facebook" /></a></li>';
									social = social + '<li class="social"><a href="#" title="Twitter"><img class="down noborder" src="<?php echo $this->themePath; ?>/images/social/twitter.png" alt="Twitter" /></a></li>';
									social = social + '<li class="social"><a href="#" title="Youtube"><img class="down noborder" src="<?php echo $this->themePath; ?>/images/social/youtube.png" alt="Youtube" /></a></li>';
								document.write(social);
							}
						</script>
					</ul>

					<script type="text/javascript">
						if(screen.width < 800) {
							var social = '<div style="width: 120px; margin-left: 105px;"><a href="#" title="Facebook"><img class="down noborder" src="<?php echo $this->themePath; ?>/images/social/facebook.png" alt="Facebook" /></a>';
								social = social + ' <a href="#" title="Twitter"><img class="down noborder" src="<?php echo $this->themePath; ?>/images/social/twitter.png" alt="Twitter" /></a>';
								social = social + ' <a href="#" title="Youtube"><img class="down noborder" src="<?php echo $this->themePath; ?>/images/social/youtube.png" alt="Youtube" /></a></div>';
							document.write(social);
						}
					</script>
				</nav>
			</header>

			<div class="flexslider">
		  		<ul class="slides">
		    		<li><img src="<?php echo $this->themePath; ?>/images/slider/slider1.png" /></li>
		    		<li><img src="<?php echo $this->themePath; ?>/images/slider/slider2.png" /></li>
		    		<li><img src="<?php echo $this->themePath; ?>/images/slider/slider3.png" /></li>
		  		</ul>
			</div>