<html lang="en">

<head>
    <title>Sort page</title>
</head>

<body>
    <h1>Sorting. Insertion sort</h1>
    <?php
    include_once 'sort_engine.php';
    $parameter = $_GET[SortEngine::PARAMETER_NAME];
    try {
        new SortEngine($parameter);
    } catch (Exception $e) {
        echo 'Wrong input';
    }
    ?>
</body>

</html>