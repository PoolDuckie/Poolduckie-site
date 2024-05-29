<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="../image/favicon.ico" type="image/icon">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <header class="header-main">
        <div class="header-main-logo">
        <img src="../image/logo.svg" alt="">
        <nav class="header-main-nav">
            <ul>
                <li><a href="../index.php">HOME</a></li>
                <li><a href="../php/Seville.php">Seville Pool Hours</a></li>
                <li><a href="../php/en-MSDS.php">MSDS</a></li>
                <li><a href="../php/test.php">Pool Test</a><li>
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
    <main>
        <form action="login.php" method="get">
            <label>Username:</label><br/>
            <input type="text" name="username"><br/>
            <label>Passcode:</label><br/>
            <input type="password" name="password"><br/>
            <input type="submit" value="Sign in">
        </form>
    </main>
    
</body>
</html>