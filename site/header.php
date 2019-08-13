<?php $GLOBALS['page'] = basename($_SERVER['SCRIPT_NAME']); ?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Urbanizze</title>
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png">
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">Você está utilizando um navegador <strong>desatualizado</strong>. Favor <a href="https://browsehappy.com/?locale=pt-br">atualizar seu navegador</a> para melhorar sua experiência.</p>
    <![endif]-->
    
<!-- principal -->
<div id="principal">
    <!-- topo -->
    <header id="topo">
        <div class="container-wrap">
            <nav class="navbar navbar-expand-lg px-0">
              <h1 class="logo"><a href="index.php" title="Urbanizze"><img src="img/logo.png" alt="Urbanizze"></a></h1>
              <button class="ico-menu d-block d-sm-none" type="button"></button>
              <!-- menu -->
              <ul class="menu navbar-nav ml-sm-auto align-items-center d-none d-sm-flex">
                <?php if ($page != "index.php" && $page != "login.php") {?>
                <li class="nav-item">
                <a class="nav-link" href="consulta.php">Nova Consulta</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="lista.php">Lista de Consultas</a>
                </li>
                <?php } ?>
                <li class="nav-item">
                <a class="nav-link" href="sobre.php">O que oferecemos</a>
                </li>
                <li class="nav-item">
                <a class="btn btn-primary" href="login.php">Login</a>
                </li>
              </ul>
              <!-- //menu -->              
            </nav>
        </div>
    </header>
    <!-- menu mobile -->
    <ul class="menu menu-mobile navbar-nav d-flex d-sm-none">
      <?php if ($page != "index.php" && $page != "login.php") {?>
      <li class="nav-item">
      <a class="nav-link" href="consulta.php">Nova Consulta</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="lista.php">Lista de Consultas</a>
      </li>
      <?php } ?>
      <li class="nav-item">
      <a class="nav-link" href="sobre.php">O que oferecemos</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="login.php">Faça seu Login</a>
      </li>
    </ul>
    <!-- //menu -->


    
    <!-- conteudo -->
    <main>