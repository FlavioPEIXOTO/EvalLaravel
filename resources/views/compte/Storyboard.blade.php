@extends('layout')

@section('contenu')

    <section>
        <h2>Listing des Story que vous avez postés</h2>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Titre</th>
                <th scope="col">Date de post</th>
                <th scope="col">Texte</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($stories as $storie)
              <tr>
                <th scope="row">{{$storie->title}}</th>
                <td>{{$storie->post_date}}</td> --}}
                {{-- <td>{{$story->story}}</td>
                <td></td>--}}
                <td class="odd"><a href="{{route('modif.Story', ['id' => $storie->id])}}" class="button">Modifier</a></td>
                {{-- <td class="odd"><a href="{{route('supprimer.Jeu', ['id' => $jeu->id])}}" class="button">Supprimer</a></td> --}}
              </tr>
                @endforeach
    
            </tbody>
          </table>
    
    
    </section>

@endsection