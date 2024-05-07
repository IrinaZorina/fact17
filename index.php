<?php
$currentHour = date('H');
echo $currentHour;
$darkTheme = false;
if ($currentHour < 8 || $currentHour > 20) {
    $darkTheme = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css"/>
</head>
<body class=<?= $darkTheme ? 'theme-dark' : '' ?>>
    <main>
        <div class="container">
            <h1 class="title">Котики</h1>
            <ul class="card-list">
                <li class="card-list_item">
                    <div class="card">
                        <img
                                src="https://cdnn11.img.sputnik.by/img/102768/82/1027688237_0:95:1080:705_600x0_80_0_0_831ee01339d75d74036faf92940e6968.jpg"
                                alt="коты"
                                class="card_img"
                        />
                        <h3 class="card_title">
                            Есть мнение, что кошки и дрессировка понятия несовместимые. Ничего
                            подобного, мой кот выдрессировал меня за пару дней.
                        </h3>
                    </div>
                </li>
                <li class="card-list_item">
                    <div class="card">
                        <img
                                src="https://garden-zoo.ru/userfiles/%D0%9F%D0%BE%D1%87%D0%B5%D0%BC%D1%83%20%D0%BA%D0%BE%D1%82%D1%8B%20%D1%82%D0%B0%D0%BA%D0%B8%D0%B5%20%D0%B2%D1%8B%D1%81%D0%BE%D0%BA%D0%BE%D0%BC%D0%B5%D1%80%D0%BD%D1%8B%D0%B5.jpg"
                                alt="коты"
                                class="card_img"
                        />
                        <h3 class="card_title">
                            Чужая душа – потемки, ну а кошачья – тем более.
                        </h3>
                    </div>
                </li>
                <li class="card-list_item">
                    <div class="card">
                        <img
                                src="https://m.ridus.ru/images/2020/10/19/1163937/in_article_fe622d5dc7.webp"
                                alt="коты"
                                class="card_img"
                        />
                        <h3 class="card_title">
                            Я изучил многих философов и многих кошек. Мудрость кошек
                            неизмеримо выше.
                        </h3>
                    </div>
                </li>
                <li class="card-list_item">
                    <div class="card">
                        <img
                                src="https://sun9-59.userapi.com/impg/O0iryUCYzZEDBAbE71x4IJiVz9m4sSQ1nHIeIA/Cw5eWIdO26M.jpg?size=604x574&quality=95&sign=d62c25a5b26d4cb178633c620867e7b8&c_uniq_tag=51bF_FM0RJPmxIO4zfjwlY8Vkl-rc_M_0Wy6bAgWBAI&type=album"
                                alt="коты"
                                class="card_img"
                        />
                        <h3 class="card_title">
                            Детство — это когда твой кот старше тебя.
                        </h3>
                    </div>
                </li>
            </ul>
            <h2 class="title">Ещё котики</h2>
            <ul class="card-list card-list--two-columns">
                <li class="card-list_item">
                    <div class="card">
                        <img
                                src="https://cdnn11.img.sputnik.by/img/102768/82/1027688237_0:95:1080:705_600x0_80_0_0_831ee01339d75d74036faf92940e6968.jpg"
                                alt="коты"
                                class="card_img"
                        />
                        <h3 class="card_title">
                            Есть мнение, что кошки и дрессировка понятия несовместимые. Ничего
                            подобного, мой кот выдрессировал меня за пару дней.
                        </h3>
                    </div>
                </li>
                <li class="card-list_item">
                    <div class="card">
                        <img
                                src="https://garden-zoo.ru/userfiles/%D0%9F%D0%BE%D1%87%D0%B5%D0%BC%D1%83%20%D0%BA%D0%BE%D1%82%D1%8B%20%D1%82%D0%B0%D0%BA%D0%B8%D0%B5%20%D0%B2%D1%8B%D1%81%D0%BE%D0%BA%D0%BE%D0%BC%D0%B5%D1%80%D0%BD%D1%8B%D0%B5.jpg"
                                alt="коты"
                                class="card_img"
                        />
                        <h3 class="card_title">
                            Чужая душа – потемки, ну а кошачья – тем более.
                        </h3>
                    </div>
                </li>
                <li class="card-list_item">
                    <div class="card">
                        <img
                                src="https://m.ridus.ru/images/2020/10/19/1163937/in_article_fe622d5dc7.webp"
                                alt="коты"
                                class="card_img"
                        />
                        <h3 class="card_title">
                            Я изучил многих философов и многих кошек. Мудрость кошек
                            неизмеримо выше.
                        </h3>
                    </div>
                </li>
                <li class="card-list_item">
                    <div class="card">
                        <img
                                src="https://sun9-59.userapi.com/impg/O0iryUCYzZEDBAbE71x4IJiVz9m4sSQ1nHIeIA/Cw5eWIdO26M.jpg?size=604x574&quality=95&sign=d62c25a5b26d4cb178633c620867e7b8&c_uniq_tag=51bF_FM0RJPmxIO4zfjwlY8Vkl-rc_M_0Wy6bAgWBAI&type=album"
                                alt="коты"
                                class="card_img"
                        />
                        <h3 class="card_title">
                            Детство — это когда твой кот старше тебя.
                        </h3>
                    </div>
                </li>
            </ul>
        </div>
    </main>
</body>
</html>
