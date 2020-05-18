<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Snack 1</h1>
    <?php 
    /***************************************************************************************************
        PHP snack 1
        Creiamo un array ‘matches’ contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.Stampiamo a schermo tutte le partite con questo schema:Olimpia Milano - Cantù | 55-60
     **************************************************************************************************/
    // varibles
    $matches = [
        [
            'home' => 'Milano',
            'away' => 'Torino',
            's_home' => 80,
            's_away' => 60
        ],
        [
            'home' => 'Bari',
            'away' => 'Genova',
            's_home' => 100,
            's_away' => 80
        ],
        [
            'home' => 'Bolzano',
            'away' => 'Treviso',
            's_home' => 50,
            's_away' => 60
        ],
        [
            'home' => 'Napoli',
            'away' => 'Palermo',
            's_home' => 100,
            's_away' => 120
        ]
    ]
    ?>

    <h2>Match results day 1</h2>
    <ul>
        <?php
        for ( $i = 0; $i < count($matches); $i++ ) { ?>
            <li>
                <?php echo $matches[$i]['home']; ?> - <?php echo $matches[$i]['away']; ?> | <?php echo $matches[$i]['s_home']; ?> - <?php echo $matches[$i]['s_away']; ?>
            </li>
        <?php } ?>
    </ul>

    <hr>
    <h1>PHP Snack 2</h1>
    <?php 
    /*****************************************************************************************************************************
        PHP Snack 2:
        Passare come parametri GET name, mail e age e verificare (cercando i metodi che nonconosciamo nella documentazione) che:
        1. name sia più lungo di 3 caratteri,
        2. che mail contenga un punto e una chiocciola
        3. e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
     ****************************************************************************************************************************/
    // variables
    $data = $_GET;
    // check presence of values
    if( empty( $data['name'] )  || empty( $data['mail'] ) || empty( $data['age'] ) ) {
        echo 'error, not all parameters have been passed';
    }
    // check name
    elseif( strlen($data['name']) <= 3 ) {
        echo 'access denied';
    }
    // check mail
    elseif( strpos( $data['mail'], '@' ) === false || strpos( $data['mail'], '.' ) === false ) {
        echo 'access denied';
    }
    // check age
    elseif( ! is_numeric( $data['age'] ) ) {
        echo 'access denied';
    } else {
        echo 'login successful';
    }
    ?>
</body>
</html>