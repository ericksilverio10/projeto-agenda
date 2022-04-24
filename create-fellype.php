<?php
    include_once('templates/header-fellype.php');
?>  
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
    <div style="text-align: center;" class="container">
        <h1 id="main-title">Adicionar Material</h1>
        <form style="max-width: 500px; margin: 0 auto;" action="<?=$BASE_URL?>config/process.php" method="POST">
        <input type="hidden" name="type" value="create">
        <div class="form-group">
            <div style= "margin-bottom: 20px;" class="form-nome">
                <h2 style= "margin-bottom: 10px;">Quem é você?</h2>
                <label style="margin-right: 10px; font-size: 20px;" for="fellype"><input style="margin-right: 6px;" class="form_input_radio" required type="radio" name="nome" value="Fellype" id="fellype" checked>Fellype</label>
            </div>
            <div style= "margin-bottom: 20px;" class="form-data">
                <h2 style= "margin-bottom: 10px;">Data de hoje:</h2>
                <input class="form_input_text" type="date" name="data" id="data" value="<?php echo date('Y-M-D');?>>
            </div>
            <div style= "margin-bottom: 20px;" class="form-material">
                <h2 style= "margin-bottom: 10px;">Material:</h2>
                <label style="margin-right: 10px; font-size: 20px;" for="arte"><input class="form_input_radio" style="margin-right: 6px;" required type="radio" name="material" value="Arte" id="arte">Arte</label>
                <label style="margin-right: 10px; font-size: 20px;" for="video"><input class="form_input_radio" style="margin-right: 6px;" required type="radio" name="material" value="Vídeo" id="video">Vídeo</label>
                <label style="margin-right: 10px; font-size: 20px;" for="outro"><input class="form_input_radio" style="margin-right: 6px;" required type="radio" name="material" value="Outro" id="outro">Outro</label>
            </div>
            <div style= "margin-bottom: 20px;" class="form-titulo">
                <h2 style= "margin-bottom: 10px;">Título:</h2>
                <input type="text" class= "form_input_text" name="titulo" id="titulo" placeholder="Digite o título">
            </div>
            <div style= "margin-bottom: 20px;" class="form-cliente">
                <h2 style= "margin-bottom: 10px;">Cliente:</h2>
                <select class="form_input_text" name="cliente" id="clientes">
                        <option value="Carrossel">Carrossel</option>
                        <option value="CriancaTodoDia">Criança Todo Dia</option>
                        <option value="Design&Decoracao">Design & Decoração</option>
                        <option value="DiversaoNautica">Diversão Náutica</option>
                        <option value="GasLindaChama">Gás Linda Chama</option>
                        <option value="Handspike">Handpike Media</option>
                        <option value="EsplanadaHotel">Hotel Esplanada</option>
                        <option value="JFCred">JF Cred</option>
                        <option value="Lares">Lares Materiais de Construção</option>
                        <option value="MaisCelulares">Mais Celulares</option>
                        <option value="OticasCarol">Óticas Carol</option>
                        <option value="SportTotal">Sport Total</option>
                        <option value="Top Team">Top Team</option>
                        <option value="Vale da Serra">Vale da Serra</option>
                        <option value="ZRImoveis">ZR Imóveis</option>
                        <option value="Outro">Outro</option>
                </select>
            </div>
            <div style= "margin-bottom: 20px;" class="form-valor">
                <h2 style= "margin-bottom: 10px;">Valor R$:</h2>
                <input class= "form_input_text" type="number" name="valor" id="valor" placeholder="R$">
            </div>
            <div style= "margin-bottom: 20px;" class="form-observacoes">
                <h2 style= "margin-bottom: 10px;">Observações:</h2>
                <textarea name="observacoes" cols="40" rows="3"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-dark" >Adicionar</button>
        </form>
        <div style="max-width: 500px; margin: 20px auto; " class="back-btn">
                <?php include_once('templates/backbtn-fellype.html'); ?>
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
    .form_input_radio{
        font-size: 40px;
    }
</style>