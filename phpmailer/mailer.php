<?php header('Content-Type: text/html; charset=utf-8'); 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require("class.phpmailer.php");
require("class.smtp.php");
// Inicia a classe PHPMailer
$mail = new PHPMailer();

if (isset($_POST['bt-orca'])) {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];
  $arquivo = $_POST['arquivo'];
}
if (isset($_POST['bt-tel'])) {
  $nome = $_POST['nome'];
  $celular = $_POST['Telefone'];
  $email = "yuri@imoveisninhoverde.com.br";
}



// Define os dados do servidor e tipo de conexão
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.umbler.com"; // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br)
$mail->Port       = 587; 
$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
$mail->Username = 'site@stbaero.com.br'; // Usuário do servidor SMTP (endereço de email)
$mail->Password = 'stb*010203'; // Senha do servidor SMTP (senha do email usado)
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->From = 'site@stbaero.com.br'; // Seu e-mail
$mail->Sender = 'site@stbaero.com.br'; // Seu e-mail
$mail->FromName = $nome; // Seu nome
 
// Define os destinatário(s)
$mail->AddAddress('sandrolugao@stbaero.com.br', 'Sandro'); // Copia
$mail->AddAddress('wagner@stbaero.com.br', 'Wagner'); // Copia
$mail->AddBCC('contato@novaeraweb.com.br'); // Cópia Oculta
// Define os dados técnicos da Mensagem
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)


      if (isset($_POST['bt-orca'])) { 

      $mail->Subject  = "Solicitação de Orçamento | Site";
      $mail->Body = '
      Enviado através do site:<br><br>
      Nome: '.$nome.'<br>
      Email: '.$email.'<br> 
      Mensagem:<br>'.$mensagem.'<br><br>
      ';

      $mail->AltBody = '
      Enviado através do site:<br><br>
      Nome: '.$nome.'<br>
      Email: '.$email.'<br> 
      Mensagem:<br>'.$mensagem.'<br><br>
      ';

      $mail->AddAttachment("../adm/arquivos/$fotos", "$fotos" );
      //==================================================== 
      if ($enviado = $mail->Send()){ 
              header("Location: ../index.php?enviado=true");
              } 
          else{ 
              echo "</b>Falha no envio do E-Mail!</b>"; 
      echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
            }
      }






      
    if (isset($_POST['bt-tel'])) { 
      $mail->Subject  = "Ligar para cliente - Imóveis Ninho Verde";
      $mail->Body = '
      Cliente deixou telefone para contato no site Imóveis Ninho Verde:<br><br>
      Nome: '.$nome.'<br>
      Telefone: '.$celular.'<br><br><br>
      Contato enviado através do site';

      $mail->AltBody = '
      Cliente deixou telefone para contato:<br><br>
      Nome: '.$nome.'
      Telefone: '.$celular.'<br><br><br>
      Contato enviado através do site';

      //==================================================== 
      if ($enviado = $mail->Send()){ 
              header("Location: ../index.php?tel=true");
              } 
          else{ 
              echo "</b>Falha no envio do E-Mail!</b>"; 
              echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
              }
    }

