<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Hóspede - Projeto - (An. de Sup)</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="cad-hospede.css">
    </head>


    <body>
        <div class="titulo">
            <h1>CADASTRO DE HÓSPEDE</h1>
        </div>

        <form method="POST" action="processa-hospede.php"  class="conjunto">
            <label><b>CPF</b></label>
            <input type="text" name="cpf" id="cpf" class="input-padrao" placeholder="Digite o CPF"><br><br>

            <label><b>Nome</b></label>
            <input type="text" name="nome" id="nome" class="input-padrao" placeholder="Digite o Nome Completo"><br><br>

            <label><b>Endereço</b></label>
            <input type="text" name="endereco" id="endereco" class="input-padrao" placeholder="Digite o Endereço"><br><br>

            <label><b>Cidade</b></label>
            <input type="text" name="cidade" id="cidade" class="input-padrao" placeholder="Digite a Cidade"><br><br>

            <label><b>Estado</b></label>
            <input type="text" name="estado" id="estado" class="input-padrao" placeholder="Digite a sigla do Estado"><br><br>
        
            <label><b>Sexo</b></label>
                <select name="sexo">
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            <br><br>

            <label><b>Data de Nascimento</b></label>
            <input type="date" name="data"> <br><br>

            <input type="submit" class="btn" name="enviar" value="ENVIAR">
        </form>
    </body>
</html>