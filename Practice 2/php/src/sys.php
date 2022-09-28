<html lang="en">

<head>
    <title>Cmd page</title>
</head>

<body>
    <h1>CMD</h1>
    <?php
    include_once 'sys_eng.php';
    $parameter = $_GET[PARAMETER_NAME];
    try {
        cmd($parameter);
    } catch (Exception $e) {
        echo 'Wrong input';
    }
    ?>
</body>

</html>