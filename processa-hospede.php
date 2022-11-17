<?php

include_once("conexao-hospede.php");

$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);


echo "CPF: $cpf <br>";
echo "Nome: $nome <br>";
echo "Endereço: $endereco <br>";
echo "Cidade: $cidade <br>";
echo "Estado: $estado <br>";
echo "Sexo: $sexo <br>";
echo "Data de Nascimento: $data <br>";


//Captura da qualificacão (select)
if(isset($_POST['enviar'])) {
    $sexo = $_POST['sexo'];
    echo "Sexo do Hóspede: " .$sexo ;
}


//Envio para o BD
$result_usuario = "INSERT INTO hospede (CPF, `Nome Completo`, Endereco, Cidade, Estado, Sexo, `Data de Nascimento`) VALUES ('$cpf', '$nome', '$endereco', '$cidade', '$estado', '$sexo', '$data')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)) {
    header("Location: cad-hospede.php");
}
else{
    header("Location: cad-hospede.php");
}

