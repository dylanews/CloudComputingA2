<?php
    session_start();
    ?>
<html>
<head>
</head>
<body>
<h1>
<?php
    
    echo "LOGGED IN AS";
    echo $_SESSION['username'];
    ?>
    <a href="login.php">Log Out</a></h1>
    <hr>
    <h2>Main Content</h2>
    </body>
</html>


