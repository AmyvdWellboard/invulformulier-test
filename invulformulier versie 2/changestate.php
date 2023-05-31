<?php
require_once('config/db.php');
$markerId = 6;
//$markerId = $_GET['id'];
$query = "SELECT * FROM test_markers WHERE id = " . $markerId;
$result = mysqli_query($conn, $query);

function changeState()
{
    // Haal de invoer op uit het formulierveld 'state'
    $state = $_POST['state'];

    // Geef een bevestigingsbericht weer
    echo "Staat succesvol bijgewerkt naar: " . $state . "" . "nmol/l";
}

function rekensom()
{
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/invulformulier1.css">
</head>

<body class="">
    <section class="WrapperForm">
        <form method="post" class="invulformulier">
            <header class="invulformulier__header">
                <h1 class="invulformulier__Title"> Test je waarde hier</h1>
                <p class="invulFormulier__Label">Wil je graag waardes testen? Dat kan nu hier gratis.</p>
            </header>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                changeState();
            }
            ?>
            <input type="text" id="state" name="state" class="invulformulier__inputState" placeholder="Vul hier je waarde in....">
            <input type="submit" value="Submit" class="invulformulier__inputSubmit">
        </form>
    </section>

</body>

</html>