<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="style.css">
    <meta name="robots" content="index, follow" />
    <meta name="description" content="We create web and mobile apps for online trainers">

    <script src="https://kit.fontawesome.com/b14771b76e.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="public/img/logo.ico">


    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <script src='https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js'></script>
    <title>Fitness Avenue - We create websites and mobile apps for personnal coachs</title>
</head>

<body>
    <div class="content">
        <header class="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                    aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">Fitness Avenue</a>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#pricing">Pricing</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#testimonials">Testimonials</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#faq">FAQ</a></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <!--<li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
-->
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <button class="btn btn-purple my-2 my-sm-0">Get started</button>
                    </form>
                </div>
            </nav>
        </header>

        <main class="main">

            <div class="hero">
                <div class="hero__content">
                    <h1>
                        Fitness Avenue
                    </h1>

                    <p>
                        Websites and mobile apps
                        services for coachs
                    </p>

                    <div class="hero__content__buttons">
                        <button class="btn btn-hite">
                            Get Started
                        </button>

                        <button class="btn btn-white">
                            Plans & Pricing
                        </button>
                    </div>
                </div>
            </div>

            <div class="app">
                <div class="app__content">
                    <h2>
                        App features
                    </h2>


                    <p class="text text-grey">
                        Get your professional website and mobile apps based on
                        your customers needs, growth your business
                    </p>

                    <div class="app__content__items">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-check"></i>
                            </div>

                            <h3>
                                User friendly
                            </h3>

                            <p>
                                Our apps are easy to use
                            </p>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-lock"></i>
                            </div>

                            <h3>
                                Secure data
                            </h3>

                            <p>
                                All your datas are safe with us
                            </p>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-bolt"></i>
                            </div>

                            <h3>
                                Fast perfomances
                            </h3>

                            <p>
                                Our apps are fast
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grey" id='services'>
                <div class="grey__content">
                    <div class="grey__content__image pt-5">
                        <img src="public/img/person.jpg" alt="">
                    </div>

                    <div class="grey__content__text">
                        <h2>
                            What do we do ?
                        </h2>
                        <p class="text-black">
                            The web agency "Fitness Avenue" specializes in creating websites and applications for sports
                            coaches.
                            We understand the unique needs of coaches and strive to incorporate them into our creations
                            to make their
                            professional life easier. <br>
                            Our team use the latest technologies to create modern, user-friendly websites and
                            applications tailored to the needs
                            of each coach. We also offer maintenance service to ensure your website or application is
                            running smoothly.
                        </p>

                        <a class="btn btn-purple" href="#contact">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>

            <div class="screens" id='app'>
                <div class="screens__content">
                    <h2>
                        App screenshots
                    </h2>

                    <hr>

                    <p class="text text-black">
                        Apps created based on your needs
                    </p>

                    <div class="screens__content__slider">
                        <div class="screen">
                            <img src="public/img/site1.jpg" alt="">
                        </div>

                        <div class="screen">
                            <img src="public/img/site2.jpg" alt="">
                        </div>

                        <div class="screen">
                            <img src="public/img/site3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="clients" id='testimonials'>
                <div class="clients__content">
                    <h2>
                        Testimonials
                    </h2>

                    <p class="text text-grey">
                        What do our clients say ?
                    </p>

                    <section class="section mt-2 slider">
                        <div class="">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="slides">
                                            <div class="slide">
                                                <div class="card">
                                                    <p class="text text-grey">
                                                        "
                                                    </p> <br>

                                                    <p class="text text-black">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Iusto quasi fuga excepturi cum atque beatae sequi maxime
                                                    </p>

                                                    <p class="text text-purple">
                                                        John
                                                    </p>

                                                    <img src="public/img/people1.jpg" alt="">
                                                </div>

                                            </div>

                                            <div class="slide">
                                                <div class="card">
                                                    <p class="text text-grey">
                                                        "
                                                    </p> <br>

                                                    <p class="text text-black">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Iusto quasi fuga excepturi cum atque beatae sequi maxime
                                                    </p>

                                                    <p class="text text-purple">
                                                        John
                                                    </p>

                                                    <img src="public/img/people2.jpg" alt="">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="slides">
                                            <div class="slide">
                                                <div class="card">
                                                    <p class="text text-grey">
                                                        "
                                                    </p> <br>

                                                    <p class="text text-black">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Iusto quasi fuga excepturi cum atque beatae sequi maxime
                                                    </p>

                                                    <p class="text text-purple">
                                                        John
                                                    </p>

                                                    <img src="public/img/people3.jpg" alt="">
                                                </div>

                                            </div>

                                            <div class="slide">
                                                <div class="card">
                                                    <p class="text text-grey">
                                                        "
                                                    </p> <br>

                                                    <p class="text text-black">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Iusto quasi fuga excepturi cum atque beatae sequi maxime
                                                    </p>

                                                    <p class="text text-purple">
                                                        John
                                                    </p>

                                                    <img src="public/img/people4.jpg" alt="">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="slides">
                                            <div class="slide">
                                                <div class="card">
                                                    <p class="text text-grey">
                                                        ""
                                                    </p> <br>

                                                    <p class="text text-black">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Iusto quasi fuga excepturi cum atque beatae sequi maxime
                                                    </p>

                                                    <p class="text text-purple">
                                                        John
                                                    </p>

                                                    <img src="public/img/people5.jpg" alt="">
                                                </div>

                                            </div>

                                            <div class="slide">
                                                <div class="card">
                                                    <p class="text text-grey">
                                                        ""
                                                    </p> <br>

                                                    <p class="text text-black">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Iusto quasi fuga excepturi cum atque beatae sequi maxime
                                                    </p>

                                                    <p class="text text-purple">
                                                        John
                                                    </p>

                                                    <img src="public/img/people6.jpg" alt="">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="plan" id='pricing'>
                <div class="plan__content">
                    <h2>
                        Tarifs
                    </h2>

                    <hr>
                    <p class="text text-grey">
                        Sites et applications uniques, selon vos besoins
                    </p>

                    <div class="plan__content__items">
                        <div class="item one">
                            <div class="item__up">
                                <div class="item__up__price">
                                    $ 300 / an
                                </div> <br>

                                <p class="text text-red">
                                    Starter
                                </p>
                            </div>

                            <div class="item__body">
                                <ul>
                                    <li>
                                        Création de 5 pages
                                    </li>

                                    <li>
                                        Référencement SEO optimisé
                                    </li>

                                    <li>
                                        Hébergement et NDD inclus
                                    </li>

                                    <li>
                                        Formulaire de contact & prise de RDV
                                    </li>
                                </ul>
                            </div>

                            <div class="item__footer">
                                <button class="btn btn-red">
                                    Commander
                                </button>
                            </div>
                        </div>

                        <div class="item two">
                            <div class="item__up">
                                <div class="item__up__price">
                                    $ 499 / an
                                </div> <br>

                                <p class="text text-red">
                                    Standard
                                </p>
                            </div>

                            <div class="item__body">
                                <ul>
                                    <li>
                                        Création de back-office coach et clients
                                    </li>

                                    <li>
                                        Logiciel de création de programmes
                                    </li>

                                    <li>
                                        Gestion des abonnements clients
                                    </li>

                                    <li>
                                        Maintenance du site
                                    </li>
                                </ul>
                            </div>

                            <div class="item__footer">
                                <button class="btn btn-red">
                                    Commander
                                </button>
                            </div>
                        </div>

                        <div class="item one">
                            <div class="item__up">
                                <div class="item__up__price">
                                    $ 899 / an
                                </div> <br>

                                <p class="text text-red">
                                    Premium
                                </p>
                            </div>

                            <div class="item__body">
                                <ul>
                                    <li>
                                        Application web + mobile
                                    </li>

                                    <li>
                                        Nombre d'utilisateurs illimité
                                    </li>

                                    <li>
                                        Fonctionnalités avancées
                                    </li>

                                    <li>
                                        Support premium
                                    </li>
                                </ul>
                            </div>

                            <div class="item__footer">
                                <button class="btn btn-green">
                                    Commander
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="os" id='os'>
                <div class="os__content">
                    <h2>
                        3 raisons e créer votre site internet
                    </h2>

                    <hr>

                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <img src="/public/img/annie-spratt-oQfSHQ2Uaic-unsplash.jpg" alt="">
                            <p>
                                Améliorez votre visibilité
                            </p>

                            <div class="icon">

                            </div>

                            <div class="hidden">
                                <p>
                                    En tant que coach sportif, votre visibilité est cruciale pour attirer de nouveaux
                                    clients et développer votre entreprise. Avoir un site internet professionnel est
                                    l'un des meilleurs moyens de vous faire connaître et de vous démarquer de la
                                    concurrence. Un site internet vous permet de présenter vos services de manière
                                    claire et efficace. Vous pouvez également montrer des témoignages de clients
                                    satisfaits et des photos de vos séances d'entraînement.

                                    Un site internet vous permet également de rester en contact avec vos clients actuels
                                    et potentiels, et de leur donner des informations sur les dernières nouveautés et
                                    événements. Vous pouvez même utiliser des outils de réservation en ligne pour
                                    simplifier la gestion de vos rendez-vous. En somme, avoir un site internet
                                    professionnel vous permettra de vous faire connaître auprès d'un public plus large
                                    et de gérer efficacement votre entreprise.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="faq" id='faq'>
                <div class="faq__content">
                    <h2>
                        FAQ
                    </h2>

                    <p>
                        Questions fréquentes
                    </p>

                    <div class="faq__content__drops">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        Question 1


                                        <b class="btn btn-hidden" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="false" aria-controls="collapseOne">
                                            V
                                        </b>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                        cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        Question 1


                                        <b class="btn btn-hidden" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="false" aria-controls="collapseOne">
                                            V
                                        </b>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                        cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        Question 1


                                        <b class="btn btn-hidden" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="false" aria-controls="collapseOne">
                                            V
                                        </b>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                        cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="updates" id='blog'>
                <div class="updates__content">
                    <h2>
                        Articles de blog
                    </h2>

                    <p class="text text-grey">
                        We publish every week some articles
                    </p>

                    <div class="updates__content__articles">
                        <div class="article">
                            <img src="public/img/strong.jpg" alt="">

                            <h3>
                                Article 1
                            </h3>
                            <div class="date">
                                <p class="text text-grey">
                                    16/02/2021
                                </p>

                                <div class="time">
                                    3 min
                                </div>
                            </div>

                            <p class="text text-black">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Iure, doloribus? Ratione,
                                sequi dolores! Atque, repudiandae ipsam!

                            </p>

                            <button class="btn btn-black">
                                Lire article
                            </button>
                        </div>


                        <div class="article">
                            <img src="public/img/article2.jpg" alt="">

                            <h3>
                                Article 2
                            </h3>
                            <div class="date">
                                <p class="text text-grey">
                                    16/02/2021
                                </p>

                                <div class="time">
                                    3 min
                                </div>
                            </div>

                            <p class="text text-black">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Iure, doloribus? Ratione,
                                sequi dolores! Atque, repudiandae ipsam!

                            </p>

                            <button class="btn btn-black">
                                Lire article
                            </button>
                        </div>

                        <div class="article">
                            <img src="public/img/strong.jpg" alt="">

                            <h3>
                                Article 3
                            </h3>
                            <div class="date">
                                <p class="text text-grey">
                                    16/02/2021
                                </p>

                                <div class="time">
                                    3 min
                                </div>
                            </div>

                            <p class="text text-black">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Iure, doloribus? Ratione,
                                sequi dolores! Atque, repudiandae ipsam!

                            </p>

                            <button class="btn btn-black">
                                Lire article
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact" id="contact">
                <div class="contact__content">
                    <div class="contact__content__form">
                        <form class="form" method=' POST' action='./api/api.php?action=contact'>
                            <div class="form-group">
                                <label for="inputAddress">Email: </label> <span class="red">*</span>
                                <input type="Email" class="form-control" id="inputAddress" placeholder="Email"
                                    name='email' required>
                            </div>

                            <div class="form-group">
                                <label for="inputAddress">Fullname </label> <span class="red">*</span>
                                <input type="text" class="form-control" id="inputAddress" placeholder="Full name"
                                    name='full name' required>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Message: </label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3 "></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    </div>

                    <div class="contact__content__infos">
                        <h2>
                            Contact infos
                        </h2> <br>

                        <p class="text text-purple">
                            <i class="fas fa-envelope"></i>
                            hello@fitnessavenue.com
                        </p>
                        <p class="text text-purple">
                            <i class="fab fa-instagram"></i>
                            @fitness_avenue
                        </p> <br>

                        <p class="text text-black">
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Ex laboriosam placeat libero,
                            debitis odit nobis aut quae dolor distinctio,
                        </p>
                    </div>
                </div>

            </div>
        </main>

        <footer class="footer">
            <div class="footer__content">
                <div class="footer__content__item">
                    <p class="text text-white">
                        © 2023 <a href="index.php">FitnessAvenue</a>
                        <strong> <br>
                            Tous droits réservés
                        </strong>
                    </p>
                </div>

                <div class="footer__content__item">
                    <ul>
                        <li><a href="">
                                <i class="fab fa-instagram"></i>
                            </a></li>

                        <li><a href="">
                                <i class="fab fa-facebook"></i>
                            </a></li>
                    </ul>
                </div>

                <div class="footer__content__item">
                    <ul>
                        <li><a href="" class="span">
                                Terms of use
                            </a></li>

                        <li>
                            <ul>
                                <li>
                                    <a href="" class="span">
                                        Privacy policy
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>

        <script type="text/javascript" src='./public/js/vue.js'></script>
        <script type="text/javascript" src='./public/js/script.js'></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
    </div>
</body>

</html>