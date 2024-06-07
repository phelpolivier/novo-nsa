<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="NSA.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>NSA Online - Aluno</title>
    <link rel="stylesheet" href="style/home.css">
    <link rel="stylesheet" href="style/home_midias.css">
    <script src="script/script.js"></script>
    <script src="script/home.js"></script>
</head>
<body onresize="tamanho()">
    <header>
        <a href="index.html">
            <img src="imagens/logo/NSA-red.png" alt="">
        </a>
        <i id="menu" class="material-icons" onclick="clickMenu()">menu</i>
        <i id="usuario" class="material-icons" onclick="clickPerson()">account_circle</i>
        <menu id="itens">
            <a href="#">Dowload</a>
            <a href="#">Diário</a>
            <a href="#">Menções</a>
            <a href="#">Professores</a>
            <a href="#">Sugestões</a>
            <a href="#">Cadastro</a>
            <a href="#">Teams</a>
        </menu>
        <menu id="pessoa">
            <?php 
                $nome = "Usuário 777";
                echo "<p>$nome</p>";
            ?>
            <a href="#">Configurações</a>
        </menu>
    </header>
    <main>
        <div>
            <?php 
                # O comando $_POST está pegando os dados do formulário e atribuindo esses dados a uma variável
                $codigo = $_POST["codigo"];
                $RM = $_POST["RM"];
                $senha = $_POST["senha"];
                $nome = "Usuário 777";

                echo "<h1>Bem vindo de volta, $nome.</h1>";
                echo "<p>O seu RM é $RM.</p>";
            ?>
        </div>
    </main>
    <footer>
        <p>Sistema NSA - Desde 2008</p>
    </footer>
</body>
</html>