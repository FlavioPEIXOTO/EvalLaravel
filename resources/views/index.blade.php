@extends('layout')
@section('contenu')
    <main>
        <section class="main">

            <div class="title_top">
                <h1 id="title_index">Partagez vos histoires les plus étranges sur WizardStory !</h1>
            </div>

            <section class="index_container">
                <div class="block_post">
                    @foreach ($story as $stori)
                        
                    <h4>{{$stori->title}}</h4>
                    <p class="text_post">{{$stori->story}}</p>
                    <p>Posté pas : {{$stori->user_id}}</p>
                    <p>Le : {{$stori->post_date}}</p>
                    @endforeach
                </div>
                <div class="block_post">
                    @foreach ($story as $stori)
                        
                    <h4>{{$stori->title}}</h4>
                    <p class="text_post">{{$stori->story}}</p>
                    <p>Posté pas : {{$stori->user_id}}</p>
                    <p>Le : {{$stori->post_date}}</p>
                    @endforeach
                </div>
                <div class="block_post">
                    @foreach ($story as $stori)
                        
                    <h4>{{$stori->title}}</h4>
                    <p class="text_post">{{$stori->story}}</p>
                    <p>Posté pas : {{$stori->user_id}}</p>
                    <p>Le : {{$stori->post_date}}</p>
                    @endforeach
                </div>
            </section>






        </section>
    </main>

@endsection