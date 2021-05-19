<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
        <title>Willians Martins</title>
    </head>
    <body>
		<div class="container">
			<h1>Faça upload de uma imagem</h1>
			<?php
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
				?>
			<form method="POST" action="processa.php" enctype="multipart/form-data">
				<label>Imagem: </label>
				<input type="file" name="imagem"><br><br>
				
				<input type="submit" value="Vai!" class="btn btn-success"><br><br>
			</form>
		</div>
	</body>
</html>