<?php
    include_once('templates/header-fellype.php');
?>
<head>
    <link rel="stylesheet" href="<?=$BASE_URL?>css/styles.css">
    <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
</head>
    
    <div style="max-width: 1200px;" class="container">
        <?php if(isset($printMsg) && $printMsg != ''):?>
            <p id="msg"><lord-icon
    src="https://cdn.lordicon.com/hjeefwhm.json"
    trigger="loop"
    colors="primary:#0fa873"
    style="width:50px;height:50px;margin-right:10px;">
</lord-icon><?=$printMsg?></p>
        <?php endif; ?>
        <h1 id="main-title">Bem vindo, Fellype</h1>
        <?php if(count($trabalhos) > 0 ):?>
            <table class="table" id="trabalhos-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Data</th>
                        <th scope="col">Material</th>
                        <th scope="col">Título</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Valor</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($trabalhosFellype as $trabalhoFellype):?>
                        <tr>
                            <td scope="row" class="id"><?=$trabalhoFellype['id']?></td>
                            <td scope="row" class="nome"><?=$trabalhoFellype['nome']?></td>
                            <td scope="row"><?=$trabalhoFellype['data']?></td>
                            <td scope="row"><?=$trabalhoFellype['material']?></td>
                            <td scope="row"><?=$trabalhoFellype['titulo']?></td>
                            <td scope="row"><?=$trabalhoFellype['cliente']?></td>
                            <td scope="row">R$ <?=$trabalhoFellype['valor']?></td>
                            <td class="actions">
                                <a href="<?=$BASE_URL?>show-fellype.php?id=<?=$trabalhoFellype['id']?>"><i class="fas fa-eye check-icon"></i></a>
                                <a href="<?=$BASE_URL?>edit-fellype.php?id=<?=$trabalhoFellype['id']?>"><i class="far fa-edit edit-icon"></i></a>
                                <form style="display: inline-block;"action="<?=$BASE_URL?>config/process.php" method="POST">
                                    <input type="hidden" name="type" value="delete-fellype">
                                    <input type="hidden" name="id" value="<?=$trabalhoFellype['id']?>">
                                    <button class="delete-btn" type="submit"><i class="fas fa-times delete-icon"></i></button>       
                                </form>
                            </td>
                        </tr>
                    <?php endforeach?>    
                </tbody>
            </table>
            <div class="total">
                <h1 id="main-title"><i style="margin-right: 5px;" class="fas fa-sack-dollar"></i> Total: R$ <?=$totalFellype['total']?></h1>
            </div>
            
            <?php else:?>
                <p id="empty-list-text">Ainda não há trabalhos na sua agenda, <a href="<?=$BASE_URL?>create.php">clique aqui para adicionar</a></p>
        <?php endif;?>
    </div>


<?php
    include_once('templates/footer.php');
?>

<style>
    #msg{
    color: #0fa873;
    font-weight: bold;
    background-color: #ecfbf6;
    border: 1px solid #13ce8b;
    padding: 10px;
    text-align: center;
    max-width: 500px;
    margin: 0 auto;
    margin-top: 30px;
}
</style>