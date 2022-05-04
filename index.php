<?php 
//variabili
$nome = 'Alberto';
$nome2 = 'Michele';
//echo stampa direttamente a schermo (elemento non 'trovato' attraverso l'inspector)
echo $nome;
//array
$array= ['banana', 'mela', 'pera', 'albicocca'];
//http://localhost/php-boolean/01-intro-php/?nome=luigi 
//con $GEt riesco a recuperare e salvare il nome che io scrivo (in questo caso luigi)
$parametroUri = ( isset($_GET['nome']) ) ? $_GET['nome'] : '' ; //$_GET['nome']

//creo costante per salvare il contenuto del form attraverso get
$parametro2 = $_GET['parametro2'];

$paragrafo = '           lorem ipsum dolor sit amet, consectetur adipisicing elit.            '   ;
$paragrafoDopoTrim = trim($paragrafo)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>intro php</title>
</head>
<body>
    
    <!-- 'php' abbinato a 'html' e' il modo piu' pulito di lavorare -->
    <h3>
        Ciao <?php echo $nome; ?>
    </h3>
    <h3>
        Ciao <?php echo $nome2; ?>
    </h3>
    <p>
        Ciao <?php echo $nome.'. Io sono '.$nome2 ?>
    </p>
    <!-- non mi serve, vedo gia' array nella maniera piu' comoda possibile. Nel caso non avessi xdebug dovrei scrivere questo codice
    <?//php echo '<pre>' ?>
    <?//php var_dump($array); ?>
    <?//php echo '<pre>' ?> -->
    <p>
        <?php  echo var_dump($array); ?>
    </p>
    <span>
        <?php echo $parametroUri ?>
    </span>
    <!-- con il form riesco ad inviare e poi salvare un nuovo dato che verra' automaticamente salvato a schermo -->
    <form method="GET">
        <input type="text" name="parametro2">
        <input type="submit">
    </form>
    <?php echo $parametro2 ?>

    <!-- EXPLODE -->
    <!-- in base al delimitatore, in questo caso il -  , divide la stringa data ogni volta che trova il delimitatore-->
    <?php var_dump( explode( '-', 'Alberto-Biga-10/11/1998-Torino') ) ?>

    <!-- TRIM (vedi riga 17) -->
    <!-- toglie spazi vuoti -->
    <?php echo strlen($paragrafo); ?>
    <!-- STRLEN -->
    <!-- misura lunghezza stringa -->
    <?php echo strlen($paragrafoDopoTrim) ?>

    <!-- REPLACE -->
    <!-- rimpizza una parola con un'altra -->
    <p>
        <?php echo str_replace('amet', '####', $paragrafo)?>
    </p>
    
    <!-- STRPOS -->
    <!-- individuo la prima posizione di una parola -->
    <p>
        Ho trovato la parola nella posizione (indico solo la prima posizione) :
        <?php echo strpos($paragrafo, 'sit') ?>
    </p>

    <!-- UCFIRST -->
    <!-- prima parola maiuscola, solo se senza spazi davanti -->
    <p>
        <?php echo ucfirst($paragrafoDopoTrim);?>
    </p>

    <!-- UCWORDS -->
    <!-- rende maiuscole tutte le parole -->
    <p>
        <?php echo ucwords($paragrafoDopoTrim);?>
    </p>
</body>
</html>