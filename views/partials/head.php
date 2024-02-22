<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 
        <?php if(isset($title)) {
            echo $title;
        }?>
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav>
        <ul class="nav justify-content-center">
            <a class="navbar-brand" href="#">
                <img src="/img/logo.png" alt="..." height="50"></a>
                <li class="nav-item">
                    <a class="nav-link active text-secondary" href="/" aria-current="page">ACCUEIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="">NOURRITURE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="">JOUETS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="">ACCESOIRES</a>
                </li>
        </ul>
    </nav>