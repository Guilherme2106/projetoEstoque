
<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <form class="main-login" method="POST" action="valida.php">
        <div class="left-login">
            <h1>Projeto E-estoque</h1>
            <img src="astronautalive.svg" class="left-login-image" alt="Astronauta live">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <div class="textfield">
                    <label for="inputEmail">Email</label>
                    <input type="text" name="email" id="inputEmail" placeholder="Usuário" required>
                </div>
                <div class="textfield">
                    <label for="inputPassword">Senha</label>
                    <input type="password" name="senha" id="inputPassowrd" placeholder="Senha" required>
                </div>
                
                <button class="btn-login" type="submit">Login</button>
            </div>
        </div>
    </div>
    </form>
    <p class="text-center text-danger">
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}?>
		</p>
		<p class="text-center text-success">
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
		</p>
</body>
</html>