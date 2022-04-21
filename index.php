<?php
    include_once('templates/header.php');
?>
    <link rel="stylesheet" href="<?=$BASE_URL?>css/styles.css">
    <div class="container">
        <?php if(isset($printMsg) && $printMsg != ''):?>
            <p id="msg"><?=$printMsg?></p>
        <?php endif; ?>
        <h1 id="main-title">Bem-Vindo</h1>
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
                    <?php foreach($trabalhos as $trabalho):?>
                        <tr>
                            <td scope="row" class="id"><?=$trabalho['id']?></td>
                            <td scope="row" class="nome"><?=$trabalho['nome']?></td>
                            <td scope="row"><?=$trabalho['data']?></td>
                            <td scope="row"><?=$trabalho['material']?></td>
                            <td scope="row"><?=$trabalho['titulo']?></td>
                            <td scope="row"><?=$trabalho['cliente']?></td>
                            <td scope="row">R$ <?=$trabalho['valor']?></td>
                            <td class="actions">
                                <a href="<?=$BASE_URL?>show.php?id=<?=$trabalho['id']?>"><i class="fas fa-eye check-icon"></i></a>
                                <a href="<?=$BASE_URL?>edit.php?id=<?=$trabalho['id']?>"><i class="far fa-edit edit-icon"></i></a>
                                <form style="display: inline-block;"action="<?=$BASE_URL?>config/process.php" method="POST">
                                    <input type="hidden" name="type" value="delete">
                                    <input type="hidden" name="id" value="<?=$trabalho['id']?>">
                                    <button class="delete-btn" type="submit"><i class="fas fa-times delete-icon"></i></button>       
                                </form>
                            </td>
                        </tr>
                    <?php endforeach?>    
                </tbody>
            </table>
            <?php else:?>
                <p id="empty-list-text">Ainda não há trabalhos na sua agenda, <a href="<?=$BASE_URL?>create.php">clique aqui para adicionar</a></p>
        <?php endif;?>
    </div>


<?php
    include_once('templates/footer.php');
?>