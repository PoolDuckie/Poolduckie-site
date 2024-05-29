<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lap Pool Test</title>
    <link rel="icon" href="../image/favicon.ico" type="image/icon">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<header class="header-main">
        <div class="header-main-logo">
        <img src="../image/logo.svg" alt="">
        <nav class="header-main-nav">
        <ul>
                <li><a href="https://poolduckie.com">HOME</a></li>
                <li><a href="https://poolduckie.com/seville">Seville Pool Hours</a></li>
                <li><a href="https://poolduckie.com/en-MSDS">MSDS</a></li>
                <li><a href="https://poolduckie.com/pooltest">Pool Test</a><li>
            </ul>
        </nav>
        </div>
        
        <div class="header-main-act">
            <ul>
                <li><a href="#">Register</a></li>
                <li><a href="../php/login.php">Login</a></li>
            </ul>
        </div>
    </header>
    <form action="test.php" method="post">
        <label>Free Chlorine:</label><br/>
        <input type="text" name="FCL" placeholder="0.00" autocomplete="off" required/><br/>
        <label>Total Chlorine:</label><br/>
        <input type="text" name="TCL" placeholder="0.00" autocomplete="off" required/><br/>
        <label>pH:</label><br/>
        <input type="text" name="PH" placeholder="7.2" autocomplete="off" required/><br/>
        <label>Total Alkalinity:</label><br/>
        <input type="text" name="ALK" placeholder="0" autocomplete="off" required/><br/>
        <label>Calcium Hardness:</label><br/>
        <input type="text" name="CAL" placeholder="0" autocomplete="off" required/><br/>
        <label>Cyanuric Acid:</label><br/>
        <input type="text" name="CYA" placeholder="0" autocomplete="off" required/><br/>
        <label>Water Temperature:</label><br/>
        <input type="text" name="WATEMP" placeholder="0" autocomplete="off" required/><br/>
        <label>Air Temperature:</label><br/>
        <input type="text" name="AIRTEMP" placeholder="0" autocomplete="off" required/><br/>
        <label>Humidity:</label><br/>
        <input type="text" name="HUMID" placeholder="0" autocomplete="off" required/><br/>
        <label>Flow Rate:</label><br/>
        <input type="text" name="FLOW" placeholder="0" autocomplete="off" required/><br/>
        <label>Filter Pressure:</label><br/>
        <input type="text" name="PRESS" placeholder="0"autocomplete="off"required/><br/>
        <label>Tested By:</label><br/>
        <input type="text" name="name" autocomplete="off"required/><br/>
        <input type="submit" value="Submit Results"/>
    </form>
</body>
</html>

<?php 
    $FCL = $_POST["FCL"];
    $TCL = $_POST["TCL"];
    $CCl = null;
    $PH = $_POST["PH"];
    $ALK = $_POST["ALK"];
    $CAL = $_POST["CAL"];
    $CYA = $_POST["CYA"];
    $WATEMP = $_POST["WATEMP"];
    $AIRTEMP = $_POST["AIRTEMP"];
    $HUMID = $_POST["HUMID"];
    $FLOW = $_POST["FLOW"];
    $TURN = null;
    $PRESS = $_POST["PRESS"];
    $name = $_POST["name"];
    $TURN = 155000 / $FLOW / 60;
    $TURN = number_format($TURN, 2);
    $CCL = $TCL-$FCL;
    //Warnings
    //Combined Chlorine
    if ($CCL >=1){
        echo"CLOSE POOL AND SHOCK<br>";
    }
    if ($FCL >$TCL){
        echo"ERROR Free Chlorine Can Not Be Higher Than Total Chlorine.<br>";
    }
    //Chlorine warning
    if ($FCL >5){
        echo "WARNING: Lower Chlorine<br>";
    }
    elseif($FCL<1){
        echo "WARNING: Raise Chlorine<br>";
    }
    else{
        null;
    }
    //pH Warning
    if($PH <7.2){
        echo"WARNING:Raise pH<br>";
    }
    elseif($PH >7.8){
        echo"Lower pH<br>";  
    }
    else{
        null;
    }
    //ALK Warning
    if($ALK >180){
        echo"WARNING: Lower Alkalinity<br>";
    }
    elseif($ALK <80){
        echo"WARNING: Raise Alkalinity<br>";
    }
    else{
        null;
    }
    // Calcium Warning
    if($CAL >400){
        echo"WARNING: Lower Calcium Hardness<br>";
    }
    elseif($CAL <150){
        echo"WARNING: Raise Calcium Hardness<br>";
    }
    else{
        null;
    }
    if($CYA >100){
        echo"WARNING: Lower Cyanuric Acid Level<br>";
    }
    elseif($CYA <30){
        echo"WARNING: Raise Cyanuric Acid Level<br>";
    }
    else{
        null;
    }
    //TEST RESULTS
    //CHLORINE
    echo "Free Chlorine: {$FCL}ppm<br>";
    echo "Total Chlorine: {$TCL}ppm<br>";
    if ($FCL >$TCL){
        null;
    }
    elseif ($FCL ==$TCL){
        $CCL = 0;
        echo"Combined Chlorine: {$CCL}ppm<br>";
    }
    else{
        $CCL = $TCL-$FCL;
        echo"Combined Chlorine: {$CCL}ppm<br>";
    }
    //pH
    echo "pH: {$PH}<br>";
    // Alkalinity

    echo "Total Alkalinity: {$ALK}ppm<br>";
    //Calcium

    echo "Calcium Hardness: {$CAL}ppm<br>";
    // CYA
    echo "Cyanuric Acid: {$CYA}ppm<br>";
    echo "Water Temperature: {$WATEMP}°F<br>";
    echo "Air Temperature: {$AIRTEMP}°F<br>";
    echo "Humidity: {$HUMID}%<br>";
    echo "Flow Rate: {$FLOW}<br>";
    echo "Turnover Rate: {$TURN}Hours<br>";
    echo "Filter Pressure: {$PRESS}<br>";
    echo "Tested by: {$name}" 

 
?>