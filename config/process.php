<?php
    session_start();
    include_once('connection.php');
    include_once('url.php');

    if(!empty($_POST)){
        if($_POST['type']=='create'){
            $nome = $_POST['nome'];
            $data = $_POST['data'];
            $material = $_POST['material'];
            $titulo = $_POST['titulo'];
            $cliente = $_POST['cliente'];
            $valor = $_POST['valor'];
            $observacoes = $_POST['observacoes'];
            $query = "INSERT INTO trabalhos (nome, data, material, titulo, cliente, valor, observacao) VALUES(:nome, :data, :material, :titulo, :cliente, :valor, :observacoes);";
            $stmt = $conn -> prepare($query);
            $stmt->bindParam(':nome',$nome);
            $stmt->bindParam(':data',$data);
            $stmt->bindParam(':material',$material);
            $stmt->bindParam(':titulo',$titulo);
            $stmt->bindParam(':cliente',$cliente);
            $stmt->bindParam(':valor',$valor);
            $stmt->bindParam(':observacoes',$observacoes);
            $stmt->execute();
            $_SESSION['msg'] = "Material adicionado com sucesso!";
        } else if($_POST['type']=='edit'){
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $data = $_POST['data'];
            $material = $_POST['material'];
            $titulo = $_POST['titulo'];
            $cliente = $_POST['cliente'];
            $valor = $_POST['valor'];
            $observacoes = $_POST['observacoes'];
            $query = "UPDATE trabalhos SET nome=:nome, data= :data,material= :material, titulo= :titulo, cliente= :cliente, valor= :valor, observacao= :observacoes WHERE id = :id";
            $stmt = $conn -> prepare($query);
            $stmt->bindParam(':nome',$nome);
            $stmt->bindParam(':data',$data);
            $stmt->bindParam(':material',$material);
            $stmt->bindParam(':titulo',$titulo);
            $stmt->bindParam(':cliente',$cliente);
            $stmt->bindParam(':valor',$valor);
            $stmt->bindParam(':observacoes',$observacoes);
            $stmt->bindParam(':id',$id);
            $stmt->execute();
            $_SESSION['msg'] = "Material atualizado com sucesso!";
        } else if($_POST['type']=='delete'){
            $id = $_POST['id'];
            $query = "DELETE FROM trabalhos WHERE id = :id";
            $stmt = $conn -> prepare($query);
            $stmt -> bindParam(":id", $id);
            $stmt -> execute();
            $_SESSION['msg'] = "Material removido com sucesso!";
        }
        header('Location:'.$BASE_URL.'../index.php');
    }

    $id;
    if(!empty($_GET['id'])){
        $id = $_GET['id'];
    }
    //Retorna o dado de um contato
    if(!empty($id)){
        $query = "SELECT * FROM trabalhos WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $trabalho = $stmt->fetch();
    } else{
        $query = "SELECT * FROM trabalhos";
        $stmt = $conn->prepare($query);
        $stmt -> execute();
        $trabalhos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }