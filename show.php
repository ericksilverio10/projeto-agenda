<?php
    include_once('templates/header.php');
?>
    <div class="container-show">
        <h1 id="main-title"><?=$trabalho['titulo']?></h1>
        <p class="bold">Cliente:</p>
        <p class="cliente"><?=$trabalho['cliente']?></p>
        <p class="bold">Data:</p>
        <p class="cliente"><?=$trabalho['data']?></p>
        <p class="bold">Feito por:</p>
        <p class="cliente"><?=$trabalho['nome']?></p>
        <p class="bold">Valor:</p>
        <p class="cliente">R$ <?=$trabalho['valor']?></p>
        <?php if($trabalho['observacao'] != ''):?>
            <p class="bold">Observações:</p>
            <p class="cliente"><?=$trabalho['observacao']?></p>
        <?php endif;?>
    </div>
    <div style="text-align: center;" class="back-btn">
        <?php include_once('templates/backbtn.html'); ?>
    </div>
<?php
    include_once('templates/footer.php');
?>