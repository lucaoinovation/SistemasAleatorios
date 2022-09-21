<?php
	$to 	  = "henrique7508@gmail.com";
	$subject  = $_POST["assunto"];
	$message  = $_POST["mensagem"];
	$message .= "<hr> Por <i>".$_POST["nome"]."</i>";
	$headers  = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
	$headers .= "From: <".$_POST["email"].">" . "\r\n";
	$headers .= "Reply-to: <".$_POST["email"].">" . "\r\n";
	$headers .= "X-Mailer: PHP/" . phpversion();
	
	$status = mail($to, $subject, $message, $headers);
	
	if($status==true){
		print "<b>".$_POST["nome"]."</b>, muito obrigado por sua mensagem. E-mail enviado com sucesso!";
	}else{
		print "E-mail não enviado";
	}
?>