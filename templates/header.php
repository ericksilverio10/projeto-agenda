<?php
    include_once('config/url.php');
    include_once('config/connection.php');
    include_once('config/process.php');

    //limpa a mensagem
    if(isset($_SESSION['msg'])){
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = '';
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
    <title>Agenda</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="nav-brand" href="<?=$BASE_URL?>index.php">
                <img src="<?=$BASE_URL?>img/logo.svg" alt="Agenda">
            </a>
            <div>
                <div class="navbar-nav">
                    <a href="<?=$BASE_URL?>index.php" id= "home-link" class="nav-link active">Agenda</a>
                    <a href="<?=$BASE_URL?>create.php" id= "home-link" class="nav-link active">Adicionar Contato</a>
                </div>
            </div>
        </nav>
    </header>