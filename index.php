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
    <link rel='stylesheet' href='./assets/css/style.css'>
</head>
<body>
    <div id="containerMain" class="vh-100 d-flex flex-column justify-content-center align-items-center">
        <header class="text-center mb-3">
            <h1 class="text-capitalize">strong password generator</h1>
            <h2 class="text-white">Genera una password sicura</h2>
        </header>

        <main class="p-4 bg-white rounded">
            <!-- inizio form  -->
            <form action="" method="GET">
                <!-- inserimento lunghezza password  -->
                <div class="row row-cols-2 mb-3">
                    <div class="col">
                        <div>Lunghezza password:</div>
                    </div>
                    <div class="col">
                        <input type="number">
                    </div>
                </div>
                <!-- filtri di scelta -->
                <div class="row row-cols-2">
                    <div class="col">
                        <div>Consenti ripetizioni di uno o più caratteri:</div>
                    </div>
                    <div class="col">
                        <!-- radio per la scelta della ripetizione caratteri-->
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault"                        id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Si
                            </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault"                      id="flexRadioDefault2">
                          <label class="form-check-label" for="flexRadioDefault2">
                            No
                          </label>
                        </div>
                        <!-- checkbox per selezionare la composizione della password -->
                        <div class="mt-3 form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="text-capitalize form-check-label" for="flexCheckDefault">
                              lettere
                            </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                          <label class="text-capitalize form-check-label" for="flexCheckChecked">
                            numeri
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                          <label class="text-capitalize form-check-label" for="flexCheckChecked">
                            simboli
                          </label>
                        </div>
                    </div>
                </div>

                <!-- button di invio e di annulla -->
                <div class="row row-cols-2">
                    <div class="col">
                        <button class="btn btn-primary" type="submit">Invia</button>
                        <button class="btn btn-secondary" type="reset">Annulla</button>
                    </div>
                </div>
            </form>
        </main>
    </div>
    
    <!-- script Bootstrap -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe'   crossorigin='anonymous'></script>
</body>
</html>