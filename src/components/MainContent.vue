<template>
    <main class="main-content">
        <section class="main-content__work-history">
            <div class="work-history__wrapper">
                <h1 class="work-history__title">Опыт работы</h1>
                <h2 class="work-history__sub-title">Фронтенд-разработчик</h2>
                <h3 class="work-history__sub-sub-title">Начинающий разработчик, работающий с HTML, CSS, JavaScript, Vue
                    и Nuxt.</h3>
                <div class="work-history__description">
                    <h4 class="description-title">Описание</h4>
                    <p class="description-list__paragraph">Разработал интерфейс интернет-магазина в рамках
                        дипломной работы, проработав
                        структуру, дизайн и адаптивность.</p>
                    <p class="description-list__paragraph">Выполнил вёрстку двух страниц для компании "Профипарк":
                        Страница постов, Карточки постов.</p>

                    <p class="description-goal">Стремлюсь к совершенствованию навыков и изучению новых технологий для
                        создания современных и удобных веб-приложений.</p>
                </div>
            </div>
        </section>
    </main>
</template>

<script>
export default {
};
</script>

<style lang="scss" scoped>
.main-content {
    display: flex;
    justify-content: center;
    background-color: #ffffff;
    padding: 80px 50px 50px 50px;

    @media (max-width: 590px) {
        padding: 64px 45px 50px 45px;
    }

    &__work-history {
        .work-history__wrapper {
            display: flex;
            flex-direction: column;
            max-width: 700px;

            @media (max-width: 590px) {
                max-width: 300px;
            }

            .work-history__title {
                text-align: center;
                background-color: #000;
                border-radius: 10px;
                color: #fff;
                font-weight: 700;
                font-size: 22px;
                padding: 10px 0;
                text-transform: uppercase;
                letter-spacing: 0.5px;

                @media (max-width: 590px) {
                    font-size: 10.3px;
                    padding: 8px 0;
                }
            }

            .work-history__sub-title {
                text-align: center;
                font-family: 'Roboto', sans-serif;
                font-weight: 400;
                font-size: 16px;
                text-transform: uppercase;
                margin-top: 0px;

                @media (max-width: 590px) {
                    font-size: 7.5px;
                }
            }

            .work-history__sub-sub-title {
                text-align: center;
                font-weight: 600;
                font-size: 12px;
                text-transform: uppercase;
                margin-top: 0px;
                padding: 0 90px;

                @media (max-width: 590px) {
                    font-size: 5px;
                    padding: 0 40px;
                    margin-top: -2px;
                }
            }

            .description-title {
                font-family: 'Roboto', sans-serif;
                font-weight: 700;
                font-size: 14px;
                text-transform: uppercase;
                letter-spacing: 0.5px;
                margin-bottom: 10px;

                @media (max-width: 590px) {
                    font-size: 6.5px;
                }
            }

            .description-list__paragraph {
                position: relative;
                font-weight: 400;
                line-height: 1.5em;
                margin: 0;

                @media (max-width: 590px) {
                    font-size: 6px;
                    line-height: auto;
                }

                &::before {
                    content: '';
                    position: absolute;
                    top: 10px;
                    left: -15px;
                    width: 6px;
                    height: 6px;
                    background-color: #000;
                    border-radius: 50%;

                    @media (max-width: 590px) {
                        top: 3px;
                        left: -9px;
                        width: 2.9px;
                        height: 2.9px;
                    }
                }
            }

            .description-goal {
                line-height: 1.5em;

                @media (max-width: 590px) {
                    font-size: 6px;
                    line-height: auto;
                }
            }
        }
    }
}
</style>