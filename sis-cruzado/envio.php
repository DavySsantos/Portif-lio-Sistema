<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use App\Entity\Usuario;
use App\Entity\Pessoa;


require 'vendor/autoload.php';

if (isset($_POST['enviar'])) {
    try {
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = '';
        $mail->Password   = 'eknr gdyj ysys bthd';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $cpfcnpj = preg_replace('/[^0-9]/', '', $_POST['cpfpj']);
        $telefone = preg_replace('/[^0-9]/', '', $_POST['telefone']);
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $values = [0 => "ativo = 1", 1 => "admin = 1"];
        $usuario = Usuario::obterUsuarios($values);
        $emails = [];
        foreach ($usuario as $value) {
            array_push($emails, $value->email);
        }

        $mail->setFrom('', 'Mailer');
        $mail->addAddress($_POST['email']);
        $mail->addCC(implode(', ', $emails));
        $mail->isHTML(true);
        $mail->Subject = 'Mensagem de solicitação';
        $body = "Solicitação de Cadastro:<br><br>
        Responsável: " . $nome . "<br>
        CPF/CNPJ: " .  $cpfcnpj . " <br>
        E-mail: " . $email  . "<br>
        Telefone: " . $telefone . "<br><br>
        Solicitação enviada dia: " . date('d/m/Y');

        $mail->CharSet = 'utf-8';
        $mail->Body = $body;

        $values = [0 => "cpfcnpj = $cpfcnpj"];
        $pessoa = Pessoa::obterPessoa($values);

        if ($pessoa instanceof Pessoa) {
            header("Refresh:0; url=envio.php?status=error");
        } else {
            if ($mail->send()) {
                $obj = new Pessoa();
                $obj->inserir(["cpfcnpj" => $cpfcnpj, "responsavel_empresa" => $nome, "email" => $email, "telefone" => $telefone]);
                
                header("Refresh:0; url=envio.php?status=success");
            } else {
                header("Refresh:0; url=envio.php?status=error");
            }
        }
        exit;
    } catch (Exception $e) {
        header("Refresh:0; url=envio.php?status=warning");
    }
}
include __DIR__ . '/includes/precadastro.php';
