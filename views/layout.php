<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - E-Varotra</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/typography.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/boostrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap/fonts/boostrap-icons.min.css">
</head>

<body>
    <header>
        <div class="container">
            <nav>
                <a href="/" class="logo">E-Varotra</a>
                <ul class="menu">
                    <li><a href="/">Accueil</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <?php if (isset($page)) {
        require $page;
    } ?>

    <footer>
        <p>&copy; 2025 Taxibe | ETU004054 - ETU004201</p>
    </footer>
</body>
<script href="/assets/boostrap/js/bootstrap.bundle.min.js"></script>

</html>