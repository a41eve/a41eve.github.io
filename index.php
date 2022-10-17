<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Профессия Веб-разработчик</title>
</head>

<body>
    <a name="up"></a>
    <div class="wrapper">
        <!-- стрелка наверх -->
        <div id="totop"><a href="#up"><svg xmlns="http://www.w3.org/2000/svg" height="35" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
                </svg></a></div>
        <div class="container">
            <header class="header">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a href="#" class="navbar-brand">
                            .WEB
                        </a>
                        <form class="d-flex">
                            <ul class="nav justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <svg xmlns="http://www.w3.org/2000/svg" id="back-sv" width="25" height="25" fill="currentColor" class="bi bi-chat-square-dots" viewBox="0 0 16 16">
                                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                            <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                        </svg>
                                    </a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Мы вам позвоним</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="php/call.php" method="POST">
                                                    <div class="modal-body">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="name" name="name" placeholder="Ваше имя" required>
                                                            <label for="floatingInput">Ваше имя</label>
                                                        </div>
                                                        <div class="form-floating">
                                                            <input type="tel" class="form-control" id="tel" name="tel" placeholder="Номер телефона" required>
                                                            <label for="floatingPhone">Номер телефона</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                                            <label class="form-check-label" for="gridCheck" required>
                                                                Подвердить права
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn-sign">Отправить</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>
                </nav>
            </header>
            <div class="header-inner">
                <div class="row">
                    <h1 class="col-sm-8">Разработчик<br>Веб-приложений</h1>
                </div>
                <div class="row">
                    <p class="col-sm">Веб-разработчик — это особый специалист в IT-области, занимающийся созданием сайтов и различных сервисов. Он прописывает исходный код продукта (проекта) и воплощает в жизнь
                        макет, который был создан дизайнером.
                    </p>
                </div>
                <div class="learn">
                    <a href="#hist">Смотреть больше</a>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="220" height="35" fill="currentColor" class="bi bi-chevron-compact-down learn-arrow bounce-1" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z" />
                </svg>
            </div>
        </div>
    </div>

    <a name="hist"></a>

    <section class="history">
        <div class="container">
            <h4>История профессии веб-разработчик</h4>
            <img src="img/fon-web.jpg" alt="">
            <p class="hist-p">Во второй половине 90-ых началась более профессиональная веб-разработка, когда вышел
                первый более «продвинутый» браузер — Mosaic, спецтехнологии CSS, языки программирования Flash и
                известнейший JavaScript. Где-то в это же время был создан PHP — специализированный язык для бэкенда.</p>
            <p class="hist-p">В далеком 1990 году был разработан первый сайт и браузер Тимом Бернерс-Ли в Европейском
                центре ядерных исследований CERN.</p>
            <p class="hist-p">Новые технологии оперативно становились популярными, было выгодно делать удобные и
                привлекающие внимание ресурсы – так в этой сфере стали крутиться большие деньги.</p>
            <p class="hist-p">Дальше начались войны браузеров. Каждый старался добавить что-то новое, к счастью, сейчас
                приняты более-менее единые стандарты. Сейчас многие уходят в web developers. Ну а спрос на настоящих
                профи в этой сфере только увеличивается.</p>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="card">
                        <ul class="list-group-flush">
                            <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="rot bi bi-plus-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                </svg>⠀<b>Преимущества профессии</b></li>
                            <li class="list-group-item">
                                <i>
                                    <p>- востребованность на рынке труда;</p>
                                    <p>- творческая работа, так как каждая задача уникальна, и для ее решения существует
                                        несколько
                                        способов;</p>
                                    <p>- возможность совмещения с учебой;</p>
                                    <p>- не всегда требуется диплом;</p>
                                    <p>- возможность стать специалистом в молодом возрасте;</p>
                                    <p>- свобода в принятии решений (как решать ту или иную задачу, решает сам
                                        web-программист);
                                        возможность удаленной работы.</p>
                                </i>
                            </li>
                        </ul>
                    </div>
                    <div class="card">
                        <ul class="list-group-flush">
                            <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="rot bi bi-dash-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                                </svg>⠀<b>Недостатки профессии</b></li>
                            <li class="list-group-item list-two">
                                <i>
                                    <p>- ненормированный рабочий день;</p>
                                    <p>- сидячая работа;</p>
                                    <p>- большая нагрузка на зрение, что может привести к его ухудшению;</p>
                                    <p>- иногда приходится работать «в стол» и переделывать, так как требования меняются
                                        на
                                        ходу;</p>
                                    <p>- необходимо постоянно обучаться, потому что все быстро устаревает – это минус
                                        только
                                        для
                                        тех,
                                        кто не любит учиться.</p>
                                </i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <img src="img/left.jpg" class="content-img" alt="left">
                </div>
            </div>
        </div>
    </section>

    <section class="approach">
        <div class="container">
            <h4>Кому подойдет эта специальность</h4>
            <div class="container-approach">
                <div class="card-approach">
                    <img src="img/approach/freshman.png" class="card-img-top-one" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Новичкам</h5>
                        <p class="card-text">Тем, кто ни разу не программировал и при этом хочет открыть для
                            себя
                            мир разработки
                            клиентской стороны веб-приложений.</p>
                    </div>
                </div>
                <div class="card-approach">
                    <img src="img/approach/beginner-specialist.png"" class=" card-img-top-one" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Начинающим специалистам</h5>
                        <p class="card-text">Тем, кто уже имеет определенный набор знаний и навыков, и при этом
                            хочет их систематизировать, а также углубить.</p>
                    </div>
                </div>
                <div class="card-approach">
                    <img src="img/approach/professional.png" class="card-img-top-one" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Профессионалам</h5>
                        <p class="card-text">Тем, кто уже является действующим разработчиком, и хочет изучить
                            новые технологии, либо сменить профессию.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <section class="knowledge">
        <div class="container">
            <div class="container-knowledge">
                <div class="card-knowledge">
                    <h5><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" style="color: red;" fill="currentColor" class="bi bi-exclamation-lg" viewBox="0 0 16 16">
                            <path d="M7.005 3.1a1 1 0 1 1 1.99 0l-.388 6.35a.61.61 0 0 1-1.214 0L7.005 3.1ZM7 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z" />
                        </svg> Знания и навыки для работы веб-разработчиком:</h5>
                    <i>
                        <p>- создание информационных баз;</p>
                        <p>- разработка сайтов в интернете, знание CSS и HTML;</p>
                        <p>- работа с API, реляционными базами;</p>
                        <p>- разработка веб-ресурсов под мобильные девайсы;</l>
                            <p>- взаимодействие с React.js, Angular и т.д;</p>
                            <p>- тестирование сайта, корректировка его работы;</p>
                            <p>- проверка надежности и функциональности продукта;</p>
                            <p>- знание PHP, JavaScript, Python;</p>
                            <p>- публикация кодов на серверах;</p>
                            <p>- работа с системой контроля версий Git и прочее.</p>
                    </i>
                </div>
                <div class="card-knowledge">
                    <h5><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" style="color: red;" fill="currentColor" class="bi bi-exclamation-lg" viewBox="0 0 16 16">
                            <path d="M7.005 3.1a1 1 0 1 1 1.99 0l-.388 6.35a.61.61 0 0 1-1.214 0L7.005 3.1ZM7 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z" />
                        </svg> Обязанности можно обозначить так:</h5>
                    <i>
                        <p>- получение задачи от клиента и определение всего конечного результата;</p>
                        <p>- работа над всеми моментами проекта с привлечением дизайнера, маркетолога и менеджера;</p>
                        <p>- создание программного кода для обеспечения корректной работы сайта;</p>
                        <p>- сбор технических документов;</p>
                        <p>- тестирование работы сайта, выявление и устранение ошибок, неполадок;</p>
                        <p>- запуск, показ клиенту.</p>
                    </i>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <section class="filter">
        <div class="container">
            <h4>Какие Web-программисты бывают</h4>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link btn btn-dark active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Frontend
                    разработчики</button>
                <button class="nav-link btn btn-dark" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Backend разработчики</button>
                <button class="nav-link btn btn-dark" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Fullstack разработчики</button>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <p>Frontend-разработчики занимаются отображением информации в браузере. Это те люди, которые
                        работают в связке с дизайнерами и отвечают за корректность макета, плавность анимации,
                        инфографику на сайте – за все, что видят пользователи, за frontend-часть (сторону) продукта.
                        А
                        она взаимодействует с браузером и использует его для выполнения определенных задач.
                        Технологии
                        (языки), которые понимает браузер, – это HTML, CSS и JavaScript. Все это надо знать
                        web-программисту, работающему с frontend-частью. Если у вас «поплыл» текст или кнопка
                        «убегает»
                        от вас при наведении, знайте, что во всем виноват фронтендер.</p>
                    <p>Фронтенд-программист разрабатывает визуальное представление, с которым взаимодействует
                        пользователь (вебсайт). Как правило, он работает с языком JavaScript или TypeScript
                        (надстройка
                        над JS). Есть и другие языки для фронтенда, но код, написанный на них, все равно
                        интерпретируется в JavaScript, так как только он способен исполняться в веб-браузерах. Также
                        фронтендер обязан знать CSS и HTML и как минимум один из популярных сейчас фреймворков –
                        React,
                        Vue или Angular.</p>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                    <p>Backend-разработчик занимается реализацией логики, скрытой от клиентов. Это может быть
                        аутентификация пользователей, балансировка нагрузки на сервер, отдача запроса фронтенда из
                        базы
                        данных. Backend-разработчики иногда взаимодействуют с системными администраторами, так как
                        работоспособность сервера очень важна. Сейчас существует множество языков общего назначения,
                        которые используются на сервере. Самый широко распространенный на текущий момент – это PHP,
                        для
                        enterprise-решений стандартное решение – Java (не путать с JavaScript), а также Python, Ruby
                        и
                        набирает популярность Golang. Если вы заполнили форму и при нажатии на кнопку отправки вдруг
                        появляется сообщение, что что-то пошло не так, то, скорее всего, во всем виноват бэкендер.
                    </p>
                    <p>Бэкенд-разработчик занимается серверным приложением, к которому обращается фронтенд или
                        другой
                        клиент (часть сайта и т. д.). На бэкенде – основная логика программы и хранятся данные в
                        базе
                        данных. Бэкенд-программист обязан знать как минимум один бэкенд-язык (например PHP, Python,
                        JS,
                        Java, C#, Golang), уметь работать с базами данных и немного ориентироваться в алгоритмах.
                    </p>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                    <p>Fullstack-программист. Это человек, который отвечает за все этапы разработки web-приложения,
                        то
                        есть он совмещает обязанности и frontend-, и backend-разработчика. Можно быть мастером на
                        все
                        руки, а можно быть очень усердным и вырасти из backend/frontend-разработчика выше. В
                        небольших
                        предприятиях или на фрилансе fullstack-разработчик – это иногда еще и системный
                        администратор, и
                        дизайнер в одном лице. Таких специалистов обычно называют web-мастер. Часто
                        fullstack-программисты становятся архитекторами. Это самая высокая должность.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="salary">
        <div class="container">
            <h4>Web-разработчик: вакансии, зарплата, карьера</h4>
            <img src="img/salary.jpg" alt="">
            <p>Профессия разработчика web и мультимедийных приложений, создателя сайтов сейчас является самой популярной
                и востребованной в программировании. Лидирующие позиции занимают backend-специалисты. На каждом сайте
                есть вакансии веб-разработчика. Заработная плата зависит от опыта и направления деятельности.</p>
            <p>Fullstack и Frontend на начальном этапе получают в среднем 50 000 – 70 000 рублей. Backend может
                рассчитывать на 60 000 – 80 000. Есть предложения разных рабочих форматов: удаленно и в офисе.</p>
        </div>
    </section>

    <footer class="footer">
        <section>
            <div class="container">
                <div class="row row-cols-2">
                    <div class="col coll">
                        <h4 class="card-title">Найти нас</h4>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" style="color: #555;" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                    </svg>⠀Email адрес</h5>
                                <p class="card-text-w">veter.210703@gmail.com</p>
                            </div>
                        </div>

                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" style="color: #555;" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                                        <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                    </svg>⠀Контактный телефон</h5>
                                <p class="card-text-w">+7(982)-320-74-06</p>
                            </div>
                        </div>

                        <div class="fab">
                            <span class="fab-action-button">
                                <i class="fab-action-button__icon"></i>
                            </span>
                            <ul class="fab-buttons">
                                <li class="fab-buttons__item">
                                    <a href="#" class="fab-buttons__link">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="40" style="color: #222;" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="fab-buttons__item">
                                    <a href="#" class="fab-buttons__link">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="40" style="color: #222;" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="fab-buttons__item">
                                    <a href="#" class="fab-buttons__link">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="40" style="color: #222;" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="fab-buttons__item">
                                    <a href="#" class="fab-buttons__link">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="40" style="color: #222;" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                            <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <a name="back"></a>
                        <h4 class="card-title">Связаться с нами</h4>
                        <form action="php/send.php" method="POST" class="row g-3 get-in-touch">
                            <div class="form-floating col-md-6">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                <label for="floatingInput">Ваше имя</label>
                            </div>
                            <div class="form-floating col-md-6">
                                <input type="email" class="form-control" id="mail" name="mail" placeholder="Email" required>
                                <label for="floatingPassword">Ваш e-mail</label>
                            </div>
                            <div class="form-floating">
                                <textarea type="text" class="form-control" placeholder="Com" name="com" id="com" style="height: 100px" required></textarea>
                                <label for="floatingTextarea2">Комментарий</label>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn-get">Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </footer>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jQueryv3.6.0.min.js"></script>
</body>

</html>