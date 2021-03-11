<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
 <link href="../public/css/estiloformulario.css" rel="stylesheet" type="text/css"/>

</head>  
<body>
   <div class="container">
	<div class="header">
                <h1>ITS VENTAS</h1>
		<h2>Registrarse</h2>
	</div>
       <form  id="form" class="form" method="POST" action="../ajax/registro.php">
                <div class="form-control">
			<label for="username">Nombres</label>
                        <input type="text" placeholder="Dany Zhuwgt" id="nombres" name="nombres" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
                <div class="form-control">
			<label for="username">Tipo de Identificacion</label>
                        <input type="text" placeholder="Pasaporte" id="tipo_documento" name="tipo_documento"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
                <div class="form-control">
			<label for="username">Num. Identificacion</label>
                        <input type="text" placeholder="0123456789" id="num_documento" name="num_documento"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Username</label>
                        <input type="text" placeholder="danyzhuw17" id="username" name="username"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Email</label>
                        <input type="email" placeholder="a@florin-pop.com" id="email" name="email"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Password</label>
                        <input type="password" placeholder="Contraseña" id="password" name="password"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Password check</label>
                        <input type="password" placeholder="Repetir contraseña" id="password2" name="password2"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
           <input id="btnRegistrar" name="btnRegistrar" type="submit" value="Registrate" class="button">
                <p class="h1">Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿Ya tienes una cuenta?  <a class="link" href="login.html">Iniciar Sesion</a></p>
	</form>
</div>

    <script src="scripts/validasiones.js" type="text/javascript"></script>
    <script src="scripts/usuario.js" type="text/javascript"></script>
</body>
</html>