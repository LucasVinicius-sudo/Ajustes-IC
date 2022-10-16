<?php
    $email = $_POST["email_input"];
    $password = $_POST["pw_input"];

    //condições temporárias até obtermos o BD do NTI ou acharmos uma alternativa pra não integração
    if (strcmp($email, "servidor")==0){
        header("location:https://admin.html");
    }
    // else if (strcmp($email, "discente")==0){

    // }
    else{
        echo "Erro ao logar!";
        header("location:https://index.html");
    }

?>