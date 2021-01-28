@extends('layout')

@section('contenu')

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

@endsection