<?php 
	if($_REQUEST['home']){
		header("location: index.php");
	}

	if($_REQUEST['sobre']){
		header("location: sobre.php");
	}

	if($_REQUEST['contato']){
		header("location: contato.php");
	}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="https://www.grupotaskforce.com.br/index.php">
        <img src="imagens/Logo.png" width="30" height="30" alt="">
    </a>
    <div class="dropleft" style="margin-right: 2%">
        <button class="navbar-toggler" type="button" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" id="dropdownMenuButton">
            <span class="navbar-toggler-icon"></span>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<a class="dropdown-item" onClick="window.location.href='https://www.grupotaskforce.com.br/index.php'">Página Inicial</a>				
					<hr>
					<a class="dropdown-item btn" onClick="window.location.href='https://www.grupotaskforce.com.br/sobre.php'">Sobre nós</a>
					<hr>
					<a class="dropdown-item btn" onClick="window.location.href='https://www.grupotaskforce.com.br/contato.php'">Contato</a>
				</form>
            </div>
        </button>
    </div>
</nav>
