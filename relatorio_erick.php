<?php
    include_once('templates/header.php');
?>
    <link rel="stylesheet" href="<?=$BASE_URL?>css/styles.css">
    <div style="max-width: 1200px;" class="container">
        <?php if(isset($printMsg) && $printMsg != ''):?>
            <p id="msg"><?=$printMsg?></p>
        <?php endif; ?>
        <h1 id="main-title">Relatório Erick</h1>
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
                    <?php foreach($trabalhosErick as $trabalhoErick):?>
                        <tr>
                            <td scope="row" class="id"><?=$trabalhoErick['id']?></td>
                            <td scope="row" class="nome"><?=$trabalhoErick['nome']?></td>
                            <td scope="row"><?=$trabalhoErick['data']?></td>
                            <td scope="row"><?=$trabalhoErick['material']?></td>
                            <td scope="row"><?=$trabalhoErick['titulo']?></td>
                            <td scope="row"><?=$trabalhoErick['cliente']?></td>
                            <td scope="row">R$ <?=$trabalhoErick['valor']?></td>
                            <td class="actions">
                                <a href="<?=$BASE_URL?>show.php?id=<?=$trabalhoErick['id']?>"><i class="fas fa-eye check-icon"></i></a>
                                <a href="<?=$BASE_URL?>edit.php?id=<?=$trabalhoErick['id']?>"><i class="far fa-edit edit-icon"></i></a>
                                <form style="display: inline-block;"action="<?=$BASE_URL?>config/process.php" method="POST">
                                    <input type="hidden" name="type" value="delete">
                                    <input type="hidden" name="id" value="<?=$trabalhoErick['id']?>">
                                    <button class="delete-btn" type="submit"><i class="fas fa-times delete-icon"></i></button>       
                                </form>
                            </td>
                        </tr>
                    <?php endforeach?>    
                </tbody>
            </table>
            <div class="total">
                <h1 id="main-title"><i style="margin-right: 5px;" class="fas fa-sack-dollar"></i> Total: R$ <?=$totalErick['total']?></h1>
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