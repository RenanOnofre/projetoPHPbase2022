<?php
// https://tutorialsclass.com/php-rest-api-file_get_contents/
// https://www.geeksforgeeks.org/how-to-receive-json-post-with-php/
// https://docs.awesomeapi.com.br/api-de-moedas
$api_url = 'https://economia.awesomeapi.com.br/last/USD-BRL,EUR-BRL,BTC-BRL';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$data = json_decode($json_data);

$USDBRL = $data->USDBRL;
$EURBRL = $data->EURBRL;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
    <h1> <?php echo $USDBRL->name; ?> </h1>

    <p>Cotação: <?php echo $USDBRL->ask; ?> </p>
    <p>Data da cotação : <?php echo $USDBRL->create_date; ?> </p>

    <h1> <?php echo $EURBRL->name; ?> </h1>

    <p>Cotação: <?php echo $EURBRL->ask; ?> </p>
    <p>Data da cotação : <?php echo $USDBRL->create_date; ?> </p>-->
</body> 
</html>