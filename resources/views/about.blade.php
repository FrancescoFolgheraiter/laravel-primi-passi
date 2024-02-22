<?php
$nav = ['Homepage','Chi siamo', 'Servizi', 'Contattaci' ];
$linkNav=['home','about','service','contact'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav>
            <ul class=" list-unstyled d-flex p-3 justify-content-center">
            <?php
            foreach ($nav as $key => $elem) {
            ?>
                <li class="m-3">
                    <a href="{{ route($linkNav[$key])}}">
                        <?php
                        echo $elem;
                        ?>
                    </a>
                </li>
                <?php
                }
                ?>
            </ul>
        </nav>
    </header>
    <main>
        <h2>
            About
        </h2>
    </main>
</body>
</html>