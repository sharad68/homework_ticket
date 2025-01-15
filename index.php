<?php
require_once "Ticket.php";

$ticket1 = new Ticket(12, 50)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>product</h1>
    <p><?= $ticket1->getquantity() ?></p>
    <p><?= $ticket1->getunitPrice() ?></p>
    <p><?= $ticket1->gettotal() ?></p>
</body>

</html>