<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./public/css/style.css">
  <title>Login e Cadastro</title>
</head>

<body>
  <div class="container">
    <h1>Bem-Vindo!</h1>
    <h3>Por favor, faça login ou realize o cadastro</h3>
    <div class="logo">
      <img src="./public/img/logo.jpg" alt="Logo do Site">
    </div>
    <div class="forms">
      <div class="login-form">
        <h2>Login</h2>
        <form action="./validator/login.php" method="POST">
          <input type="email" name="email-acesso" placeholder="Email" required>
          <input type="password" name="senha-acesso" placeholder="Senha" required>
          <input type="password" name="confirmar_senha-acesso" placeholder="Confirmar Senha" required>
          <button type="submit">Entrar</button>
        </form>
        <?php
        if (isset($_GET['login']) && $_GET['login'] == 'erro') {
        ?>
          <span class="erro">E-mail ou senha incorreto(s). Por favor, tente novamente</span>

        <?php } ?>
      </div>
      <div class="register-form">
        <h2>Cadastro</h2>
        <form action="./validator/registro.php" method="POST">
          <input type="text" name="nome" placeholder="Nome" required>
          <input type="email" name="email" placeholder="Email" required>
          <input type="password" name="senha" placeholder="Senha" required>
          <input type="password" name="confirmar_senha" placeholder="Confirmar Senha" required>
          <input type="date" name="data_nascimento" required>
          <button type="submit">Registrar</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>