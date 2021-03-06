@extends('templates.template')

@section('conteudo')

    <body>

        <!-- ***** Preloader Start ***** -->
        <div id="preloader">
            <div class="jumper">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- ***** Preloader End ***** -->


        <!-- ***** Header Area Start ***** -->
        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <a href="/" class="logo">
                                Condominio
                            </a>
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                            <ul class="nav">
                                <li class="scroll-to-section"><a href="#welcome" class="menu-item">Home</a></li>
                                <li class="scroll-to-section"><a href="#about" class="menu-item">Sobre</a></li>
                                <li class="scroll-to-section"><a href="#testimonials" class="menu-item">Depoimentos</a>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:;">Drop Down</a>
                                    <ul>
                                        <li><a href="" class="menu-item">Sobre Nós</a></li>
                                        <li><a href="" class="menu-item">Características</a></li>
                                        <li><a href="" class="menu-item">FAQ's</a></li>
                                        <li><a href="" class="menu-item">Blog</a></li>
                                    </ul>
                                </li>
                                <li class="scroll-to-section"><a href="#contact-us" class="menu-item">Fale Conosco</a></li>
                                <li class="scroll-to-section"><a href={{route('register')}}>Cadastro</a></li>
                            </ul>
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- ***** Header Area End ***** -->


        <!-- ***** Welcome Area Start ***** -->
        <div class="welcome-area" id="welcome">

            <!-- ***** Header Text Start ***** -->
            <div class="header-text">
                <div class="container">
                    <div class="row">
                        <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12"
                            data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                            <h1>Seu Condomínio de maneira <em>SIMPLES</em></h1>
                            <p>Lava <a href="#">HTML landing page</a> template is provided by <a href="#">TemplateMo</a>.
                            You can modify and use it for your commercial websites for free of charge. This template is last updated on 29 Oct 2019.</p>
                            <a href="#about" class="main-button-slider">NOS CONHEÇA MELHOR</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***** Header Text End ***** -->
        </div>
        <!-- ***** Welcome Area End ***** -->

        <!-- ***** Features Big Item Start ***** -->
        <section class="section" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <div class="features-item">
                            <div class="features-icon">
                                <h2>01</h2>
                                <img src="../images/financeiro.png" alt="">
                                <h4>Financeiro</h4>
                                <p>Controle suas contas, suas taxas, veja inadimplências, boletos e veja seus relatórios e balancetes.</p>
                                <a href="#testimonials" class="main-button">
                                    Leia Mais
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                        <div class="features-item">
                            <div class="features-icon">
                                <h2>02</h2>
                                <img src="../images/funcionarios.png" alt="">
                                <h4>Funcionários</h4>
                                <p>Monitore as informações de seus funcionarios: Férias, Cadastro, Pagamentos e muito</p>
                                <a href="#testimonials" class="main-button">
                                    Descubra mais
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <div class="features-item">
                            <div class="features-icon">
                                <h2>03</h2>
                                <img src="../images/gestao.png" alt="">
                                <h4>Gestão</h4>
                                <p>Notifique seus inquilinos, tenha controle de atividades, obras, mudanças, manutenções e consumos.</p>
                                <a href="#testimonials" class="main-button">
                                    Saiba Mais
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Features Big Item End ***** -->

        <div class="left-image-decor"></div>

        <!-- ***** Features Big Item Start ***** -->
        <section class="section" id="promotion">
            <div class="container">
                <div class="row">
                    <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <img src="../images/left-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                    </div>
                    <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                        <ul>
                            <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                                <img src="../images/garagem.png" alt="">
                                <div class="text">
                                    <h4>Garagem</h4>
                                    <p>Veja que vagas estão disponíveis, e de que moradores pertencem, assim como total administração da garagem.</p>
                                </div>
                            </li>
                            <li data-scroll-reveal="enter right move 30px over 0.6s after 0.5s">
                                <img src="../images/moradores.png" alt="">
                                <div class="text">
                                    <h4>Moradores</h4>
                                    <p>Tenha TOTAL controle das despesas de seus moradores, mudanças, manutenções, pagamentos,
                                            dívidas e muito mais.</p>
                                </div>
                            </li>
                            <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                                <img src="../images/visitas.png" alt="">
                                <div class="text">
                                    <h4>Visitas</h4>
                                    <p>Tenha controle das visitas em seu condominio, o tempo que ficarão, consumos e etc.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Features Big Item End ***** -->

        <div class="right-image-decor"></div>

        <!-- ***** Testimonials Starts ***** -->
        <section class="section" id="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="center-heading">
                            <h2>O que acham sobre <em>Nós</em></h2>
                            <p>Suspendisse vitae laoreet mauris. Fusce a nisi dapibus, euismod purus non, convallis odio.
                                Donec vitae magna ornare, pellentesque ex vitae, aliquet urna.</p>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-12 col-sm-12 mobile-bottom-fix-big"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <div class="owl-carousel owl-theme">
                            <div class="item service-item">
                                <div class="author">
                                    <i><img src="../images/testimonial-author-1.png" alt="Author One"></i>
                                </div>
                                <div class="testimonial-content">
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h4>Jonathan Smart</h4>
                                    <p>“Nullam hendrerit, elit a semper pharetra, ipsum nibh tristique tortor, in tempus
                                        urna elit in mauris.”</p>
                                    <span>Besta CTO</span>
                                </div>
                            </div>
                            <div class="item service-item">
                                <div class="author">
                                    <i><img src="../images/testimonial-author-1.png" alt="Second Author"></i>
                                </div>
                                <div class="testimonial-content">
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h4>Martino Tino</h4>
                                    <p>“Morbi non mi luctus felis molestie scelerisque. In ac libero viverra, placerat est
                                        interdum, rhoncus leo.”</p>
                                    <span>Web Analyst</span>
                                </div>
                            </div>
                            <div class="item service-item">
                                <div class="author">
                                    <i><img src="../images/testimonial-author-1.png" alt="Author Third"></i>
                                </div>
                                <div class="testimonial-content">
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h4>George Tasa</h4>
                                    <p>“Fusce rutrum in dolor sit amet lobortis. Ut at vehicula justo. Donec quam dolor,
                                        congue a fringilla sed, maximus et urna.”</p>
                                    <span>System Admin</span>
                                </div>
                            </div>
                            <div class="item service-item">
                                <div class="author">
                                    <i><img src="../images/testimonial-author-1.png" alt="Fourth Author"></i>
                                </div>
                                <div class="testimonial-content">
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h4>Sir James</h4>
                                    <p>"Fusce rutrum in dolor sit amet lobortis. Ut at vehicula justo. Donec quam dolor,
                                        congue a fringilla sed, maximus et urna."</p>
                                    <span>New Villager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Testimonials Ends ***** -->


        <!-- ***** Footer Start ***** -->
        <footer id="contact-us">
            <div class="container">
                <div class="footer-content">
                    <div class="row">
                        <!-- ***** Contact Form Start ***** -->
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="contact-form">
                                <form id="contact" action="" method="post">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <input name="name" type="text" id="name" placeholder="Nome Completo" required=""
                                                    style="background-color: rgba(250,250,250,0.3);">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <input name="email" type="text" id="email" placeholder="Seu e-mail"
                                                    required="" style="background-color: rgba(250,250,250,0.3);">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <textarea name="message" rows="6" id="message" placeholder="Sua Mensagem"
                                                    required="" style="background-color: rgba(250,250,250,0.3);"></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="main-button">Enviar Mensagem</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- ***** Contact Form End ***** -->
                        <div class="right-content col-lg-6 col-md-12 col-sm-12">
                            <h2>Mais sobre <em>Condomínio</em></h2>
                            <p>Phasellus dapibus urna vel lacus accumsan, iaculis eleifend leo auctor. Duis at finibus odio.
                                Vivamus ut pharetra arcu, in porta metus. Suspendisse blandit pulvinar ligula ut elementum.
                                <br><br>If you need this contact form to send email to your inbox, you may follow our <a
                                    rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact</a> page
                                for more detail.</p>
                            <ul class="social">
                                <li><a href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sub-footer">
                            <p>Copyright &copy; 2021 Élpis Soluções Digitais

                            | Designed by <a rel="nofollow" href="">Élpis Soluções Digitais</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </body>
@endsection
