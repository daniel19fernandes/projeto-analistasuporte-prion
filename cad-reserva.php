<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Informação da Reserva - Projeto - (An. de Sup)</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="cad-reserva.css">

    </head>


    <body>
        <h1 class="titulo">INFORMAÇÃO DA RESERVA</h1>

        <form method="POST" class="conjunto" action="processa-reserva.php">

            <label><b>CPF do Reservante</b></label>
            <input type="text" name="cpf" placeholder="Digite o CPF do cliente"><br>

            <p><b>Data da Reserva</b></p>
            <label>Check-in:</label>
            <input type="date" name="checkin"><br><br>

            <label>Check-out:</label>
            <input type="date" name="checkout">
            <br><br>
            
            <label><b>Qualificação do Hóspede</b></label>

                <select name="qualificacao">
                    <option value="Bom">Bom</option>
                    <option value="Regular">Regular</option>
                    <option value="Ruim">Ruim</option>
                </select>
            <br><br>

            <input type="submit" class="btn" name="enviar" value="ENVIAR">
        </form>
    </body>



</html>