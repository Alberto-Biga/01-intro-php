<?php 


//variabili
$nome = 'Alberto';
$nome2 = 'Michele';
//echo stampa direttamente a schermo (elemento non 'trovato' attraverso l'inspector)
echo $nome;


//array
$array= ['banana', 'mela', 'pera', 'albicocca'];
// var_dump($array);

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

</body>
</html>