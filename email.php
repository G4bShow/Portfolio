<?php

    if (isset($_POST['name']) && !empty($_POST['name'])) {
    
        $name = addslashes($_POST['name']);
        $email = addslashes($_POST['email']);
        $mensagem = addslashes($_POST['msg']);
        $tel = addslashes($_POST['tel']);


        $to = 'ryanvitor29@gmail.com';
        $subject = 'Contato - Portfolio';
        $body = "Nome: ".$name. "\r\n"
                ."E-mail: ".$email."\r\n"
                ."Telefone: ".$tel."\r\n"
                ."Mensagem: ".$mensagem;
        $header =   " From: ryanvitorgt@gmail.com"."\r\n"
                    ."Reply-To:".$email."\r\n"
                    ."X-Mailer: PHP/".phpversion();
    
        if (mail($to, $subject, $body, $header)) {
            echo "Email enviado com sucesso!!";
        } else {
            echo "Falha ao enviar o email!";
        }
    }

 

?>