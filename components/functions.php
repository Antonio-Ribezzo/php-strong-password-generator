<?php
    // ricevo dal form l'informazione sulla lunghezza della password da generare
    $_SESSION['passwordLength'] = intval(isset($_GET['passwordLength']) ? $_GET['passwordLength'] : '');

    $passwordLength = $_SESSION['passwordLength'];
    // var_dump($passwordLength);

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

    // creo la funzione "GeneraPassword"
    function GeneraPassword ($length,$startArray,$arrayComponents){
        // se il campo del form che chiede la lunghezza della password esite allora partela logica
        if($length){
            // creo un array che conterrà l'indice degli elementi da prendere dall'array concatenato per formare la password (indice randomico)
            $posizioniRandom=[];
            for($i = 0; $i < $length; $i++){
                // genero un numero random da zero fino alla lunghezza dell'array da cui    prendere gli elemnti della password
                $posizioniRandom[]=rand(0,count($startArray));
            }
            // se l'indice dell'array formato dalla concatenazione è uguale all'elemento random dell'array creato precedentemente, l'elemento in questione viene pushato nell'array arrayComponents 
            foreach($startArray as $chiave => $valore){
                for($i = 0; $i < $length; $i++){
                    if($chiave == $posizioniRandom[$i]){
                        $arrayComponents[]=$valore;
                    }
                }
            }
            // dall'array contenente i componenti della password viene estrapolata una stringa e cioè la mia password
            return implode($arrayComponents);
            // var_dump($passwordString);
            // echo $passwordString;
        }
    }

    // invoco la funzione
    $passwordString = GeneraPassword($passwordLength,$arrayConcat,$componentsPassword);
?>