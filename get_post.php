<!DOCTYPE html>
<html lang="ru">
<?php
    include_once('./templates/head.php');
    $img = isset($_GET['img']) ? $_GET['img'] : 1;
    $post = $_POST;
?>
<body>
<?php
    include_once('./templates/header.php');
?>
<main class="main">
    <?php
        $img = isset($_GET['img']) ? $_GET['img'] : 1;
    ?>
    <section class="page-section">
        <div class="wrapper">
            <h1>Домашнее задание</h1>
            <form action="" method="post">
                <input type="text" name="name">
                <?php for($i = 1; $i <= 19; $i++):?>
                    <div>
                        <p>Вопрос № <?=$i?></p>
                        <div>
                            <input type="radio" id="<?=$i?>" name="question-<?=$i?>" value="yes" checked/>
                            <label for="<?=$i?>">Да</label>
                        </div>
                        <div>
                            <input type="radio" id="<?=$i+time()?>" name="question-<?=$i?>" value="no"/>
                            <label for="<?=$i+time()?>">Нет</label>
                        </div>
                    </div>
                <?php endfor;?>
                <button class="button">Отправить ответы</button>
            </form>
            <?php
                if (isset($post)) {
                    $questions = array_values($post);
                    $name = $post['name'] ?: '';
                    $yesAnswerIndex = [3, 9, 10, 13, 14, 19];
                    $score = null;

                    for ($i = 0; $i < count($questions); $i++) {
                        if (in_array($i + 1, $yesAnswerIndex) && $questions[$i] === 'yes') {
                            $score += 1;
                        } else if ($questions[$i] === 'no') {
                            $score += 1;
                        }
                    }

                    if ($score && $score > 15) {
                        echo "<p>$name, У Вас покладистый характер</p>";
                    }

                    if ($score && $score >= 8 && $score <= 15) {
                        echo "<p>$name, Вы не лишены недостатков, но с вами можно ладить</p>";
                    }

                    if ($score && $score < 8) {
                        echo "<p>$name, Вашим друзьям можно посочувствовать</p>";
                    }
                }
            ?>

            <ol>
                <li>
                    <h2>Почти слайдер</h2>
                    <img src="images/<?= $img ?>.png" alt="">
                    <a href="get_post.php?img=<?= $img > 1 ? $img - 1 : 5 ?>">назад</a>
                    <a href="get_post.php?img=<?= $img < 5 ? $img + 1 : 1 ?>">вперед</a>
                </li>
                <li>
                    <h2>Задание 1</h2>
                    <form action="" method="post">
                        <input type="text" name="text">
                        <div>
                            <input type="radio" id="huey" name="drone" value="huey" checked/>
                            <label for="huey">Huey</label>
                        </div>
                        <div>
                            <input type="radio" id="dewey" name="drone" value="dewey"/>
                            <label for="dewey">Dewey</label>
                        </div>
                        <div>
                            <input type="checkbox" id="scales" name="scales[]" checked/>
                            <label for="scales">Scales</label>
                        </div>
                        <div>
                            <input type="checkbox" id="horns" name="scales[]"/>
                            <label for="horns">Horns</label>
                        </div>
                        <select name="pets" id="pet-select">
                            <option value="">--Please choose an option--</option>
                            <option value="dog">Dog</option>
                            <option value="cat">Cat</option>
                            <option value="hamster">Hamster</option>
                        </select>
                        <br>
                        <button>отправить</button>
                    </form>
                    <?php
                        print_r('<pre>');
                        var_dump($post);
                        print_r('</pre>');
                    ?>
                </li>
                <li>
                    <h2>Задание 2</h2>
                    <form action="" method="post">
                        <input type="text" name="login" placeholder="Login">
                        <input type="password" name="password" placeholder="Password">
                        <br>
                        <button>отправить</button>
                    </form>

                    <?php
                        print_r('<pre>');
                        if (isset($post['password']) && isset($post['login'])) {
                            $_POST['password'] = hash('sha256', $post['password']);
                            var_dump($post['login']);
                            var_dump($post['password']);
                            print_r('</pre>');
                        }
                    ?>
                </li>
                <li>
                    <h2>Задание 3</h2>
                    <form action="" method="post">
                        <select name="user">
                            <option value="">--Выберите пользователя--</option>
                            <option value="admin">Адиминистротор</option>
                            <option value="moderator">Модератор</option>
                            <option value="user">Обычный юзер</option>
                        </select>
                        <br>
                        <input type="password" name="password" placeholder="Password">
                        <br>
                        <button>отправить</button>
                    </form>
                    <?php
                        $passwords = [
                            'admin' => 'admin',
                            'moderator' => 'moderator',
                            'user' => 'user'
                        ];


                        print_r('<pre>');

                        if (isset($post['user']) && isset($post['password'])) {
                            $userName = $post['user'];
                            $password = $post['password'];

                            foreach ($passwords as $user => $pass) {
                                if ($user === $userName && $pass === $password) {
                                    print ('доступ к секретным страницам открыт');
                                }
                            }
                        }
                        print_r('</pre>');
                    ?>
                </li>
            </ol>
        </div>
    </section>
</main>

<?php
    include_once('./templates/footer.php');
?>
<div class="overlay"></div>
<script src="js/main.js" type="module"></script>
</body>
</html>
