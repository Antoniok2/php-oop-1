<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FirstExPHP_DB</title>
</head>

<body>
    
<h1>HelloWorld</h1>

<?php
/**
     * DEFINIRE CLASSE Film:
     *      Attributi:
     *      - titolo
     *      - sottotiolo
     *      - regista
     * 
     *      Metodi:
     *      - costruttore che accetta titolo
     *      - getFullTitle: 
     *          Se sottotitolo presente:
     *            restituisce "titolo: sottotitolo" 
     *          Se sottotiolo assente:
     *            restituisce "titolo" 
     *      - __toString: 
     *          Se regista presente:
     *            restituisce "fullTitle | regista"
     *          Se regista assente:
     *            restituisce "fullTitle | ???"
     * 
     * UTILIZZO OGGETTI Film:
     * 
     *      Generare 3 istanze della classe Film:
     *      - uno con solo il titolo
     *      - uno con titolo e sottotitolo
     *      - uno con titolo, sottotiolo e regista
     * 
     *      Stampare tutti gli oggetti tramite toString (implicito)
     * 
     *  RISULTATO ATTESO:
     * 
     *      Matrix | ???
     *      Fantozzi 2: il ritorno di fantozzi | ???
     *      Peter Pan: il ritorno all'isola che non c'e' | Robin Budd
     */

class Film {
    public $titolo;
    public $sottotitolo;
    public $regista;

    public function __construct($titolo) {
        $this -> titolo = $titolo;
    }

    public function getFullTitle() {
        // SE PRESENTE IL SOTTOTITOLO MI RESTITUISCE TITOLO E SOTTOTITOLO
        if ($this -> sottotitolo) {
            return $this -> titolo . ": " . $this -> sottotitolo;
        //  IN ALTERNATIVA SOLO IL TITOLO
        } else {
            return $this -> titolo;
        }
    }

    public function __toString() {
        // SE PRESENTE IL REGISTRA
        if ($this -> regista) {
            return $this -> getFullTitle() . " | " . $this -> regista;
        // IN ASSENZA DEL REGISTA
        }else {
            return $this -> getFullTitle() . " | " . "Nessun Regista";
        }
    }
}

    $film1 = new Film("Matrix");
    $film2 = new Film("Fantozzi 2", "Il ritorno di Fantozzi");
    $film3 = new Film("Peter Pan", "Il ritorno all'isola che non c'è", "Robin Hood");

    $film2 -> sottotitolo = "Il ritorno di Fantozzi";
    $film3 -> sottotitolo = "Il ritorno all'isola che non c'è";
    
    $film3 -> regista = "Robin Hood";

    echo "Film 1" . ": " . $film1 . "<br>"; 
    echo "Film 2" . ": " . $film2 . "<br>"; 
    echo "Film 3" . ": " . $film3 . "<br>"; 


?>

</body>
</html>