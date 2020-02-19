<?php
    $vraag1 = $_POST["vraag1"];
    $vraag2 = $_POST["vraag2"];
    $vraag3 = $_POST ["vraag3"];
    $vraag4 = $_POST["vraag4"];
    $vraag5 = $_POST["vraag5"];
    $vraag6 = $_POST["vraag6"];
    
    if(empty($vraag1) || empty($vraag2) || empty($vraag3) || empty($vraag4) || empty($vraag5) || empty($vraag6)){
        header("location: formulier_onkunde.html");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lacquer&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div id="fullpage">
        
        <h1 id="koptext">Mad Libs</h1>
        <div id="top">
            <a id="index.html" href="formulier_paniek.html">Er heerst paniek...</a>
            <a id="index.html" href="formulier_onkunde.html">Onkunde</a>
        </div>
        <div id="bottom">
            <h1 id="title">Er heerst paniek</h1>
            <h3>
                Er zijn veel mensen die niet kunnen <? echo htmlspecialchars(($_POST["vraag1"])) ?>. Neem nou <? echo htmlspecialchars(($_POST["vraag2"])) ?>. Zelf met de hulp van een <? echo htmlspecialchars(($_POST["vraag4"])) ?> of zelfs <? echo htmlspecialchars(($_POST["vraag3"])) ?> kan <? echo htmlspecialchars(($_POST["vraag2"])) ?> niet <? echo htmlspecialchars(($_POST["vraag1"])) ?>.
                Dat heeft niets te maken met een gebrek aan <? echo htmlspecialchars(($_POST["vraag5"])) ?>, maar met een te veel aan <? echo htmlspecialchars(($_POST["vraag6"])) ?>. Te veel <? echo htmlspecialchars(($_POST["vraag6"])) ?> leidt tot <? echo htmlspecialchars(($_POST["vraag7"])) ?> en dat is niet goed als je wilt <? echo htmlspecialchars(($_POST["vraag1"])) ?>.
                Helaas voor <? echo htmlspecialchars(($_POST["vraag2"])) ?>.
            </h3>
        </div>
        <div id="footer">© Mitchell 2020</div>
    </div>
</body>
</html>