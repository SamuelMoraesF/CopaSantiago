<?php include '../config.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <style>.jumbotron {padding:40px !important;}body {margin-top:60px !important;padding:30px;}form#add-time {width:90% !important;margin:0 auto;margin-top:50px;</style>
    <title>Acesso Restrito - <?php echo $sitetitle ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $siteurl ?>/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo $siteurl ?>/restrito/jquery.tools.min.js"></script>
    <!--[if lt IE 9]>
      <script src="<?php echo $siteurl ?>/js/html5shiv.js"></script>
      <script src="<?php echo $siteurl ?>/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Menu</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo $siteurl ?>/restrito">Restrito - <?php echo $sitetitle ?></a>
  </div>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right" style="margin-right:20px;">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gerenciar Times <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo $siteurl ?>/restrito/timeslista.php">Listar Times</a></li>
          <li><a href="<?php echo $siteurl ?>/restrito/times.php?acao=add">Adicionar Time</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gerenciar Artilheiros <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo $siteurl ?>/restrito/artilheiroslista.php">Artilheiros</a></li>
          <li><a href="<?php echo $siteurl ?>/restrito/artilheiros.php?acao=add">Adicionar Artilheiro</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gerenciar Jogos <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo $siteurl ?>/restrito/jogoslista.php">Jogos</a></li>
          <li><a href="<?php echo $siteurl ?>/restrito/jogos.php?acao=add">Adicionar Jogo</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>