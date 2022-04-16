@extends('layouts.main')
@section('content')
    <header class="masthead">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center text-white">
                        <h1 class="mb-5">Сізге жауап керек болса, бізге келіңіз!</h1>
                        <form class="form-subscribe" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            {{-- <div class="row">
                                <div class="col">
                                    <input class="form-control form-control-lg" id="emailAddress" type="email"
                                        placeholder="Почта" data-sb-validations="required,email" />
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:required">
                                        Email Address is required.</div>
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:email">Email
                                        Address Email is not valid.</div>
                                </div>
                                <div class="col-auto"><button class="btn btn-primary btn-lg disabled"
                                        id="submitButton" type="submit">Жіберу</button></div>
                            </div> --}}
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    <p>To activate this form, sign up at</p>
                                    <a class="text-white"
                                        href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Error sending message!</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-emoji-smile m-auto text-primary"></i></div>
                        <h3>Көбірек тәжірибе</h3>
                        <p class="lead mb-0">Біз жыл сайын емдейтін миллион пациенттер бізді ең маңыздысы - сізді
                            емдеуге дайындайды!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-clipboard-check m-auto text-primary"></i></div>
                        <h3>Дұрыс жауаптар</h3>
                        <p class="lead mb-0">Сізге бірінші рет дәл диагнозды және дұрыс жоспарды жеткізу үшін
                            мамандарымызға сеніңіз!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-bag-plus m-auto text-primary"></i></div>
                        <h3>Әсері бар инновация</h3>
                        <p class="lead mb-0">Біздің пациенттерге күтім жасау, білім беру және зерттеулеріміз сізді
                            емдеуге көмектесетін жаңалықтар жасауға бағытталған.!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img"
                    style="background-image: url('assets/img/bg-showcase-1.jpg')"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Заманауи технолгиялар</h2>
                    <p class="lead mb-0">Біз Қазақстан халқының денсаулығын қорғау және жақсарту үшін жұмыс жасаймыз.
                        Ал ол үшін заманауи технологниялар қажет, біздің клиника соңғы үлгідегі инновациялық құралдармен
                        қамтылған үздік клиникалардың бірі!</p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/img/bg-showcase-2.jpg')">
                </div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h2>Сіз әрдайым біріншісіз!</h2>
                    <p class="lead mb-0">Сіз жеке тұлға ретінде ең жоғары деңгейлі қызметті алуға лайықтысыз. Біз үшін
                        сіз әрдайым бірінші орындасыз, сіздің және сіздің отбасыңыз үшін барлық жағдай жасалған!</p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img"
                    style="background-image: url('assets/img/bg-showcase-3.jpg')"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Тәжірибелі мамандар</h2>
                    <p class="lead mb-0">Бізде Қазақстан және шет елдерде білім алған жоғары деңгейлі дәрігерлер жұмыс
                        істейді!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials text-center bg-light">
        <div class="container">
            <h2 class="mb-5">Біз туралы пікірлер...</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-1.jpg" alt="..." />
                        <h5>Гүлнұр М</h5>
                        <p class="font-weight-light mb-0">"Барлығы өте жоғары деңгейде! Көп рахмет!"</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-2.jpg" alt="..." />
                        <h5>Шыңғыс Б.</h5>
                        <p class="font-weight-light mb-0">"Қызметтерді алу өте ыңғайлы. Кезексіз алдына ала жазылып қоя
                            алады."</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-3.jpg" alt="..." />
                        <h5>Альмира Е.</h5>
                        <p class="font-weight-light mb-0">"Маған қызметкерлер өте ұнады. Жылдам әрі өздерінің жұмыстарын
                            жақсы біледі!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="call-to-action text-white text-center" id="signup">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <h2 class="mb-4">Денсаулығыңызды қорғауға дайынсыңба? Поста арқылы байланыс!</h2>
                    {{-- <form class="form-subscribe" id="contactFormFooter" data-sb-form-api-token="API_TOKEN">
                        <div class="row">
                            <div class="col">
                                <input class="form-control form-control-lg" id="emailAddressBelow" type="email"
                                    placeholder="Почта" data-sb-validations="required,email" />
                                <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:required">
                                    Email Address is required.</div>
                                <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:email">
                                    Email Address Email is not valid.</div>
                            </div>
                            <div class="col-auto"><button class="btn btn-primary btn-lg disabled" id="submitButton"
                                    type="submit">Жіберу</button></div>
                        </div>

                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                <p>To activate this form, sign up at</p>
                                <a class="text-white"
                                    href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                    </form> --}}
                </div>
            </div>
        </div>
    </section>
@endsection

@section('head')
    <title>Поликлиника</title>
@endsection
