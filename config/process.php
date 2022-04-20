<?php
    session_start();

    include_once('connection.php');
    include_once('url.php');

    $id;
    if(!empty($_GET['id'])){
        $id = $_GET['id'];
    }

    //Retorna o dado de um contato
    if(!empty($id)){
        $query = "SELECT * FROM contacts WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $contact = $stmt->fetch();
    } else{
        $query = "SELECT * FROM contacts";
        $stmt = $conn -> prepare($query);
        $stmt -> execute();
        $contacts = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    }

    if(isset($_POST['type'])){
        if(!isset($_POST['observations'])){
            $query = "INSERT INTO contacts (name,phone) VALUES(:name,:phone);";
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $stmt = $conn->prepare($query);
            $stmt -> bindParam(':name',$name,':phone',$phone);
            // $stmt -> bindParam(':phone',$phone);
            $stmt -> execute();
        } else{
            $query = "INSERT INTO contacts (name,phone,observations) VALUES(:name,:phone,:observations);";
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $observations = $_POST['observations'];
            $stmt = $conn->prepare($query);
            $stmt -> bindParam(':name',$name,':phone',$phone,':observations',$observations);
            // $stmt -> bindParam(':phone',$phone);
            // $stmt -> bindParam(':observations',$observations);
            // $stmt = $conn->prepare($query);
            $stmt -> execute();
        }
    }





