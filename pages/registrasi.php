<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Signin Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" action="../proses/prosesregistrasi.php" method="POST">
      <!-- <img class="mb-4" src="assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
	  <h1 class="h3 mb-3 font-weight-normal">Registrasi</h1>

	  <input type="text" id="inputEmail" class="form-control" name="nama" placeholder="Nama" required autofocus>
	  <br>
      <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Username" required autofocus>
	  <br>
	  <input type="password" id="pass1" class="form-control" name="pass" placeholder="Password" required>
	  <input type="password" id="pass2" class="form-control" name="pass" placeholder="Re Password" required>

      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
  </body>

	<script type="text/javascript">
		$(document).ready(function(){
 
			$('#pass2').on('blur', function(){
				var pass1 = $('#pass1').val()
				var pass2 = $('#pass2').val()
				if(!pass1 == pass2){
					alert('password tidak sama')
				}
			})
 
			// $('i').on('click', function(){
			// 	$(this).toggleClass('hideShow')
			// 	if($(this).hasClass('hideShow')){
			// 		$(this).removeClass('fa-eye-slash')
			// 		$(this).addClass('fa-eye')
			// 		$(this).prev().attr('type', 'text')
			// 	}else{
			// 		$(this).removeClass('fa-eye')
			// 		$(this).addClass('fa-eye-slash')
			// 		$(this).prev().attr('type', 'password')
			// 	}
			// })
		})
	</script>

</html>
