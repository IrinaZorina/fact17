<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Водород</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="styles/vodorod.css">
    <link rel="icon" href="media/vizitka.png">
    <?php
    require_once 'inserts/insfunction.php';
    styleTime();
    ?>
</head>

<body>
    <?php
    include 'inserts/header.php';
    ?>
    <main>
        <div class="container5">
            <div class="cell s-element cell-main">
                <span class="symbol"><strong>H</strong></span>
                <span class="name"><strong>Водород</strong></span>
                <span class="number"><strong>1</strong></span>
                <span class="atomic-mass"><strong>1,00797</strong></span>
            </div>
        </div>
        <?php
        session_start();

        if (isset($_SESSION['background_color'])) {
            $backgroundColor = $_SESSION['background_color'];
            echo "<style>body { background-color: $backgroundColor; }</style>";
        } else {
            $backgroundColor = 'blue';
        }
        ?>

        <h1>Выбери цвет фона</h1>

        <form method="post">
            <select name="color">
                <option value="red" <?php if ($backgroundColor == 'red')
                    echo 'selected'; ?>>Красный</option>
                <option value="green" <?php if ($backgroundColor == 'green')
                    echo 'selected'; ?>>Зеленый</option>
                <option value="blue" <?php if ($backgroundColor == 'blue')
                    echo 'selected'; ?>>Синий</option>
            </select>
            <input type="submit" value="Выбрать">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $selectedColor = $_POST['color'];
            $_SESSION['background_color'] = $selectedColor;
            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        }
        ?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </main>

    <?php
    include 'inserts/footer.php';
    ?>
</body>

</html>