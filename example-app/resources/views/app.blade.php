<!-- Original web-site -->
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Первые ракетки мира</title>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>

        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="downloadToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <i class="fa-solid fa-spinner rotating"></i>
                    <span class="me-auto">&nbsp;Ошибка</span>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    На текущий момент этот функционал недоступен.
                </div>
            </div>
        </div>


        <nav class="navbar bg-success bg-gradient" style="--bs-bg-opacity: .5;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://cdn-icons-png.flaticon.com/512/2528/2528207.png" alt="Tennis" width="30" height="30">
                    The Tennis Site
                </a>
                <button id="downloadButton" class="btn btn-outline-success" type="button">Загрузить</button>
            </div>
        </nav>


        <div class="title">Первые ракетки мира</div>


        <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="infoModalLabel">title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="family" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Информация о семье">family</div><br>
                        <div class="other" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Общие сведения">hobby</div><br>
                        <div class="game" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Информация об игре">game</div>
                    </div>
                    <div class="modal-footer">
                        <!--<button id="prev" type="button" class="btn btn-primary btn-prev">Предыдущая</button>
                        <button id="next" type="button" class="btn btn-primary btn-next">Следующая</button>-->
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                      </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row row-cols-xxs-1 row-cols-xs-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 row-cols-xxl-3 row-cols-x3l-4">

                <!----><div class="col">
                    <div class="card">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Iga_%C5%9Awi%C4%85tek_%282023_US_Open%29_18_%28cropped%29.jpg" class="card-img-top img-fluid" alt="Ига Свёнтек">
                        <div class="card-body">
                            <h5 class="card-title">Ига Свёнтек</h5>
                            <p class="card-text">
                                <b>Страна:</b> Польша<br>
                                <b>Дата рождения:</b> 31 мая 2001<br>
                                <b>Титул:</b> 4 апреля 2022 - 10 сентября 2023, 6 ноября 2023 - н.в.
                            </p>
                        </div>
                        <div class="card-footer">
                            <button
                                id="iga_sviontek" type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#infoModal" data-bs-name="Ига Свёнтек"
                                data-bs-family="Отец — Томаш Свёнтек (род. 1964), участник Олимпийских игр 1988 года в соревнованиях по академической гребле. У Иги есть старшая сестра Агата, которая также занималась теннисом, но рано завершила карьеру из-за травм."
                                data-bs-other="Свёнтек — любительница кошек, у неё есть чёрная кошка по кличке Граппа. Она с удовольствием читает романы Кена Фоллета и слушает музыку. Перед матчами она слушает рок-музыку, особенно Pearl Jam, Pink Floyd, Red Hot Chili Peppers и AC/DC. В свободное время она слушает альтернативную музыку, джаз, соул и поп-музыку. Она также является поклонницей Тейлор Свифт, заявляя, что «когда я была моложе и немного запуталась в жизни, когда я была подростком, когда я слушала, я не чувствовала себя одинокой. Кроме того, слушая её песни, я выучила английский язык. Так что она всегда была мне близка». В интервью Tennis Channel она назвала Микаэлу Шиффрин хорошим примером для подражания и сказала, что «очень уважает» её. Она также упомянула, что является поклонницей актрисы Сандры Буллок и её фильмов."
                                data-bs-game="Несколько лет с ней работает молодой тренер Петр Сежпутовский и спортивный психолог Дария Абрамович."
                            >Подробно</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/f/f0/Aryna_Sabalenka_%282024_DC_Open%29_06.jpg?uselang=ru" class="card-img-top img-fluid" alt="Арина Соболенко">
                        <div class="card-body">
                            <h5 class="card-title">Арина Соболенко</h5>
                            <p class="card-text">
                                <b>Страна:</b> Белоруссия<br>
                                <b>Дата рождения:</b> 5 мая 1998<br>
                                <b>Титул:</b> 11 сентября 2023 - 5 ноября 2023
                            </p>
                        </div>
                        <div class="card-footer">
                            <button
                                id="arina_sobolenko" type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#infoModal" data-bs-name="Арина Соболенко"
                                data-bs-family="Отец — бывший хоккейный вратарь, который играл до 19 лет, пока не попал в автомобильную аварию и после этого играл только на любительском уровне. Скончался в 2019 году в возрасте 44 лет. Мать Юлия. Есть младшая сестра — Антонина."
                                data-bs-other="Заниматься теннисом начала в возрасте шести лет, когда вместе с отцом Сергеем проезжала мимо теннисных кортов, и он решил попробовать отдать дочь на занятия. По её словам, в 9 лет она поняла, что теннис ей не подходит, но продолжила занятия, чтобы не разочаровывать родителей."
                                data-bs-game="По оценке председателя Белорусской теннисной федерации Александра Шакутина, бойцовские качества Соболенко превалируют над её физической формой, благодаря чему она «умеет выигрывать казалось бы, абсолютно безнадёжные матчи». Стиль игры Соболенко характеризуется агрессивностью, сопровождающейся значительным количеством виннеров и невынужденных ошибок. Выделяется своими мощными подачами, обусловленными антропометрическими данными теннисистки."
                            >Подробно</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Sydney_International_WTA_Players_Cruise_%2831974227527%29_%28cropped%29.jpg?uselang=ru" class="card-img-top img-fluid" alt="Эшли Барти">
                        <div class="card-body">
                            <h5 class="card-title">Эшли Барти</h5>
                            <p class="card-text">
                                <b>Страна:</b> Австралия<br>
                                <b>Дата рождения:</b> 24 апреля 1996<br>
                                <b>Титул:</b> 24 июня 2019 - 11 августа 2019, 9 сентября 2019 - 3 апреля 2022
                            </p>
                        </div>
                        <div class="card-footer">
                            <button
                                id="eshli_barti" type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#infoModal" data-bs-name="Эшли Барти"
                                data-bs-family="Эшли — одна из трёх дочерей Роберта и Джози Барти; её сестёр зовут Эли и Сара. Отец австралийки — представитель коренной народности нгариго, работник государственной библиотеки Квинсленда, а мать — потомок английских эмигрантов, рентгенолог в одной из больниц Ипсвича."
                                data-bs-other="Уроженка штата Квинсленд пришла в теннис в 5 лет вместе с родителями; любимое покрытие — трава. Получила премию «Молодая австралийка года» 2020 года. В ноябре 2021 года Барти объявила о помолвке с профессиональным гольфистом из Австралии Гарри Киссиком, с которым у неё отношения с 2017 года."
                                data-bs-game="23 марта 2022 года объявила о завершении профессиональной карьеры в возрасте 25 лет. Она решила завершить карьеру в статусе первой ракетки мира и победительницы Открытого чемпионата Австралии."
                            >Подробно</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="https://www.sports.ru/dynamic_images/news/109/742/635/4/share/0e8c41_no_logo_no_text.jpg" class="card-img-top img-fluid" alt="Наоми Осака">
                        <div class="card-body">
                            <h5 class="card-title">Наоми Осака</h5>
                            <p class="card-text">
                                <b>Страна:</b> Япония<br>
                                <b>Дата рождения:</b> 16 октября 1997<br>
                                <b>Титул:</b> 28 января 2019 - 23 июня 2019, 12 августа 2019 - 8 сентября 2019
                            </p>
                        </div>
                        <div class="card-footer">
                            <button
                                id="naomi_osaka" type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#infoModal" data-bs-name="Наоми Осака"
                                data-bs-family="Происходит из интернациональной семьи, является афроазиаткой. Отец теннисистки Леонард Франсуа родом из Гаити, а мать Тамаки — японка. У Наоми есть старшая сестра Мари, которая также была профессиональной теннисисткой. 9 июля 2023 года родила дочь от рэпера Cordae."
                                data-bs-other="Из-за интернационального происхождения националистически настроенная часть японского общества, из-за мнения которой Осака испытывает проблемы с дискриминацией, называет её «хафу». Сама Наоми, проживавшая в детстве в Нью-Йорке, лучше говорит по-английски, чем по-японски, и на интервью отвечает на английском языке. Была признана журналом Forbes самой высокооплачиваемой спортсменкой 2019 года с доходом в $37 млн, а также по итогам 2021 года, заработав $57 млн, из них всего $2,3 млн благодаря спортивной деятельности, остальное — рекламные контракты."
                                data-bs-game="Любимое покрытие Наоми — хард; лучший удар — форхенд; детский кумир в спорте — Серена Уильямс. Предпочитает агрессивный стиль игры на корте. В 2014 году тренировалась в Теннисном институте Гарольда Соломона."
                            >Подробно</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/29/Halep_RG18_%2825%29_%2842929445712%29.jpg" class="card-img-top img-fluid" alt="Симона Халеп">
                        <div class="card-body">
                            <h5 class="card-title">Симона Халеп</h5>
                            <p class="card-text">
                                <b>Страна:</b> Румыния<br>
                                <b>Дата рождения:</b> 27 сентября 1991<br>
                                <b>Титул:</b> 9 октября 2017 - 28 января 2018, 26 февраля 2018 - 27 января 2019
                            </p>
                        </div>
                        <div class="card-footer">
                            <button
                                id="simona_halep" type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#infoModal" data-bs-name="Симона Халеп"
                                data-bs-family="Семья Симоны — из аромунов. Отец — Стере — директор молочного завода в Румынии, а также бывший футболист; мать зовут Таня. У Симоны есть старший брат Николае, который и привёл её в теннис в возрасте четырёх лет."
                                data-bs-other="Любимый турнир — Открытый чемпионат Франции. Кумирами в мире тенниса Халеп называет Роджера Федерера и Жюстин Энен. В 2009 году ради теннисной карьеры решилась на операцию по уменьшению груди (которая успешно прошла в июле). 15 сентября 2021 года в румынском городе Мамай вышла замуж за 42-летнего бизнесмена аромунского происхождения Тони Юруца."
                                data-bs-game="Любит играть на всех покрытиях; лучшим своим ударом считает подачу. Халеп уже в юниорские годы числилась одной из надежд национальной федерации. В 13 лет она провела свой первый турнир среди старших юниоров и постепенно достигла уровня лидеров: регулярно играя в решающих стадиях всё более и более престижных турниров она к весне 2007 года вошла в число сотни лучших теннисисток рейтинга, выиграла свой первый титул G1 (в Умаге) и дебютировала на юниорских соревнованиях Большого шлема."
                            >Подробно</button>
                        </div>
                    </div>
                </div><!---->

            </div>
        </div>


        <div class="footer">
            <hr>
            <div class="footer-contents">
                Саркисов Александр
            </div>
            <div class="social-box">
                <a href="https://github.com/"><img src="https://avatars.mds.yandex.net/i?id=bf5a825ae26fc14f6f89d763bd74bda2_l-4268172-images-thumbs&n=13" alt="GitHub"></a>
                <a href="https://ru.wikipedia.org/wiki/%D0%A1%D0%BF%D0%B8%D1%81%D0%BE%D0%BA_%D0%BF%D0%B5%D1%80%D0%B2%D1%8B%D1%85_%D1%80%D0%B0%D0%BA%D0%B5%D1%82%D0%BE%D0%BA_%D0%BC%D0%B8%D1%80%D0%B0_%D0%BF%D0%BE_%D1%80%D0%B5%D0%B9%D1%82%D0%B8%D0%BD%D0%B3%D1%83_WTA"><img src="https://is1-ssl.mzstatic.com/image/thumb/Purple127/v4/62/fe/6b/62fe6b11-63ee-bfcd-f46d-4f91771ed9df/contsched.mmsklutf.png/1200x630bb.png" alt="Wikipedia"></a>
                <a href="https://www.tennis.com/"><img src="https://cdn-icons-png.flaticon.com/512/2528/2528207.png" alt="Tennis"></a>
            </div>
        </div>


        <script src="/js/app.js"></script>

    </body>
</html>
