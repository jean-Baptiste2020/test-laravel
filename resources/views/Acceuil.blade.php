@extends('base')

@section('title','Acceuil | '.env('APP_NAME'))

@section('content')
<section id="change">

    <header class="masthead bg-primary text-white text-center">
        <img src="images/img1.png" alt="" height=100px style="margin-top:20px;">
        <div class="container d-flex align-items-center flex-column">

            <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="" />

            <h2 class="masthead-heading text-uppercase mb-0">Laravel Le Futur</h2>

            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>

            <p class="masthead-subheading font-weight-light mb-0">Aller Plus Vite Avec Laravel</p>
        </div>
    </header>

    <section class="page-section portfolio" id="portfolio">
        <div class="container">

            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Bienvenue sur l'acceuil </h2>

    </section>
</section>


@endsection