<html>

	<head>
		<title>KevS</title>

				<link rel="stylesheet" href="css/kevs.css">

	</head>

	<body>
	<div class="navbar">
	  <a href="home.html">Inicio</a>
	  <a href="news.html">Novidades</a>
	  <a href="contact.html">Contato</a>

	</div>

		<div class="kev">
	  <a name="kev">KevS</a>


	</div>



	<div class="main">
	  <p>I`ll blow real soon</p>
	</div>



		<h1>Contato</h1>

		<p><h2>Como falar com KevS?</h2></p>

		<p>Whatsapp: (17) 98137-1482</p>

		<h2>Envie um email diretamente para prodkevs@gmail.com</h2>

		<form  action="sendemail.php" method="post" enctype="text/plain">
		Nome:<br>
		<input type="text" name="name"><br>
		E-mail:<br>
		<input type="text" name="mail"><br>
		Comentário:<br>
		<input type="text" name="comment" placeholder="Digite um comentário para KevS"><br><br>
		<input type="submit" value="Enviar">
		<input type="reset" value="Cancelar">
		</form>

	
		<br>
			
			<div class="logo">
		<p name="logo">© 2021 Official Website of KevS</p>
	</div>
		</br>

<?php

$nome=$_POST['name'];
$email=$_POST['mail'];
$comment=$_POST['comment'];

?>

<?php

$to = "prodkevs@gmail.com";
$comments = "Nome: $nome Email: $email Comentario: $comment";

	mail($to, $subject, $comments);
	echo "<strong> Mensagem enviada com sucesso! </strong>";


?>

<meta http-equiv="refresh" content="0; url=https://kevsmusics.000webhostapp.com/contact.html" />


</body>

</html>