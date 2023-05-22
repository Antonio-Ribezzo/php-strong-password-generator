<?php

    // ricevo dal form l'informazione sulla lunghezza della password da generare
    $passwordLength = intval($_GET['passwordLength']);

    // creo un array formato dalle lettere dell'alfabeto
    $letters = range('a', 'z');

    // creo un array formato dalle lettere dell'alfabeto in maiuscolo
    $lettersUppercase = [];

    foreach($letters as $el){
        $lettersUppercase[] = strtoupper($el);
    }

    // creo un array formato dai numeri da 0 a 9
    $numbers= range(0,9);

    // creo un array di simboli
    $symbols = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')'];

    // concateno gli array precedenti per formare un unico array
    $arrayConcat = array_merge($letters, $lettersUppercase, $numbers, $symbols);


    // array vuoto da riempire con lettere,numeri e simboli per formare la password
    $componentsPassword=[];


    // se il campo del form che chiede la lunghezza della password esite allora parte la logica
    if($passwordLength){
        
        // creo un array che conterrà l'indice degli elementi da prendere dall'array concatenato per formare la password (indice randomico)
        $posizioniRandom=[];
        for($i = 0; $i < $passwordLength; $i++){
            // genero un numero random da zero fino alla lunghezza dell'array da cui prendere gli elemnti della password
            $posizioniRandom[]=rand(0,count($arrayConcat));
        }

        // se l'indice dell'array formato dalla concatenazione è uguale all'elemento random dell'array creato precedentemente, l'elemento in questione viene pushato nell'array componentsPassword 
        foreach($arrayConcat as $chiave => $valore){
            for($i = 0; $i < $passwordLength; $i++){
                if($chiave == $posizioniRandom[$i]){
                    $componentsPassword[]=$valore;
                }
            }
        }
        var_dump($componentsPassword);
    }

    // dall'array contenente i componenti della password viene estrapolata una stringa e cioè la mia password
    $implodeArray=implode($componentsPassword);
    var_dump($implodeArray);
    echo $implodeArray

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
                        <input type="number" name="passwordLength">
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