<?php
    ob_start();
    session_start();
    ?>
<html>
<body>
</body>
</html>
<?php
    $file = fopen('gs://cloudcomputingassignment2.com/users.txt','w');
    fwrite($file, $_POST['username']);
    fwrite($file, ",");
    fwrite($file, $_POST['password']);
    fwrite($file, PHP_EOL);
    fclose($file);
    header("Location: https://cloudcomputingassignment2.com/login.php");
    ?>
