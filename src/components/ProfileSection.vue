<template>
    <aside class="profile-section">
        <section class="profile-section__header">
            <img src="../assets/images/logo.jpg" alt="Profile Picture" class="picture" />
            <h1 class="name">
                <span class="bold">Дмитрий</span>
                <span class="thin">Рязанский</span>
            </h1>
            <p class="developer">Фронтенд-разработчик - Веб-разработка и UI-дизайн</p>
        </section>
        <section class="profile-section__profile">
            <h2>Профиль</h2>
            <p class="profile-description">Я начинающий фронтенд-разработчик, увлеченный созданием адаптивных и удобных
                веб-приложений. Обладаю опытом работы с современными фреймворками, такими как Vue.js и Nuxt, а также
                уверенно владею HTML, CSS и JavaScript. Быстро обучаюсь, внимателен к деталям, умею работать как
                самостоятельно, так и в команде. Открыт к новым вызовам и готов вносить вклад в инновационные проекты.
            </p>
        </section>
        <div class="separator"></div>
        <section class="profile-section__contacts">
            <div class="contacts-number">
                <p>Номер телефона</p>
                <span>+12092132827</span>
            </div>
            <div class="contacts-email">
                <p>Электронная почта</p>
                <span>contact@plugscenes.com7</span>
            </div>
            <div class="contacts-address">
                <p>Адрес</p>
                <span>Россия, Челябинская обл, Миасс</span>
            </div>
        </section>
        <div class="separator"></div>
        <section class="profile-section__skills">
            <h2>Навыки и инструменты</h2>
            <div class="skills-tools">
                <div class="tools-items">
                    <div class="item">
                        <img src="../assets/icons/figma.svg" alt="tools icon">
                        <span>Figma</span>
                    </div>
                    <div class="item">
                        <img src="../assets/icons/photoshop.svg" alt="tools icon">
                        <span>Photoshop</span>
                    </div>
                    <div class="item">
                        <img src="../assets/icons/illustrator.svg" alt="tools icon">
                        <span>Illustrator</span>
                    </div>
                    <div class="item">
                        <img src="../assets/icons/canva.svg" alt="tools icon">
                        <span>Canva</span>
                    </div>
                    <div class="item">
                        <img src="../assets/icons/adobexd.svg" alt="tools icon">
                        <span>Adobe XD</span>
                    </div>
                    <div class="item">
                        <img src="../assets/icons/indesign.svg" alt="tools icon">
                        <span>Indesign</span>
                    </div>
                </div>
                <div class="tools-items">
                    <div class="item">
                        <img src="../assets/icons/office.svg" alt="tools icon">
                        <span>Office 365</span>
                    </div>
                    <div class="item">
                        <img src="../assets/icons/myadmin.svg" alt="tools icon">
                        <span>Cpanel admin</span>
                    </div>
                    <div class="item">
                        <img src="../assets/icons/wordpress.svg" alt="tools icon">
                        <span>Wordpress</span>
                    </div>
                    <div class="item">
                        <img src="../assets/icons/vscode.svg" alt="tools icon">
                        <span>VS Code</span>
                    </div>
                    <div class="item">
                        <img src="../assets/icons/html.svg" alt="tools icon">
                        <span>HTML 5</span>
                    </div>
                    <div class="item">
                        <img src="../assets/icons/artboard.svg" alt="tools icon">
                        <span>Artboard</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="profile-section__other-skills">
            <h2>Другие навыки</h2>
            <ul class="other-skills__list">
                <li class="list__item">Дизайн продукта</li>
                <li class="list__item">Редактирование изображений</li>
            </ul>
        </section>
        <section class="profile-section__hobbies">
            <h2>Хобби</h2>
            <ul class="hobbies__list">
                <li class="list__item">Тренажерный зал</li>
                <li class="list__item">Video gaming</li>
                <li class="list__item">Driving</li>
                <li class="list__item">Learning</li>
            </ul>
        </section>
    </aside>
</template>

<script>
export default {
};
</script>

<style lang="scss" scoped>
.profile-section {
    width: 400px;
    text-align: center;
    padding: 50px 80px;
    background: linear-gradient(180deg, rgba(255, 200, 3, 0.5) 16%, rgba(0, 194, 255, 0.5) 100%);

    img {
        width: 250px;
        height: 250px;
        border-radius: 50%;
    }

    .name {
        font-size: 25px;
        display: inline-block;
        transform: scaleY(1.1);
        letter-spacing: 0.5px;
        text-transform: uppercase;

        .bold {
            font-weight: 900;
            padding: 0 3px;
        }

        .thin {
            font-weight: 200;
            padding: 0 3px;
        }
    }

    .developer {
        text-transform: uppercase;
        font-size: 16px;
        font-weight: 300;
        margin-top: -10px;
    }

    &__profile {
        margin-top: 50px;

        .profile-description {
            font-family: 'Roboto', sans-serif;
            font-size: 17px;
            line-height: 1.5em;
            font-weight: 400;
            text-align: justify;
            padding: 0 20px;
            margin: 0 auto;
        }
    }

    &__contacts {
        margin-top: 30px;

        p {
            font-weight: 600;
            text-transform: uppercase;
        }

        span {
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            font-size: 19px;
            font-weight: 400;
            background-color: rgba(255, 255, 255, 0.25);
            color: #000;
            padding: 6px 0;
            border-radius: 5px;
        }

        div {
            margin-bottom: 25px;
        }
    }

    &__skills {
        .skills-tools {
            margin-top: 30px;

            .tools-items {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                gap: 30px;
                padding: 25px;
                background-color: rgba(255, 255, 255, 0.25);
                border-radius: 20px;

                &:last-child {
                    margin-top: 70px;
                }

                .item {
                    display: flex;
                    flex-direction: column;
                    align-items: center;

                    img {
                        width: 90px;
                        height: 90px;
                    }

                    span {
                        max-width: 100px;
                        display: block;
                        color: #545454;
                        font-weight: 700;
                        margin-top: 7px;
                    }
                }
            }
        }
    }

    &__other-skills {
        font-family: 'Roboto', sans-serif;
        margin-top: 50px;

        h2 {
            margin-bottom: 30px;
        }

        .other-skills__list {
            line-height: 25px;
            margin-left: -40px;
            font-size: 18px;
        }
    }

    &__hobbies {
        font-family: 'Roboto', sans-serif;
        margin-top: 50px;

        h2 {
            margin-bottom: 30px;
        }

        .hobbies__list {
            line-height: 25px;
            margin-left: -40px;
            font-size: 18px;
        }
    }
}

.separator {
    margin: 25px auto 25px auto;
    width: 250px;
    background-color: #000;
    height: 1px;
}
</style>