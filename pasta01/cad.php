<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Consultas</title>
    
    
</head>

<body>
    <div class="container">
        <header>
            <h1>Consultas</h1>
        </header>
        <main class="code">
            <?php
            $nome = $_GET["nome"];
            $tell = ($_GET["telefone"]);
            $doctor = ($_GET["doutor"]);
            $date = ($_GET["data"]);
            ?>
        </main>
        <div class="containercad">
            <form>
                <li class="name">
                    <?php
                    echo "Nome: $nome"
                    ?>
                </li>
                <li class="telefone">
                    <?php
                    echo "Telefone: $tell"
                    ?>
                </li>
                <li class="doutor">
                    <?php
                    echo "Doutor/Doutora: $doctor"
                    ?>
                </li>
                <li class="date">
                    <?php
                    echo "Data: $date"
                    ?>
                </li>
            </form>
        </div>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </div>
</body>

</html>
