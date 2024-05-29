<?php
    $post = $_POST;
    if (isset($post['password']) && isset($post['login'])) {



        $passwordHash = hash('sha256', $post['password']);
    }
?>
<!DOCTYPE html>
<html lang="ru">
<?php
    include_once('./templates/head.php');
?>
<body>
<?php
    include_once('./templates/header.php');
?>
<main class="main">
    <section class="page-section">
        <div class="wrapper">
            <div class="grid">
                <div class="grid__column-12">
                    <h1>Авторизация</h1>
                    <form action="" method="post">
                        <div>
                            <input type="text" name="login" placeholder="Login">
                        </div>
                        <div class="mt-16">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <button class="button mt-16">отправить</button>
                    </form>
                </div>
            </div>

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
