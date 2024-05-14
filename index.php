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
            <h2 class="title"> Обо мне</h2>
            <div class="grid">
                <div class="grid__column-6">
                    <p class="paragraph">
                        Frontend разработчик из города Уфа.
                    </p>
                    <p class="paragraph">
                        Планирую стать фуллстеком или бэком.
                    </p>
                    <h3 class="title title--sm">Контакты</h3>
                    <table class="table-content table-content--2-col mb">
                        <tr>
                            <td>E-mail</td>
                            <td class="js-text-copy d-flex"><span class="js-copy-frame">bulatsrc@gmail.com</span>
                                <button class="copy-button" type="button" title="Копировать">
                                    <img src="img/ic-copy.svg"
                                         width="24" height="24"
                                         alt="копировать"/>
                                </button>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="grid__column-6 photo"><img src="img/my-photo.png" width="700" height="450" alt="моё фото"/>
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
