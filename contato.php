<?php
	session_start();
	$enviou = $_SESSION['enviou'];
?>

<!DOCTYPE html>
<html>

<head>
    <?php include("include/head.php"); ?>
</head>

<body>
    <div class="desktop">
        <?php include("include/navegacao.php"); ?>
        
        <div>			
            <div class="row align-items-center justify-content-center" name="formulario contato" style="margin-top: 7%">
				<?php if($enviou == 1){ ?>
					<div class="alert alert-success col-7 alert-dismissible fade show" style="text-align: center" role="alert">
						<strong>Mensagem enviada com sucesso! Entraremos o mais rápido possível.</strong>

						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php } ?>
				
                <form class="col-7" action="contatologica.php" name="formulario contato site" method="post">
                    <div class="form-group">
                        <label for="nome">Nome completo</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome" required="true">
                    </div>

                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input type="text" class="cel form-control" name="celular" id="celular" placeholder="Digite o celular para contato" required="true">
                    </div>

                    <div class="form-group">
                        <label for="email_cliente">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu e-mail" required="true">
                    </div>

                    <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea class="form-control mb-3" name="mensagem" id="mensagem" required="true"></textarea>
                        <button type="submit" class="btn btn-warning text-light" style="width: 100%"><strong>Enviar</strong></button>
                    </div>
                </form>
            </div>			
        </div>
				
        <div style="margin-top: 2%" class="container-fluid">
            <hr style="background-color: black">
            <div align="center">
                <!-- <img src="task.png" width="50%"  style="margin-top: -1%; margin-left: -0.6%" ><br><br> -->
                <a href="https://wa.me/5511946560824" style="text-decoration: none;" class="text-dark">
                    <i class="fa fa-whatsapp fa-3x" aria-hidden="true" style="color: #11b25b"></i>
                    <strong style="font-size: 20pt"> (11)94656-0824 </strong>
                </a>

                <strong style="font-size: 20pt" class="text-dark"> | </strong>

                <a href="https://wa.me/5511940823559" style="text-decoration: none" class="text-dark">
                    <strong style="font-size: 20pt"> (11)94082-3559 </strong>
                </a>
            </div>

            <?php include("include/rodape.php"); ?>
        </div>
    </div>
    
    <!-- mobile -->
    <div class="mobile">
        <?php include("include/navegacao-mob.php"); ?>
        <div class="row align-items-center justify-content-center" name="formulario contato" style="margin-top: 20%">
            <form class="col-10" action="contatologica.php" name="formulario contato site" method="post">
                <div class="form-group">
                    <label for="nome">Nome completo</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome" required="true">
                </div>

                <div class="form-group">
                    <label for="celular">Celular</label>
                    <input type="text" class="cel form-control" name="celular" id="celular" placeholder="Digite o celular para contato" required="true">
                </div>

                <div class="form-group">
                    <label for="email_cliente">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu e-mail" required="true">
                </div>
                
                <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <textarea class="form-control mb-3" name="mensagem" id="mensagem" required="true"></textarea>
                    <button type="submit" class="btn btn-warning text-light" style="width: 100%" onclick="window.location.href='https://www.grupotaskforce.com.br/contato.html'"><strong>Enviar</strong></button>
                </div>
            </form>
        </div>
        
        <hr style="background-color: black">

        <div align="center">
            <a href="https://wa.me/5511946560824" style="text-decoration: none;" class="text-dark">
                <i class="fa fa-whatsapp fa-lg" aria-hidden="true" style="color: #11b25b"></i>
                <strong style="font-size: 12pt"> (11)94656-0824 </strong>
            </a>
            <br>
            <a href="https://wa.me/5511940823559" style="text-decoration: none" class="text-dark">
                <i class="fa fa-whatsapp fa-lg" aria-hidden="true" style="color: #11b25b"></i>
                <strong style="font-size: 12pt"> (11)94082-3559 </strong>
            </a>
        </div>
        <?php include("include/rodape-mob.php"); ?>
    </div>
</body>
</html>