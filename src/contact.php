<?php
    require 'vendor/autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;

    $nome = $_POST['nome'];
    $celular = $_POST['cel'];
    $email = $_POST['email'];
    $plano = $_POST['plano'];
    $data_envio = date('d/m/Y');

    $layout = "<style type='text/css'>
          * {
          text-decoration: none;
          }
          body {
          margin:0px;
          font-family:Verdane;
          font-size:12px;
          color: #666666;
          }
          a{
          color: #666666;
          text-decoration: none;
          }
          a:hover {
          color: #FF0000;
          text-decoration: none;
          }
          </style>
            <html>
                <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
                    <tr>
                    
                        <tr>
                         <td width='500'>Nome: $nome</td>
                        </tr>
                        <tr>
                          <td width='320'>E-mail:<b> $email</b></td>
                        </tr>
                        <tr>
                          <td width='320'>Telefone:<b> $celular</b></td>
                        </tr>
                        <tr>
                          <td width='320'>Plano Desejado: $plano</td>
                        </tr>
                    
                  </tr>
                  <tr>
                    <td>Este e-mail foi enviado em <b>$data_envio</b></td>
                  </tr>
                </table>
        </html>";
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'naironmendonca@gmail.com';
    $mail->Password = 'join7412';
    $mail->Port = 587;

    $mail->setFrom('naironmendonca@gmail.com');
    $mail->addReplyTo('no-reply@email.com.br');
    $mail->addAddress('elias@inus.com.br', 'Wantuil');

    $mail->isHTML(true);
    $mail->Subject = 'Contato pelo site';
    $mail->Body    = $layout;

    if(!$mail->send()) {
        echo "Não foi possível enviar a mensagem. <br>";
        echo 'Erro: ' . $mail->ErrorInfo;
    } else {
        echo 'Mensagem enviada.';
        header('Location: index.php?enviado=sim');

    }
