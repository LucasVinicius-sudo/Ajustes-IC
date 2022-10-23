<?php
    // $btn_login = isset($_GET["btn_login"])?$_GET["btn_login"]:"Nao informado";
    // $btn_forget = isset($_GET["btn_forget"])?$_GET["btn_forget"]:"Nao informado";
    $no_info = 'Nao informado';
    $email = isset($_POST["email"])?$_POST["email"]:$no_info;
    $password = isset($_POST["password"])?$_POST["password"]:$no_info;

    // condições temporárias até obtermos o BD do NTI ou acharmos uma alternativa pra não integração
    // echo "btn_new: " . $btn_login;
    // echo "btn_new: " . $btn_forget;
    $valid = 'servidora@ic.ufal.br';
    // echo "email" . $email;
    if (strcmp($email, $valid)==0){
        header("Location: ../disciplines.html");
    }
    else{
        header("Location: ../index.html");
    }
    
    exit();
    die();
?>
