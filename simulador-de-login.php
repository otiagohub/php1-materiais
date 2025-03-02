<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP - Formulário de Login</title>
<link rel="stylesheet" href="css/style-form-processa.css">
</head>
<body>
    <div class="container">
        <h1>Simulador de Login</h1>

        <h2>Login</h2>
        <form action="" method="post" autocomplete="off">
            <div>
                <label for="nome">E-mail:</label>
                <input required type="email" name="email" id="email">
            </div>
            <div>
                <label for="senha">Senha:</label>
                <input required type="password" name="senha" id="senha">
            </div>
            <button type="submit" name="entrar">Entrar</button>
        </form>

        <p>Ou <a href="">cadastre-se</a>!</p>

        <h2>Cadastro</h2>
        <form action="" method="post" autocomplete="off">
            <div>
                <label for="nome">Nome:</label>
                <input autofocus required type="text" name="nome" id="nome">
            </div>
            <div>
                <label for="nome">E-mail:</label>
                <input required type="email" name="email" id="email">
            </div>
            <div>
                <label for="senha">Senha:</label>
                <input required type="password" name="senha" id="senha">
            </div>
            <button type="submit" name="cadastrar">Cadastrar</button>
        </form>
 
    </div>


</body>
</html>
