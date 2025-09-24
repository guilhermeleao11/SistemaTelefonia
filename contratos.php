<?php
$page_title = "Página em Construção - Telium Networks";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $page_title ?></title>
  <link rel="stylesheet" href="style.css">
  <style>
    .construction {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      min-height: 70vh;
    }

    .construction h2 {
      font-size: 2rem;
      margin-bottom: 15px;
      color: #004aad;
    }

    .construction p {
      font-size: 1.2rem;
      color: #555;
    }

    .construction img {
      max-width: 180px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">
      <img src="logo.png" alt="Logo">
    </div>
    <h1>Sistema de Telefonia</h1>
  </header>

  <main class="construction">
    <img src="https://cdn-icons-png.flaticon.com/512/809/809957.png" alt="Em Construção">
    <h2>Página em Construção</h2>
    <p>Telium Networks está preparando esta funcionalidade.<br>Volte em breve!</p>
  </main>
</body>
</html>
