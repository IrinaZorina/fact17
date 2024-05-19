<!DOCTYPE html>
<html>
    <head> 
        <link rel="stylesheet" href="styles/styles.css">
        <?php
        $time = 9;
        if ($time >= 8 && $time < 20){
        echo '<link rel="stylesheet" href="styles/styleday.css">';
        } else {
            echo '<link rel="stylesheet" href="styles/stylenight.css">';
        }
        ?>
        
    </head>
    <body>
        <?php
            include "header.php"
            ?>
        <main>
            <div class="flex-conteiner">
        <div class="one"><div class="img"></div></div>   
        <div class="two"><p>Меня зовут Золотова Анастасия, мне 22 года, учусь в Магнитогорском государственном техническом университете <br>
            им.Г.И. Носова на 4 курсе по специальности<br> "Педагог математики и информатики". Также работаю инструктором по горным лыжам и сноуборду.<br>
            В свободное от учебы и работы время люблю заниматься<br> спортом, путешествовать по разным городам и странам,<br>
            а также делать торты на заказ.Себя могу охарактеризовать 
            как<br> активного, внимательного и трудоспособного человека.Очень открытая и дружелюбная, люблю новые знакомства.<br>
            Всегда стремлюсь достичь поставленной цели. Мои сильные стороны-это хорошие управленческие и лидерские навыки.</p></div>  
        <div class="three"><p>На первый занятиях все понравилось!Хороший наставник, понятные темы, много примеров, 
            которые облегчают новичку(такому как я)восприятие новых тем.<br> Хотелось, чтобы 
            преподаватель давал побольше пояснений к домашнему заданию(например, 
            с помощью каких тегов нужно сделатьто или иное задание, что-то на подобие подсказок).
            Увидела очень много полезных ссылок на учебники и сайты на гугл-диске,<br>
            где можно самостоятельно изучать темы. Сильно помог влиться в темы вводный курс,где можно
            изучить материал быстро, даже с закреплением в виде заданий.</p></div> </div>
            <div class="flex-conteiner1">
                <form>
                    <label for="login">Имя пользователя</label>
                    <input type="text" id="login" name="Имя пользователя" required="login"><br>
                    <label for="email">email</label>
                    <input type="email" name="email" required>
                   <br>
                    <label for="select">Что будем изучать?</label>
                   <select name="select" id="select">
                    <option value="html">HTML</option>
                    <option value="php">PHP</option>
                    <option value="bitrix">BITRIX</option>
                   </select>
                   <br>
               <fieldset>
                    <legend>Хочу быть...</legend>
                       <input type="radio" for="radio">
                       <label for="check">Junior PHP Developer</label>
                       <input type="radio" for="radio"> 
                       <label for="check"> Middle PHP Developer</label>
                       <input type="radio" for="radio">
                       <label for="check"> Front-end разработчик</label>
                       <input type="radio" for="radio">
                       <label for="check"> Нее, хочу быть дизайнером</label>
               </fieldset>
               <fieldset>
                   <legend>Мои навыки в программировании</legend>
                       <input type="checkbox" for="check">
                       <label for="check">Бог программирования</label>
                       <input type="checkbox" for="check">
                       <label for="check">Гуру программирования</label> 
                       <input type="checkbox" for="check">
                       <label for="check">Эм...я еще учусь</label>
               </fieldset>
                       <label>Во сколько мне удобнее приходить?</label>
                       <input type="time"><br>
                       <label>Мои пожелания по курсам</label>
                       <textarea></textarea><br>
                   <input type="button" value="Все, я справился с заполнением формы">
               </form>
            </div>
            <div class="flex-conteiner2">
                <div class="img">
                </div>
            </div>
            <div class="flex-conteiner3">
                <div class="grid">
                    <div class="one1"><strong>B</strong></div>
                    <div class="two1">5 <br> 10,811</div>
                    <div class="three1"><strong>Бор</strong></div>
            </div>
            <div class="flex-conteiner4">
                <div class="header"><strong><h1>Энциклопедия цветов</h1></strong></div>
                <section class="conteiner12">
                    <div class="row">    
                    <div class="one">1.</div>
                    <div class="two">2.</div>
                    <div class="three">1.Ваксфловер <br>Это австралийский кустарник с белыми или розовыми цветками-чашечками.<br>
                        Цветы ваксфловера очень схожи с цветами яблони, и не терпят сухого воздуха.</div>
                    <div class="four">2.Гвоздика кустовая<br>Это ветвистая гвоздика высотой от 10 до 60 см, с небольшими многочисленными бутонами<br>
                        Благодаря высокому содержанию витаминов и минералов, гвоздика является мощным лекарственным средством.</div>
                    </div>
                    
                    <div class="row1">
                    <div class="five">5.</div>
                    <div class="six">6.</div>
                    <div class="seven">5.Гербера<br>Ближайшая родственница ромашки, что легко заметить по их внешнему сходству.<br>
                    Это светолюбивые и теплолюбивые растения; предпочитают слабокислые почвы</div>
                    <div class="eight">6.Ирисы<br>По-гречески «Ирис» означает «Радуга». <br>
                        Это имя цветку дал врач Гиппократ за потрясающее <br>многообразие оттенков. В зависимости от сорта
                        <br> его высота может варьироваться от 10 до 40 см, некоторые виды достигают 120 см в высоту. </div>
                    </div>
                    </section>
                    <div class="header1"><strong><h1>Цветы, занесённые в Красную книгу</h1></strong></div>
                    <section class="conteiner13">
                        <div class="row2">
                            <div class="nine"></div>
                            <div class="ten"></div>
                         <div class="row3">   
                                <div class="eleven">Подснежник широколистный</div>
                                <div class="twelve">Лотос орехоносный</div>  
                                <div class="row4">
                                    <div class="threeteen"></div>
                                    <div class="fourteen"></div>
                                 <div class="row5">   
                                        <div class="fiveteen">Трава-меч</div>
                                        <div class="sixteen">Пион тонколистный</div>      
                        </div>
                    </section>
            </div>
            <?php
            include "footer.php"
            ?>
        </main>
        </body>
        </html>
       
