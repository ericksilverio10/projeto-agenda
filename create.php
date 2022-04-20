<?php
    include_once('templates/header.php');
?>  
    <div class="container">
        <h1 id="main-title">Criar Contato</h1>
        <form id="create-form" action="<?=$BASE_URL?>config/process.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="name">Nome do contato:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Digite o nome do contato" required>
                <label for="phone">Telefone do contato:</label>
                <input type="number" class="form-control" name="phone" id="phone" placeholder="(XX) XXXXX-XXXX" required>
                <label for="observations">Observações:</label>
                <textarea type="text" class="form-control" name="observations" id="observations" placeholder="Opcional" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar contato</button>
            <div style="margin-top: 20px;"class="back-btn">
                <?php include_once('templates/backbtn.html'); ?>
            </div>
        </form>
    </div>

<?php
    include_once('templates/footer.php');
?>