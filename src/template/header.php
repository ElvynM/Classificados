<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Classificados</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Classificados</a>
            </div>
            <ul class="nav navbar-bar navbar-right">
                <?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])):?>
                    <li><a class="navbar-brand" href="meus-anuncios.php">Meus Anuncios</a></li>
                    <li><a class="navbar-brand" href="sair.php">Sair</a></li> 
                <?php else : ?>
                <li><a class="navbar-brand" href="cadastre-se.php">Cadastre-se</a></li>
                <li><a class="navbar-brand" href="login.php">Login</a></li>
                <?php endif;?>
            </ul>
        </div>
    </nav>