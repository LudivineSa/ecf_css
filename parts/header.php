<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,700;1,400&family=Raleway:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/helpers.css">
    <link rel="stylesheet" href="css/style.css"> 
    <title>ECF</title>
</head>

<body>
    <header class="bg-orangefixe ptb2">
        <div class="container flex between align-center">
            <a href="index.php" class="b color-fff fontsize48">DMWW</a>
            <nav class="color-fff fontsize2 ft-ms show">
                <ul role="list" class="flex">
                <li><a href="index.php" class="fontsize2 color-fff ft-ms none p2 bg-orange hoverblanc">Accueil</a></li>
                <li><a href="formation.php" class="color-fff fontsize2 ft-ms none p2 bg-orange hoverblanc">La formation</a></li>
                <li><a href="etudiants.php" class="color-fff fontsize2 ft-ms none p2 bg-orange hoverblanc">Les étudiants</a></li>
                <li><a href="actualite.php" class="color-fff fontsize2 ft-ms none p2 bg-orange hoverblanc">Actualités</a></li>
                <li><a href="contact.php" class="color-fff fontsize2 ft-ms none p2 hoverblanc">Nous contacter</a></li>
                </ul>
            </nav>
            <button class="displaynone color-fff ft-sm-sb mtb-1r fontsize24 bg-orange box-orange underline underline-1 p2" id="buttonnav">Menu</button>
        </div>
        <div class="container flex between align-center" hidden>
            <nav class="color-fff fontsize2 ft-ms " id="menunav" hidden>
                    <ul role="list" class="flex wrap center columnmd">
                    <li><a href="formation.php" class="color-fff fontsize2 ft-ms none bg-orange hoverblanc mb-2 mlr-1">La formation</a></li>
                    <li><a href="etudiants.php" class="color-fff fontsize2 ft-ms none  bg-orange hoverblanc mb-2  mlr-1">Les étudiants</a></li>
                    <li><a href="actualite.php" class="color-fff fontsize2 ft-ms none  bg-orange hoverblanc mb-2 mlr-1">Actualités</a></li>
                    <li><a href="contact.php" class="color-fff fontsize2 ft-ms none  hoverblanc mb-2  mlr-1">Nous contacter</a></li>
                    </ul>
                </nav>
        </div>
    </header>
    <script src="script.js"></script>
</body>
</html>