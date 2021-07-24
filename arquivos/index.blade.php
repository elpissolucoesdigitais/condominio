<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Home - {{ config('app.name') }}</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicon/favicon-96x96.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header class="main-header">
            <div class="c-container relative">
                <div class="flex flex-col lg:flex-row flex-wrap items-center md:py-2 lg-py-0">
                    <div class="w-full md:w-1/5"><img
                            class="w-64 sm:w-48 lg:w-32 object-contain mx-auto lg:m-0 block py-4"
                            src="{{ asset('images/content/larachat.webp') }}" width="400" /></div>
                    <div class="md:w-4/5 hidden md:block text-right">
                        <nav class="nav"><a data-scroll href="#about" class="nav__link">O Que é ? </a><a data-scroll
                                href="#features" class="nav__link">Funcionalidades </a><a data-scroll href="#pricing"
                                class="nav__link">Preço</a>
                            <div>
                                <a data-scroll href="#contact"
                                    class="nav__link button button--secondary button--border button--rounded ml-8">
                                    Converse com a Gente
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <main class="main main--footerFixed bg-gray-100">
            <section class="hero">
                <div class="c-container hero__wrapper font-leading">
                    <div class="w-full lg:w-1/3 px-2">
                        <div class="hero__content">
                            <h2 class="hero__title">Suporte por chat ao vivo para seus clientes.</h2>
                            <p class="hero__text text-gray-600">Nesse Curso COMPLETO Vamos Criar Muito Mais do que um Chat Real-time, Você Vai Aprender Conceitos Profundos de Boas Práticas com o Laravel e com o Vue.js</p>
                            <div class="text-center lg:text-left mt-3"><a
                                    class="button button--filled button--primary button--bordered mt-2"
                                    href="#pricing">Comece Agora Mesmo <svg class="w-4 h-4 ml-2" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg></a></div>
                        </div>
                    </div>
                    <div class="w-full lg:w-2/3 px-2 mt-16 lg:mt-0"><img class="w-full"
                            src="{{ asset('images/content/ilustration_hero.svg') }}" width="400" /></div>
                </div>
            </section>
            <section id="about" class="bg-white py-4">
                <div class="c-container">
                    <div class="flex flex-wrap py-10">
                        <div class="flex-initial lg:w-1/3 p-4">
                            <div class="card">
                                <div class="card__icon"><span
                                        class="bg-indigo-100 rounded-full flex items-center justify-center w-14 h-14 p-4 text-indigo-500"><svg
                                            class="w-full" fill="currentColor" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg></span></div>
                                <div class="card__content">
                                    <h2 class="card__title">Mensagens</h2>
                                    <p class="card__text">Envie mensagens em tempo real para qualquer pessoa da sua equipe</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-initial lg:w-1/3 p-4">
                            <div class="card">
                                <div class="card__icon"><span
                                        class="bg-indigo-100 rounded-full flex items-center justify-center w-14 h-14 p-4 text-indigo-500"><svg
                                            class="w-full" fill="currentColor" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg></span></div>
                                <div class="card__content">
                                    <h2 class="card__title">tech</h2>
                                    <p class="card__text">Usamos apenas tecnologias gratuitas e de alto nível (Socket.io + laravel-echo-server + redis)</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-initial lg:w-1/3 p-4">
                            <div class="card">
                                <div class="card__icon"><span
                                        class="bg-indigo-100 rounded-full flex items-center justify-center w-14 h-14 p-4 text-indigo-500"><svg
                                            class="w-full" fill="currentColor" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg></span></div>
                                <div class="card__content">
                                    <h2 class="card__title">Controle</h2>
                                    <p class="card__text">Controle tudo o que precisar no sistema, desde o background até as notificações</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="features" class="bg-indigo-100" data-layers="" data-section>
                <div class="c-container">
                    <div class="py-16 flex items-center top-10" data-layer>
                        <div class="flex flex-wrap top-1 items-center">
                            <div class="flex-1 lg:w-1/2 px-2 order-2 text-left font-leading">
                                <h2 class="text-4xl font-bold">Converse em tempo real com os seus clientes</h2>
                                <p class="text-sm text-gray-800 my-4">
                                    Melhore a qualidade do atendimento dos seus clientes, personalize tudo o que precisar com um sistema de alto nível
                                </p>
                            </div>
                            <div class="flex-initial lg:w-1/2 px-2 order-1"><img class="block mx-auto"
                                    src="{{ asset('images/home-1-content-1.png.webp') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="py-16 flex items-center top-10" data-layer="2">
                        <div class="flex flex-wrap top-1 items-center">
                            <div class="flex-1 lg:w-1/2 px-2 text-left font-leading md:order-1">
                                <h2 class="text-4xl font-bold">Aumente as suas vendas</h2>
                                <p class="text-sm text-gray-800 my-4">
                                    Com o LaraChat você vai aumentar as suas vendas
                                </p>
                            </div>
                            <div class="flex-initial lg:w-1/2 px-2 md:order-2"><img class="block mx-auto"
                                    src="{{ asset('images/home-1-content-1.png.webp') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="py-16 flex items-center top-1" data-layer="3">
                        <div class="flex flex-wrap top-1 items-center">
                            <div class="flex-1 lg:w-1/2 px-2 text-left font-leading md:order-2">
                                <h2 class="text-4xl font-bold">Melhore a qualidade no seu atendimento</h2>
                                <p class="text-sm text-gray-800 my-4">
                                    Atenda os seus clientes com mais qualidade
                                </p>
                            </div>
                            <div class="flex-initial lg:w-1/2 px-2 md:order-1"><img class="block mx-auto"
                                    src="{{ asset('images/home-1-content-1.png.webp') }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="pricing" class="py-20 m-h-screen" data-section="">
                <div class="c-container">
                    <div class="w-content text-center mx-auto">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Plano que melhor se adapta a você</h2>
                        <p class="text-gray-400 leading-relaxed">
                            Escolha o plano que melhor se encaixa as suas necessidades
                        </p>
                    </div>
                    <div class="pricingTable mt-10" x-data="pricingTable()">
                        <div class="flex flex-col lg:flex-row my-5 lg:space-x-4 space-y-8">
                            <template :key="index"></template>
                            <div class="flex-1 flex-1 md:w-2/3 md:mx-auto lg:w-auto">
                                <div class="card card--col" :id="item.ref" id="Basic">
                                    <div class="card__header">
                                        <div class="flex items-center justify-between">
                                            <h3 class="card__title" x-text="item.title">Mensal</h3><template
                                                x-if="item.badge"><span class="badge"
                                                    x-text="item.badge"></span></template>
                                        </div>
                                        <div class="card__price"><span class="price-currency mr-2"
                                                x-text="item.price.currency">R$</span> <span class="price-value"
                                                x-text="item.price[currentPricing]">19,90</span> <span
                                                class="price-period"><span class="px-1">/</span><span
                                                    x-text="translate()">Mês</span></span></div>
                                    </div>
                                    <div class="card__features"><template x-for="(feature, index) in item.features"
                                            :key="index">
                                            <p class="feature"><svg class="w-5 h-5 mr-2" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg> <span x-text="feature"></span></p>
                                        </template>
                                        <p class="feature"><svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg> <span x-text="feature">Recurso XYZ</span></p>
                                        <p class="feature"><svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg> <span x-text="feature">Recurso XYZ</span></p>
                                        <p class="feature"><svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg> <span x-text="feature">Recurso XYZ</span></p>
                                        <p class="feature"><svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg> <span x-text="feature">Recurso XYZ</span></p>
                                    </div>
                                    <div class="card__footer text-center my-4"><a href="#"
                                            class="button button--filled button--primary">Assinar Agora Mesmo<svg
                                                class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                            </svg></a></div>
                                </div>
                            </div>
                            <div class="flex-1 flex-1 md:w-2/3 md:mx-auto lg:w-auto">
                                <div class="card card--col" :id="item.ref" id="Pro">
                                    <div class="card__header">
                                        <div class="flex items-center justify-between">
                                            <h3 class="card__title" x-text="item.title">Anual</h3><template
                                                x-if="item.badge"><span class="badge"
                                                    x-text="item.badge"></span></template><span class="badge"
                                                x-text="item.badge">Recomendado</span>
                                        </div>
                                        <div class="card__price"><span class="price-currency mr-2"
                                                x-text="item.price.currency">R$</span> <span class="price-value"
                                                x-text="item.price[currentPricing]">39,90</span> <span
                                                class="price-period"><span class="px-1">/</span><span
                                                    x-text="translate()">Mês</span></span></div>
                                    </div>
                                    <div class="card__features"><template x-for="(feature, index) in item.features"
                                            :key="index">
                                            <p class="feature"><svg class="w-5 h-5 mr-2" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg> <span x-text="feature"></span></p>
                                        </template>
                                        <p class="feature"><svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg> <span x-text="feature">Recurso XYZ</span></p>
                                        <p class="feature"><svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg> <span x-text="feature">Recurso XYZ</span></p>
                                        <p class="feature"><svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg> <span x-text="feature">Recurso XYZ</span></p>
                                        <p class="feature"><svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg> <span x-text="feature">Recurso XYZ</span></p>
                                    </div>
                                    <div class="card__footer text-center my-4"><a href="#"
                                            class="button button--filled button--primary">Assinar Agora Mesmo<svg
                                                class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                            </svg></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="contact" class="relative pb-20" data-section>
                <div class="bg-after z-0"></div>
                <div class="c-container z-10 relative">
                    <div class="bg-white rounded shadow-lg p-6 w-full md:w-3/5 md:p-8 mx-auto">
                        <h3 class="font-semibold text-xl pb-2 border-b border-gray-200 px-1">Fale Conosco</h3>
                        <form class="form mt-10" action="">
                            <div class="form__row">
                                <div class="form__input-group">
                                    <div class="form__label-group">
                                        <p><label for="name" class="">Nome <abbr title="Obrigatório">*</abbr></label>
                                        </p>
                                    </div><input id="name" autocomplete="false" tabindex="0" class="form__input">
                                </div>
                            </div>
                            <div class="form__row">
                                <div class="form__input-group">
                                    <div class="form__label-group">
                                        <p><label for="email" class="">Email <abbr title="Obrigatório">*</abbr></label>
                                        </p>
                                    </div><input id="email" name="email" autocomplete="false" tabindex="0"
                                        class="form__input" required>
                                </div>
                            </div>
                            <div class="form__row">
                                <div class="form__input-group">
                                    <div class="form__label-group">
                                        <p><label for="subject" class="subject" class="">Assunto <abbr
                                                    title="Obrigatório">*</abbr></label></p>
                                    </div><input id="subject" name="subject" autocomplete="false" tabindex="0"
                                        class="form__input" required>
                                </div>
                            </div>
                            <div class="form__row">
                                <div class="form__input-group">
                                    <div class="form__label-group">
                                        <p><label for="message" class="bg-white text-gray-600 px-1">Mensagem <abbr
                                                    title="Obrigatório">*</abbr></label></p>
                                    </div><textarea id="message" name="message" class="form__input" rows="4"
                                        required></textarea>
                                </div>
                            </div>
                            <div class="mt-6 pt-3 text-center"><button type="submit"
                                    class="button button--filled button--primary">Enviar</button></div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        <footer class="main-footer main-footer--fixed">
            <div class="container py-5">
                <div class="flex justify-center">
                    <p class="text-gray-500 text-center font-medium font-leading px-4">Todos Direitos Reservados a <a
                            href="https://especializati.com.br"
                            class="font-semibold text-white hover:text-green-400">EspecializaTi</a> para o curso <a
                            href="#" class="hover:text-red-400">LaraChat</a></p>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
