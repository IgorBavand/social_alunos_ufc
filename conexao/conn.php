<?php

session_start();

$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "aulas";
	
	//Criar a conexão
	$db = mysqli_connect($servidor, $usuario, $senha, $dbname);

//mysqli_query($db, "DELETE * FROM horarios  WHERE data > CURDATE()"); 
if (isset($_POST['cad'])) {
    $tutor = $_POST['tutor'];
    $disciplina = $_POST['disciplina'];
    $local = $_POST['local'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];

    mysqli_query($db, "INSERT INTO horarios (tutor, disciplina,local,data,horario ) VALUES ('$tutor', '$disciplina','$local','$data','$horario')");
    $_SESSION['message'] = "Cadastrado com sucesso!";
    header('location: ../index.php');
}
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM horarios WHERE id=$id");
	$_SESSION['message'] = "Cancelado com sucesso!"; 
	header('location: ../index.php');
}
?>