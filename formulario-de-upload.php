<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivo</title>
    <link rel="stylesheet" href="css/style-form-processa.css">
</head>

<body>
  <div class="container">
    <h1>Formulário de Upload de Arquivo</h1>

    <!-- Formulário de Upload -->
    <form action="" method="post">
      <div>
          <label for="arquivo">Escolha um arquivo para upload:</label>
          <input type="file" name="arquivo" id="arquivo" accept="image/jpeg, image/png, image/svg+xml, application/pdf" required>
      </div>
      <button type="submit" name="enviar">Enviar</button>
    </form>

  </div>
  
</body>

</html>
