<?php

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Get the form data
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $confirmar_senha = $_POST['confirmar_senha'];
  $data_nascimento = $_POST['data_nascimento'];

  // Validate the form data
  if (empty($nome)) {
    echo "Por favor, informe o seu nome.";
  } else if (empty($email)) {
    echo "Por favor, informe o seu e-mail.";
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "O e-mail informado é inválido.";
  } else if (empty($senha)) {
    echo "Por favor, informe uma senha.";
  } else if (empty($confirmar_senha)) {
    echo "Por favor, confirme a sua senha.";
  } else if ($senha != $confirmar_senha) {
    echo "As senhas não coincidem.";
  } else {

    // Connect to the MySQL database
    $conn = mysqli_connect('localhost', 'root', '', 'uninter');

    if ($conn) {
      $sql = "INSERT INTO pacientes (nome, email, senha, data_nascimento) VALUES ('$nome', '$email', '$senha', '$data_nascimento')";
      mysqli_query($conn, $sql);
      // Close the connection to the database
      mysqli_close($conn);
      // Redirecionamento
      header('Location: ../pages/home.php');
    } else {
      echo "Não foi possível conectar ao banco de dados.";
    }
  }
}
