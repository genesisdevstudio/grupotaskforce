<!DOCTYPE html>
<html>

<head>
   <?php include("include/head.php"); ?>
</head>

<body>
    <div class="desktop">
        <?php include("include/navegacao.php"); ?>
        
        <div style="margin-top: 5%" class="container-fluid">
            <div align="center" style="margin-top: 2%; margin-bottom: 2%">
                <img src="imagens/Logo.png" width="23%" alt="logo da empresa" style="z-index: 2">
            </div>

            <hr style="background-color: black">
            <div align="center">
                <!-- <img src="task.png" width="50%"  style="margin-top: -1%; margin-left: -0.6%" ><br><br> -->
                <h3 class="text-dark">Serviços de portaria e limpeza!</h3>
                <br>
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
        
        <div align="center" style="margin-top: 20%; margin-bottom: 2%">
            <img src="imagens/Logo.png" width="50%" alt="logo da empresa" style="z-index: 2">
        </div>

        <hr style="background-color: black">
        <div align="center">
            <h3 class="text-dark">Serviços de portaria e limpeza!</h3>
            <br>
            <a href="https://wa.me/5511946560824" style="text-decoration: none;" class="text-dark">
                <i class="fa fa-whatsapp fa-3x" aria-hidden="true" style="color: #11b25b"></i>
                <strong style="font-size: 20pt"> (11)94656-0824 </strong>
            </a>
            <br>
            <a href="https://wa.me/5511940823559" style="text-decoration: none" class="text-dark">
                <i class="fa fa-whatsapp fa-3x" aria-hidden="true" style="color: #11b25b"></i>
                <strong style="font-size: 20pt"> (11)94082-3559 </strong>
            </a>
        </div>
     <?php include("include/rodape-mob.php"); ?>
        
    </div>
</body></html>
