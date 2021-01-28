@extends('layout')
@section('contenu')
<section class="connexion_container">
    <div class="form-signin">
        <form action="/connexion" method="POST">
            {{ csrf_field()}}
            {{-- <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
            <h2 class="h3 mb-3 fw-normal" id="title_connexion">Connexion</h2>

            <label for="inputEmail" class="visually-hidden">Email address</label>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address"  autofocus="" required>
            <label for="inputPassword" class="visually-hidden">Password</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Se souvenir de mon identifiant
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Se connecter</button>
            <p class="mt-5 mb-3 text-muted">© 2021</p>
        </form>
        <div clas="redirection_inscription">
            <p> Pas encore inscrit ?</p>
            <button class="w-80 btn btn-lg btn-primary" id="button_redirection">
                <a href="inscription" id="text_button">S'inscrire</a>
            </button>
        </div>

    </div>
</section>

@endsection