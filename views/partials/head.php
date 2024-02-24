<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/nouriturre.css">
    <link rel="stylesheet" href="/css/accesoire.css">
    <title>
        <?php if(isset($title)) {
            echo $title;
        }?>
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="mt-5 container" style="height: 100px;">
        <ul class="nav justify-content-center justify-content-around">
            <a class="navbar-brand" href="#">
                <img src="/img/logo.png" alt="logo patte de chien marron" height="55px"></a>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="/" aria-current="page">ACCUEIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="nourriture">NOURRITURE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="jouet">JOUETS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="accesoire">ACCESOIRES</a>
                </li>
        </ul>
    </nav>