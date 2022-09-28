<html lang="en">

<head>
    <title>Drawer page</title>
</head>

<body>
    <h1>Drawer</h1>
    <?php
    include_once 'drawer_engine.php';
    $parameter = $_GET[DrawerEngine::PARAMETER_NAME];
    new DrawerEngine($parameter);
    ?>
</body>

</html>