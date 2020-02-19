<?php
$vraag1 = $_POST["vraag1"];
$vraag2 = $_POST["vraag2"];
$vraag3 = $_POST["vraag3"];
$vraag4 = $_POST["vraag4"];
$vraag5 = $_POST["vraag5"];
$vraag6 = $_POST["vraag6"];
$vraag7 = $_POST["vraag7"];
$vraag8 = $_POST["vraag8"];

if(empty($vraag1) || empty($vraag2) || empty($vraag3) || empty($vraag4) || empty($vraag5) || empty($vraag6) || empty($vraag7) || empty($vraag8)){
    header("location: formulier_paniek.html");
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
                Er heerst paniek in het koningkrijk <? echo htmlspecialchars(($_POST["vraag3"])) ?>, Koning <? echo htmlspecialchars(($_POST["vraag6"])) ?> is ten einde raad en als koning <? echo htmlspecialchars(($_POST["vraag6"])) ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <? echo htmlspecialchars(($_POST["vraag2"])) ?>.<br><br>
                "<? echo htmlspecialchars(($_POST["vraag2"])) ?>! Het is een ramp! Het is een schandel!"<br><br>
                "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"<br><br>
                "Mijn <? echo htmlspecialchars(($_POST["vraag1"])) ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <? echo htmlspecialchars(($_POST["vraag5"])) ?> voor hem gekocht!"<br><br>
                "Majesteit, uw <? echo htmlspecialchars(($_POST["vraag1"])) ?> komt vast vanzelf weer terug?"<br><br>
                "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <? echo htmlspecialchars(($_POST["vraag8"])) ?> leren?"<br><br>
                "Maar Sire, daar kunt u toch uw <? echo htmlspecialchars(($_POST["vraag7"])) ?> voor gebruiken."<br><br>
                "<? echo htmlspecialchars(($_POST["vraag2"])) ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."<br><br>
                "<? echo htmlspecialchars(($_POST["vraag4"])) ?>, Sire"
            </h3>
        </div>
        <div id="footer">© Mitchell 2020</div>
    </div>
</body>
</html>