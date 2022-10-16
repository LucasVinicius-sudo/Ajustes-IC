<?php
    $email = isset($_POST["email_input"])?$_POST["email_input"]:"Nao informado";
    $password = isset($_POST["pw_input"])?$_POST["pw_input"]:"Nao informado";

    //condições temporárias até obtermos o BD do NTI ou acharmos uma alternativa pra não integração
    if (strcmp($email, "servidor@ic.ufal.br")==0){
        // window.location.href = "https://admin.html";
        header("Location: ../admin.html");
    }
    // else if (strcmp($email, "discente@ic.ufal.br")==0){

    // }
    else{
        echo "Erro ao logar!";
        header("Location:https://index.html");
    }
    exit();
    die();
?>