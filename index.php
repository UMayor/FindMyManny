<!DOCTYPE html>
<?
function passOlvidar(){
    alert("Contraseña enviada por correo electrónico.");
}
?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
	<script src="javascript/functions.js"></script>

    <title>Find my Nanny</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script>
		function validar(){
		$("#txtMail").val("");
			var txtPass=document.getElementById('txtPass');
			//alert(txtPass.value);
			//txtPass.value.localeCompare("111")
			var urlActual=window.location.href;
			//alert("actual "+urlActual);
			var posIndex=urlActual.lastIndexOf('index');
			var sinIndex=urlActual.substring(0,posIndex)
			//alert("sinIndex = "+sinIndex);
			var soli=sinIndex+"inicioSol.html";
			var nana=sinIndex+"inicioNana.html";

			//alert("soli = "+soli);
			//alert("nana = "+nana);
			
			if(txtPass.value.localeCompare("111")==0){
				//alert("sol "+window.location.href);
				//alert(sinIndex+"inicioSol.html");
				
				window.location=soli;
				//window.location="inicioSol.html";
			}
			if(txtPass.value.localeCompare("222")==0){
				//alert("nana "+window.location.href);
				//alert(sinIndex+"inicioNana.html");
				
				window.location=nana;
				//window.location="inicioNana.html";
			}
			
		}
	</script>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">¡Bienvenido a Find my Nanny!</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="email" id='txtMail' name='txtMail' placeholder="Correo" class="form-control" required>
            </div>
            <div class="form-group">
              <input type="password" id='txtPass' name='txtPass' placeholder="Clave" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success" onclick="validar()">Ingresar</button>
			<div>
                <a href="#" onclick="">¿Olvidó su contraseña?</a>
            </div>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>¡Bienvenido !</h1>
        <p>Ingrese con su correo y su clave.</p>
        <br>
        <br>
       
									<img class="img-circle" src="src/nanny3.jpg" alt="Nanny" width="116" height="189">
        <br>
        <br>
      </div>
    </div>
	

    <div class="container">
      <!-- Example row of columns -->

      <hr>

	  
	  <div class="container">
            <div class="row">
                <div  style="text-align: center;">
                <p class="col-md-4">Call Center</p>
                <p class="col-md-4"><span class="glyphicon glyphicon-phone-alt"> 300 300 3000</span></p>
                <p class="col-md-4"><span class="glyphicon glyphicon-envelope"></span><a href="#"> findmynanny@support.com</a></p>
                </div>
            </div>
        </div>
      <footer>
        <p>&copy; 2016 Find my Nanny Corp.</p>
      </footer>
    </div> <!-- /container -->

	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
