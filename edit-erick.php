<?php
    include_once('templates/header-erick.php');
?>  
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
    <div style="text-align: center;" class="container">
        <h1 id="main-title">Editar Material</h1>
        <form style="max-width: 500px; margin: 0 auto;" action="<?=$BASE_URL?>config/process.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?=$trabalho['id']?>">
        <div class="form-group">
            <div style= "margin-bottom: 20px;" class="form-nome">
                <h2 style= "margin-bottom: 10px;">Quem é você?</h2>
                <input type="text" class="form_input_text" name="nome" id="nome" value="<?=$trabalho['nome']?>">
            </div>
            <div style= "margin-bottom: 20px;" class="form-data">
                <h2 style= "margin-bottom: 10px;">Data de hoje:</h2>
                <input type="date" class="form_input_text" name="data" id="data" value="<?=$trabalho['data']?>">
            </div>
            <div style= "margin-bottom: 20px;" class="form-material">
                <h2 style= "margin-bottom: 10px;">Material:</h2>
                <input type="text" class="form_input_text" name="material" id="material" value="<?=$trabalho['material']?>">
            </div>
            <div style= "margin-bottom: 20px;" class="form-titulo">
                <h2 style= "margin-bottom: 10px;">Título:</h2>
                <input type="text" class="form_input_text" name="titulo" id="titulo" value="<?=$trabalho['titulo']?>"placeholder="Digite o título">
            </div>
            <div style= "margin-bottom: 20px;" class="form-cliente">
                <h2 style= "margin-bottom: 10px;">Cliente:</h2>
                <input type="text" class="form_input_text" name="cliente" id="cliente" value="<?=$trabalho['cliente']?>"placeholder="Digite o material do cliente">
            </div>
            <div style= "margin-bottom: 20px;" class="form-valor">
                <h2 style= "margin-bottom: 10px;">Valor R$:</h2>
                <input type="number" class="form_input_text" value="<?=$trabalho['valor']?>" name="valor" id="valor">
            </div>
            <div style= "margin-bottom: 20px;" class="form-observacoes">
                <h2 style= "margin-bottom: 10px;">Observações:</h2>
                <textarea name="observacoes" cols="40" rows="3"><?=$trabalho['observacao']?></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-dark">Atualizar</button>
        </form>
        <div style="max-width: 500px; margin: 20px auto; "class="back-btn">
                <?php include_once('templates/backbtn-erick.html'); ?>
    </div>
<?php
    include_once('templates/footer.php');
?>
<style>
    .form_input_text{
        padding: 0 40px;
        font-weight: 700;
        outline: none;
        border-radius: 20px;
        border: 2px solid #ededf1;
        background-color: #F5F6F8;
        width: 100%;
        height: 3.5rem;
    }
    .form_input_text:focus{
    transition: .2s ease-in-out;
    border: 2px solid #d0d0d3;
    }
    .btn.btn-dark{
        background-color: #920097;
        border: none;
        font-weight: 700;
        padding: 10px 60px;
        border-radius: 30px;
        transition: 0.2s all;
    }
    .btn.btn-dark:hover{
        background-color: #820086;
        letter-spacing: 4px;
    }
</style>