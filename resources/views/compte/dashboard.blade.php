@extends('layout')

@section('contenu')

    <h2>Bienvenue sur votre compte {{$user->name}}</h2>

    <p>Depuis ce menu, ajoutez, modifiez ou supprimer vos "Story".</p>
    <section id="contact">
        <div class="section-content">
            <form action="/dashboard" method="POST" style="display: flex;">
                {{ csrf_field() }}
                <div class="col-md-6 form-line">
                    <div class="form-group">
                        <label for="title">Titre</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder=" Entrer un titre">
                    </div>
                    <div class="form-group">
                        <label for="post_date">Date du post</label>
                        <input type="date" class="form-control" name="post_date" id="post_date" placeholder="Entrer la date du post">
                    </div>	
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for ="story"> Votre Story </label>
                        <textarea  class="form-control" name="story" id="story" placeholder="Entrer votre Story" rows="8" cols="35" ></textarea>
                    </div>
                    <div>

                        <input type="submit" name="submit" class="btn btn-secondary" value="Publier">
                    </div>
                    
                </div>
            </form>
        </div>
    </section>

    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem; margin : 30px;">
        <div class="card-header">Mes Posts</div>
        <div class="card-body">
          <h5 class="card-title">Modifications et suppression</h5>
          <p class="card-text">Modifiez vos posts depuis ce menu</p>
        </div>
        <div class="card-footer">
            <a href="{{route('Story.board', ['id' => $user->id])}}" class="button">Voir détails</a>
        </div>
    </div>


    

@endsection