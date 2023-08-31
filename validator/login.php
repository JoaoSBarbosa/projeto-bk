<?php

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Get the form data
  $email = $_POST['email-acesso'];
  $senha = $_POST['senha-acesso'];
  $confirmar_senha = $_POST['confirmar_senha-acesso'];

  // Validate the form data
  if (empty($email)) {
    echo "Por favor, informe o seu e-mail.";
  } else if (empty($senha)) {
    echo "Por favor, informe uma senha.";
  } else if (empty($confirmar_senha)) {
    echo "Por favor, confirme a sua senha.";
  } else if ($senha != $confirmar_senha) {
    echo "As senhas não coincidem.";
  } else {

    // Connect to the MySQL database
    $conn = mysqli_connect('localhost', 'root', '', 'uninter');

    // Check if the connection was successful
    if ($conn) {

      // Check if the email and password exist in the database
      $sql = "SELECT * FROM pacientes WHERE email='$email' AND senha='$senha'";
      $result = mysqli_query($conn, $sql);

      // If the user exists, log them in
      if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['id'];
        $_SESSION['nome'] = $row['nome'];
        header('Location: ../pages/home.php');
      } else {
        echo "O e-mail ou senha não são válidos.";
        // Credenciais incorretas
        header('Location: ../index.php?login=erro');
      }

      // Close the connection to the database
      mysqli_close($conn);
    } else {
      echo "Não foi possível conectar ao banco de dados.";
    }
  }
}
