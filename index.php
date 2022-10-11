<?php
include "./Board.php";



function fen2array($fen)
{
    $parts = preg_split('#\s+#', $fen);
    $rows = explode('/', $parts[0]);

    $pieces = array();

    $y = 8;
    foreach ($rows as $row) {
        $x = 1;
        for ($i = 0; $i < strlen($row); $i++) {
            if (is_numeric($row[$i])) {
                $x += intval($row[$i]);
            } else {
                $pieces[$x][$y] = $row[$i];
                $x++;
            }
        }
        $y--;
    }

    return $pieces;
}
$position = fen2array('rnbq1bnr/p1p1k1pp/8/3ppp2/2p1P3/2NP1N2/PPP2PPP/R');
$board = new Board($position);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess board</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <main class="board">
        <?php $board->inicialize() ?>

    </main>

</body>

</html>