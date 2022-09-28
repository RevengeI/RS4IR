<html lang="en">

<head>
    <title>Start page</title>
    <script>
        function displayNum() {
            num = document.getElementsByName("num")[0].value;
            document.getElementById("dec2bin").innerHTML = num + " --> " + (num >>> 0).toString(2);
        }
    </script>
</head>

<body>
    <h1>Задание 1</h1>
    <form action="drawer.php" method="$_GET">
        <input type="range" name="num" oninput="displayNum()" min="0" max="255" value="0" style="width:90%">
        <span id="dec2bin">0 --> 0</span><br>
        <input type="submit" value="Итог">
    </form>

    <h1>Задание 2</h1>
    <form action="sort.php" method="$_GET">
        <input type="text" name="numbers" style="width:40%">
        <input type="submit" value="Итог">
    </form>

    <h1>Задание 3</h1>
    <form action="sys.php" method="$_GET">
        <input type="text" name="cmd" style="width:40%">
        <input type="submit" value="Итог">
    </form>
</body>

</html>