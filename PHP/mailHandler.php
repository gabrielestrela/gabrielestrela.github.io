<?php
    
    function has_header_injection($str){
        return preg_match("/[\r\n]/", $str);
    }

    if(isset ($_POST['contactSubmit'])){
        $from = $_POST['email'];
        $to = "gabrielestrela92@gmail.com";
        $first_name = trim($_POST['first_name']);
        $last_name = trim($_POST['last_name']);
        $msg = $_POST['message'];
        $subject = "Submissão de Formulario do Site";
        $subject2 = "Smart - Eletrônicos e Acessórios, Copia do seu Formulario";
        $message = $first_name . " " . $last_name . " Escreveu: " . "\n\n" . $msg
        $message2 = "Aqui está uma cópia do seu formulário " . $first_name . "\n\n" . $msg;
        
        if(has_header_injection($first_name) || has_header_injection($from) || has_header_injection($last_name) || has_header_injection($msg)){
            die();
        }
        
        if( !$first_name || !$last_name || !$from || $msg){
            echo '<h4>All fields required.</h4>';
        }   
        
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/plan; charset=iso-8859-1\r\n";
        $headers .= "From: $name <$from> \r\n";
        $headers .= "X-Priority: 1\r\n";
        $headers .= "X-MSMail-Priority: High\r\n\r\n";
        
//        $headers = "From: " .$from;
//        $headers2 = "From: " .$to;
        
        mail($to, $subject, $message, $headers);
//        $s2 = mail($from, $subject2, $message2);
//        echo "Email enviado. Obrigado " . $first_name . ", entraremos em contato em breve.";
    
    }
    
?>
