<?php
	session_start();
	//Variáveis
	 
	$nome = $_POST['nome'];
	$celular = $_POST['celular'];
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];
	$data_envio = date('d/m/Y');
	$hora_envio = date('H:i:s');

	// Compor E-mail
	$arquivo = "
	<style type='text/css'>
	body {
	margin:0px;
	font-family:Verdane;
	font-size:12px;
	text-align: justify;
	color: #666666;
	}	
	</style>
	<html>
		<h3>Olá,</h3><br>
		<b>$mensagem<b><br>
		<p>Atenciosamente,</p>
		<p>$nome</p>
		<p>Cel.: $celular</p>
		<p>E-mail: $email</p>
	    <small>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></small>	      	
	</html>
	";

  //enviar
   
  // emails para quem será enviado o formulário
  $emailenviar = "taskforce1@bol.com.br";
  $destino = $emailenviar;
  $assunto = "Contato pelo Site";
 
  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      $headers .= 'From: '.$nome.' <'.$email.'>';
   
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){	
	$_SESSION['enviou'] = 1;  
  	header('Location: contato.php');
  }
?>