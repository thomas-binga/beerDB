<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="css/biere.css">

        <title>
            @yield('titrePage')
        </title>
    </head>
    <body>
        
        <header>
            @yield('titreItem')
        </header>
        @yield('contenu')

        <footer class="footer">
            BeerWeb - copyright 3AInfo - 2021
        </footer>

    
        
    </body>
</html>