@extends('layouts.pagesclient')
@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>Bienvenue sur <br>à DANA DREAMS</h4>
                                <span>Partagedons nos rêves</span>
                                <div class="main-border-button">
                                    <a href="#">Plus d'infos</a>
                                </div>
                            </div>
                            <img src="client/assets/images/11.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Boutique</h4>
                                            <span>Best Clothes For Women</span>
                                        </div>
                                        <img src="client/assets/images/2.jpeg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Décoration</h4>
                                            <span>Best Clothes For Men</span>
                                        </div>
                                        <img src="client/assets/images/5.jpeg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Technologie</h4>
                                            <span>Best Clothes For Kids</span>
                                        </div>
                                        <img src="client/assets/images/55.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Accessoires</h4>
                                            <span>Best Trend Accessories</span>
                                        </div>
                                        <img src="client/assets/images/1.jpeg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** A propos de nous start ***** -->
    <section class="section" id="explore">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <h2>A propos de nous</h2>
                        <span>Dana dreams est une boutique prêt à porter qui vous propose des vêtements pour hommes, femmes, des accessoires et des outis technologiques haute gamme.</span>

                        <p>Nous proposons également d'autres services comme la décoration évènementielle, d'intérieure, etc...</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. <a rel="nofollow" target="_blank">support us</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <div class="main-border-button">
                            <a href="{{route('apropos')}}">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div style="width: 100%; height: 100%; border-radius: 50%;margin-top:-30px;">
                                <img class="img-responsive" src="client/assets/images/LOGO_DANA.png" style="object-fit: cover; width: 80%; height: 80%;"alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** A propos de nous ***** -->

    <!-- ***** Hommes Start ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Hommes</h2>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel" id="carousel-men"> <!-- Ajout d'un identifiant unique -->
                        <div class="owl-men-item owl-carousel">
                            @foreach ($articlesHomme as $article)
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li><a href="{{ '/articlesImages/' . $article->image }}"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="{{route('shopdetails', $article)}}"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <img src="{{ '/articlesImages/' . $article->image }}" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>{{ $article->nom }}</h4>
                                        <span>{{ $article->prix }} Fcfa</span>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Hommes End ***** -->

    <!-- ***** Femmes Start ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Femmes</h2>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel" id="carousel-men"> <!-- Ajout d'un identifiant unique -->
                        <div class="owl-men-item owl-carousel">
                            @foreach ($articlesFemme as $article)
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li><a href="{{ '/articlesImages/' . $article->image }}"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="{{route('shopdetails', $article)}}"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <img src="{{ '/articlesImages/' . $article->image }}" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>{{ $article->nom }}</h4>
                                        <span>{{ $article->prix }} Fcfa</span>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Femmes End ***** -->

    <!-- ***** Accessoires Start ***** -->
    <section class="section" id="kids">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Accessoires</h2>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel" id="carousel-men"> <!-- Ajout d'un identifiant unique -->
                        <div class="owl-men-item owl-carousel">
                            @foreach ($articlesAccessoire as $article)
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li><a href="{{ '/articlesImages/' . $article->image }}"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="{{route('shopdetails', $article)}}"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <img src="{{ '/articlesImages/' . $article->image }}" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>{{ $article->nom }}</h4>
                                        <span>{{ $article->prix }} Fcfa</span>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Accessoires End ***** -->

    <!-- ***** Technologie Start ***** -->
    <section class="section" id="kids">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Technologies</h2>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel" id="carousel-men"> <!-- Ajout d'un identifiant unique -->
                        <div class="owl-men-item owl-carousel">
                            @foreach ($articlesTechnologie as $article)
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li><a href="{{ '/articlesImages/' . $article->image }}"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="{{route('shopdetails', $article)}}"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <img src="{{ '/articlesImages/' . $article->image }}" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>{{ $article->nom }}</h4>
                                        <span>{{ $article->prix }} Fcfa</span>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Technologie End ***** -->

    <!-- NOS VIDEOS Start -->
    <section>
        <div class="col-lg-12" style="margin-top: 30px;">
            <div class="section-heading">
                    <h2 style="font-size: 36px; margin-bottom: 30px; text-align: center;">Quelques interessantes vidéos</h2>
                </div>
            </div>
            <!-- Conteneur div avec arrière-plan -->
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <video class="w-100" loop="" controls="">
                                <source src="video/" type="video/mp4">
                            </video>
                        </div>
                        <div class="col">
                            <video class="w-100" loop="" controls="">
                                <source src="video/" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- NOS VIDEOS End -->


<style>
    .item-details {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>

    <!-- ***** Blog Area Ends ***** -->


    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-heading" style="margin-top:30px;">
                    <h2>Contactez-nous pour plus d'informations</h2>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Contactez-nous Ends ***** -->

<section id="contact" class="contact"  style="margin-top:20px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="bg-light text-center h-100 p-5">
                    <div class="btn-square bg-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 90px; height: 90px;">
                        <img src="client/assets/images/call.png" alt="">
                    </div>
                    <h4 class="mb-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Téléphone</font></font></h4>
                    <p class="mb-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(+228) 92146589</font></font></p>
                    <a class="btn btn-success px-4" href="tel:+22892146589"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Appellez maintenant</font></font></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="bg-light text-center h-100 p-5">
                    <div class="btn-square bg-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 90px; height: 90px;">
                        <img src="client/assets/images/mail.png" alt="">
                    </div>
                    <h4 class="mb-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adresse e-mail</font></font></h4>
                    <p class="mb-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">danadreams@gmail.com"</font></font></p>
                    <a class="btn btn-success px-4" href="mailto:danadreams@gmail.com"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Envoyez un e-mail</font></font></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                <div class="bg-light text-center h-100 p-5">
                    <div class="btn-square bg-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 90px; height: 90px;">
                        <img src="client/assets/images/maps.png" alt="">
                    </div>
                    <h4 class="mb-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adresse</font></font></h4>
                    <p class="mb-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lomé, (Togo)</font></font></p>
                    <a class="btn btn-success px-4" href="https://maps.app.goo.gl/7rCzGPe1yXxXEmid6" target="blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Localisation</font></font></a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection