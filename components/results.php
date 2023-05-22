<?php
    session_start();
    include __DIR__ . '/functions.php';
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <!-- link Bootstrap -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ'    crossorigin='anonymous'>
    <!-- link my style scss -->
    <link rel='stylesheet' href='../assets/css/style.css'>
</head>
<body>
    <div id="containerMain" class="vh-100 d-flex flex-column justify-content-center align-items-center">
        <header class="text-center mb-3">
            <h1 class="text-capitalize">strong password generator</h1>
            <h2 class="text-white">Genera una password sicura</h2>
        </header>

        <!-- visualizzazione password -->
        <div id="containerPassword" class="p-4 mb-3 rounded text-center">
            <span>La password generata è:</span>
            <h3 class="text-success mt-3">
                <?php
                    session_start();
                    echo $passwordString
                ?>
            </h3>
        </div>

    <!-- script Bootstrap -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe'   crossorigin='anonymous'></script>

    <style>
        #containerPassword{
            width: 60%;
            background-color: #cff4fc;
        }
    </style>
</body>
</html>