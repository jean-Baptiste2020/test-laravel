@extends('base')

@section('title','Inscrivez-vous | '.env('APP_NAME'))

@section('content')

<!-- Contact Section-->
<section class="page-section" id="contact" style="margin-top: 20px;">
    <div class="container">
        <img src="images/img2.webp" alt="" height=150px style="margin-top:20px;">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Inscrivez-Vous</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                <form action="{{route('inscription')}}" method="POST">

                    {{csrf_field()}}

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Nom</label>
                            <input class="form-control" id="nom" type="text" placeholder="Nom" required="required" data-validation-required-message="Please enter your name." name="nom" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Prenom</label>
                            <input class="form-control" id="prenom" type="text" placeholder="Prenom" required="required" data-validation-required-message="Please enter your email address." name="prenom" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Age</label>
                            <input class="form-control" id="age" type="number" placeholder="Age" required="required" data-validation-required-message="Please enter your phone number." name="age" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">


                        <label for="rad">Sexe
                            <input type="radio" id="rad" required="required" value="Masculin" name="sex" checked="checked">M
                            <input type="radio" id="rad" required="required" value="Féminin" name="sex" checked="checked">F
                        </label>
                    </div>


                    <br />
                    <div id="success"></div>
                    <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Valider</button></div>
                </form>
            </div>
        </div>
    </div>
</section>



@endsection