<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="https://www.grupotaskforce.com.br/index.php">
        <img src="imagens/Logo.png" width="30" height="30" alt="">
    </a>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item <?php if($_SERVER['PHP_SELF'] == "/index.php"){ ?>active<?php } ?>">
                <a class="nav-link" href="https://www.grupotaskforce.com.br/index.php">Página Inicial</a>
            </li>
			<li class="nav-item <?php if($_SERVER['PHP_SELF'] == "/sobre.php"){ ?>active<?php } ?>">
                <a class="nav-link" href="https://www.grupotaskforce.com.br/sobre.php">Sobre nós</a>
            </li>
            <li class="nav-item <?php if($_SERVER['PHP_SELF'] == "/contato.php"){ ?>active<?php } ?>">
                <a class="nav-link" href="https://www.grupotaskforce.com.br/contato.php">Contato</a>
            </li>
        </ul>
    </div>
</nav>
