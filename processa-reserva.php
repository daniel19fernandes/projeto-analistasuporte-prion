<?php

include_once("conexao-reserva.php");

$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING) ;

$entrada = filter_input(INPUT_POST, 'checkin', FILTER_SANITIZE_STRING) ;
$saida = filter_input(INPUT_POST, 'checkout', FILTER_SANITIZE_STRING) ;
$num_diaria = filter_input(INPUT_POST, 'numero_diarias', FILTER_SANITIZE_STRING) ;
$qualif_hospede = filter_input(INPUT_POST, 'qualif_hosp', FILTER_SANITIZE_STRING) ;

$checkin = new DateTime($entrada);
$checkout = new DateTime($saida);


//Cálculo do intervalo entre as datas
$intervalo = $checkin->diff($checkout);


echo "CPF: $cpf <br>";
echo "Data do Check-In: $entrada <br>";
echo "Data do Check-Out: $saida <br>";
echo "Número de diárias: $intervalo->days <br>";


//Captura da qualificacão (select)
if(isset($_POST['enviar'])) {
  $qualificacao = $_POST['qualificacao'];
  echo "Qualificação do Hóspede: " .$qualificacao ;
}


//Envio de dados para o BD
$result_usuario = "INSERT INTO reserva (`CPF Hospede`, `Check-in`, `Check-out`, `Numero de diarias`, `Qualificacao do Hospede`) VALUES ('$cpf', '$entrada', '$saida', '$intervalo->days', '$qualificacao')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)) {
    header("Location: cad-reserva.php");
}
else{
    header("Location: cad-reserva.php");
}


  