<?

$destinatario = $_POST['destinatario'];

  // Dados de envio e da mensagem
	
	$nome_remetente	= "Bulfaitelo";	
	$assunto = "Mensagem de teste";
	$email_remetente = "bulfaite@bulfaitelo.net";
	$email_destinatario = "$destinatario";
	
	// Conteudo do e-mail (você poderá usar HTML)
	
	$mensagem = "Oi!<br />";
	$mensagem .= "Esta é uma mensagem de teste!<br />";
	$mensagem .= "Até mais!<br /><br />";
	$mensagem .= "<b><a href='bulfaitelo.net'>bulfaitelo.net</a></b><br />";

	// Cabeçalho do e-mail. Não é necessário alterar geralmente...

	$cabecalho = 	"MIME-Version: 1.0\n";
	$cabecalho .= 	"Content-Type: text/html; charset=UTF-8\n";
	$cabecalho .= 	"From: \"{$nome_remetente}\" <{$email_remetente}>\n";

	// Dispara e-mail e retorna status para variável
	
	$status_envio = @mail ($email_destinatario, $assunto, $mensagem, $cabecalho); 

	// Se mensagem foi enviada pelo servidor…
	
	if ($status_envio)
	{
		echo "Mensagem enviada!";
        echo "<br /> Para: $destinatario";
	}
	
	// Se mensagem não foi enviada pelo servidor…
	
	else
	{
		echo "Mensagem não enviada!";
        echo "<br /> Para: $destinatario";
	}

?>
