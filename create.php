<?php
    include_once('templates/header.php');
?>  
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
    <div class="container">
        <h1 id="main-title">Adicionar Material</h1>
        <form style="max-width: 500px; margin: 0 auto;" action="<?=$BASE_URL?>config/process.php" method="POST">
        <input type="hidden" name="type" value="create">
        <div class="form-group">
            <div style= "margin-bottom: 20px;" class="form-nome">
                <h2 style= "margin-bottom: 10px;">Quem é você?</h2>
                <label style="margin-right: 10px;" for="erick"><input style="margin-right: 6px;" required type="radio" name="nome" value="Erick" id="erick">Erick</label>
                <label style="margin-right: 10px;" for="felipe"><input style="margin-right: 6px;" required type="radio" name="nome" value="Felipe" id="felipe">Fellype</label>
            </div>
            <div style= "margin-bottom: 20px;" class="form-data">
                <h2 style= "margin-bottom: 10px;">Data de hoje:</h2>
                <input type="date" name="data" id="data">
            </div>
            <div style= "margin-bottom: 20px;" class="form-material">
                <h2 style= "margin-bottom: 10px;">Material:</h2>
                <label style="margin-right: 10px;" for="arte"><input style="margin-right: 6px;" required type="radio" name="material" value="Arte" id="arte">Arte</label>
                <label style="margin-right: 10px;" for="video"><input style="margin-right: 6px;" required type="radio" name="material" value="Vídeo" id="video">Vídeo</label>
                <label style="margin-right: 10px;" for="outro"><input style="margin-right: 6px;" required type="radio" name="material" value="Outro" id="outro">Outro</label>
            </div>
            <div style= "margin-bottom: 20px;" class="form-titulo">
                <h2 style= "margin-bottom: 10px;">Título:</h2>
                <input type="text" name="titulo" id="titulo" placeholder="Digite o título">
            </div>
            <div style= "margin-bottom: 20px;" class="form-cliente">
                <h2 style= "margin-bottom: 10px;">Cliente:</h2>
                <select name="cliente" id="clientes">
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
                <input type="number" name="valor" id="valor">
            </div>
            <div style= "margin-bottom: 20px;" class="form-observacoes">
                <h2 style= "margin-bottom: 10px;">Observações:</h2>
                <textarea name="observacoes" cols="40" rows="3"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
        </form>
        <div style="max-width: 500px; margin: 20px auto; "class="back-btn">
                <?php include_once('templates/backbtn.html'); ?>
    </div>
<?php
    include_once('templates/footer.php');
?>