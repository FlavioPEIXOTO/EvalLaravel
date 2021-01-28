@extends('layout')
@section('contenu')
<section class="inscription_container">
    <div class="container">

        <div class="row" id="block_container">
            <div class="col-md-5">
                <form action="/inscription" role="form" method="POST" >
                    {{csrf_field()}}
                    <fieldset>							
                        <h3 class="text-uppercase pull-center" id="title_inscription"> Inscrivez-vous</h3>	
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control input-lg" placeholder="Nom">
                        </div>
                        <div class="form-group">
                            <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="Prenom">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
                        </div>
                            <div class="form-group">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Password2">
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                En cliquant sur S’inscrire, vous acceptez nos Conditions générales.
                                <input type="checkbox" class="form-check-input" required>
                            </label>
                        </div>
                        <div>
                                <button class="w-100 btn btn-lg btn-primary" type="submit" value="S'inscrire">S'inscrire</button>
                        </div>

                    </fieldset>
                </form>
                <div clas="redirection_inscription">
                    <p> Vous avez déjà un compte ?</p>
                    <button class="w-80 btn btn-lg btn-primary" id="button_redirection">
                        <a href="connexion" id="text_button">Se connecter</a>
                    </button>
                </div>
            </div>
            
            <div class="col-md-2">
                <!-------null------>
            </div>

        </div>
    </div>
</section>
@endsection