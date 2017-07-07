<?php
    if($_POST['submit']){
        $from = $_POST['email'];
        $to = "gabrielestrela92@gmail.com";
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $subject = "Submissão de Formulario do Site";
        $subject2 = "Smart - Eletrônicos e Acessórios, Copia do seu Formulario";
        $message = $first_name . " " . $last_name . " Escreveu: " . "\r\n\r\n" . $_POST['message'];
        $message2 = "Aqui está uma cópia do seu formulário " . $first_name . "\r\n\r\n" . $_POST['message'];
        
        $headers = "From: " .$from . "\r\n" . 'X-Mailer: PHP/' . phpversion();
        $headers2 = "From: " .$to . "\r\n" . 'X-Mailer: PHP/' . phpversion();
        
        

        $s1 = mail($to, $subject, $message, $headers);
        $s2 = mail($from, $subject2, $message2, $headers2);
        echo "Email enviado. Obrigado " . $first_name . ", entraremos em contato em breve.";
            
        if(!$s1 || !$s2){
            $errorMessage = error_get_last()['message'];
            echo("<script>console.log('PHP: ".$errorMessage."');</script>");
        }
        
    }
?>
